<?php
session_start();
?>

<!doctype>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
	 

	<form action = "<?php echo htmlentities($_SERVER['PHP_SELF']);    ?>"method="POST">
		<input type="text" name="email" placeholder="email">
		<br><br>

		<input type="password" name="password1" placeholder="password">
		<br><br>

		<input type="submit" name="submit">
		

	</form> 


<?php
        
        include 'connection.php';
        if (isset($_POST['submit'])) {
        	$email = $_POST['email'];
        	$password = $_POST['password1'];


        	$email_search = "select * from regis where email = '$email'";
        	$query = mysqli_query($connection, $email_search);

        	$isemail = mysqli_num_rows($query);

        	if ($isemail) {
        		
   $email_fetch = mysqli_fetch_assoc($query);

   $password_fetch = $email_fetch['ConfirmPassword'];

    // $password_check = password_verify($password, $password_fetch);

if ( $password_fetch === $password) {
	echo "password correct";
	?>
	<script>
		location.replace("website.php");
	</script>
	<?php
}
else{
	echo "password incorrect";
}



        	}

        	else{
        		echo "email invalid";
        	}






        	 }







?>






	</body>
	</html>