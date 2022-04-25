
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action = "" method="POST">
		
		<input type="text" name="email" placeholder="Email address"><br><br>

		<input type="password" name="password" placeholder="password"> <br><br>

		<input type="submit" name="submit">
	</form>

	<?php
              
              include 'connection.php';

              if (isset($_POST['submit'])) {
              	$email = $_POST['email'];
              	$password = $_POST['password'];

            $email_search = "select * from regis where email = '$email' ";

            $query = mysqli_query($connection, $email_search);

            $email_count = mysqli_num_rows($query);



            if ($email_count) {

 $email_pass = mysqli_fetch_assoc($query); //yhan email fetch ho rha hai kyuki $que mein email ka query connect hai

 $dbpass = $email_pass['password']; //yhan encode password hai jo database mein store hai

 $decodepassword = password_verify($password, $dbpass);


 if ($decodepassword) {
 	echo "password valid";
 
 }




            	
            }

            else{
            	echo "email not valid";
            }
        


              }











	?>

</body>
</html>