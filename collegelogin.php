<?php
session_start();
include 'connection.php';
if (isset($_POST['submit'])) {
// mysqli_real_escape_string extra security for password
	// $Fname = mysqli_real_escape_string($connection, $_POST['fname']);
 //           	$Lname = mysqli_real_escape_string($connection, $_POST['lname']);
 //           	$Email = mysqli_real_escape_string($connection,$_POST['email']);
 //           	$Password = mysqli_real_escape_string($connection, $_POST['password']);
 //           	$Cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);

	$Fname = $_POST['fname'];
	$Lname = $_POST['lname'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	$Cpassword = $_POST['cpassword'];

$select = "Select * from registration where Email =
'$Email' ";
$query = mysqli_query($connection,$select);
$emailcount = mysqli_num_rows($query);

if ($emailcount>0){

	?>

	<script>

		alert("email already exist 🙄🙄");
	</script>

	<?php
	
}

else
{

if($Password==$Cpassword)
{
	
   $insertquery = "insert into `registration`(`Fname`,`Lname`,`Email`,`Password`,`Cpassword`) values('$Fname','$Lname','$Email','$Password','$Cpassword')";
	$query = mysqli_query($connection,$insertquery);

	if ($query){
	?>

	<script>

		alert("Inserted Succesfully 😊🤩 ");
	</script>

	<?php
	}
	else{
	?>

	<script>

		alert("Not Inserted Succesfully 😢😭 ");
	</script>

	<?php
}

}

else{
	
	?>

	<script>

		alert("Password not match 😢😯😭 ");
	</script>

	<?php
}



}



	


}

if (isset($_POST['submit1'])) {
	$Email = $_POST['email'];
	$Password = $_POST['password'];

	$select = "select * from registration where Email = '$Email'";
	$query = mysqli_query($connection,$select);
	$email_search = mysqli_num_rows($query);

	if ($email_search) {
		$fetch_email = mysqli_fetch_assoc($query);
		$Password_fetch = $fetch_email['Password'];

		$_SESSION['$Fname'] =  $fetch_email['Fname'];
		if ($Password==$Password_fetch) {
			echo "login successfully";
			?>
	<script>
		location.replace("mcollege.php");
	</script>
	<?php

		}
		else
		{
			?>

	<script>

		alert("Password Incorrect 😑😶 ");
	</script>

	<?php
		}
	}

	else {
		?>

	<script>

		alert("Email Invalid😏🙄 ");
	</script>

	<?php
	}





	
}



?>




<!doctype>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="m15.css">
			<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>

		

		<div class="nav">
<div class="logo">
    <a href=""><img src="collegelogo1.png" style="width: 150px; height: 90px; position: absolute; left: 10%; top:20px;  background-color: skyblue;  box-shadow: 2px 2px 4px #000000;"></a>
    
  </div>
		<div class="top">
			<h1>Ambedkar Institute Of Technology </h1>
			<p>Shakarpur Near Nirman Vihar Metro Station, Delhi, 110092</p>
			<br><br><br><br><br><br><br><br>
			<marquee style = "color:white;font-size: 20px;">DSEU Tenders for 1- Supply of Books and 2- Empanelment of Organisations for Operating Courses in Partners with DSEU may be downloaded from the link 'DSEU TENDER' given for more information kindly visit DSEU at www.dseu.ac.in</marquee>
		</div>

		<br>

		<!-- <div class="navbar">
			<div class="n">
				<a href="">Library</a>
				<a href="">Attendance</a>
				<a href="">Video Classes</a>
				<a href="">Result</a>

			
				<a href="">Marking System</a>
				<a href="">Academic</a>
				<a href="">Famous Courses</a>
				<select name="links" size ="1" id="" onchange="window.location.href = this.value;">
					<option value="studydownload.php">study material</option>
					<option value="studydownload.php"> Download</option>
					
					<option>Upload</option>
				</select>


				</script>
			
			</div>
			<form>
				<button>Login</button>
			<button>Register</button>
		</form> -->
		</div>
		<!-- <br><br> -->



		<!-- Registration form -->
<div class="box-1">
<div class="box">
	<input type="checkbox" class="toggle-btn" name="">

<div class="signup">
	<form class="input-group" method="POST" >
		<input type="text" name="fname" placeholder="First Name" class="inp">
		<input type="text"  name="lname" placeholder="Last Name" class="inp">
		<input type="email" name="email" placeholder="Email id" class="inp">
		<input type="password" name="password" placeholder="Enter Password" class="inp">
		<input type="password"   name="cpassword" placeholder="Confirm Password" class="inp">
		<button type="submit" style="transform:translateY(80px);"  name="submit">Register</button>
	</form>
</div>

<div class="login">
				<div class="user-1">
	<img src="login.jpg">
		</div>
	<form method="POST" class="input-group">
		<input type="email" name="email" placeholder="Email id" class="inp">
		<input type="password" name="password" placeholder="Enter Password" class="inp">
        <button type="submit"  style="transform:translateY(80px);" name="submit1">Login</button>
	</form>


</div>
</div>

</div>

	</body>
	</html>

