<!doctype>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="h2college.css">
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
		</div>

		<br>

		<div class="navbar">
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
		</form>
		</div>
		<br><br>


<!-- attendance management  -->

<div class="main-attendance">

	<div class="h-attendace">
		<h1>Attendance Management</h1>
	</div>
	<br><br><br><br><br><br><br><br><br>
	<div class="add-student">
		<h2>Add Student</h2>
	</div>

<div class="input-attendance">

	<form method="POST">
	<input type="text" name="name" placeholder="Name"><br><br>
	<input type="text" name="rollno" placeholder="Roll No."><br><br>
	<input type="email" name="email" placeholder="Email"><br><br>
	<input type="text" name="branch" placeholder="Branch"><br><br>

	<button type="submit" name="submit">Submit</button>
	</form>
	


	
</div>
	
<br><br>

<div class="attendance-butt">
<a href="attendance.php"><button>Back </button></a>
</div>


	</div>
</div>



<br><br><br>

<!-- footer -->

<footer>
	<div class="main-content">

		<div class="left-box">

			<img src="cl.png" style="width:20%;margin-top: 5%; margin-left: 20%;width: 40%;">
			
			<div class="content-1">
				
   
    
  
<div class="p">
		<h4>Ambedkar Institute Of Technology</h4>
				<h4>Nirman Vihar,Shakarpur,New Delhi,Delhi 110043</h4>

			</div>
			<br><br>

				<div class="extra">
					<span class="fas fa-phone-alt"></span>
					<span class="text">011-2659-7135</span><br><br>
					<span class="fas fa-envelope"></span>
					<span class="text">abc@gmail.com</span><br><br>
					<span class="fas fa-map-marker-alt"></span>
					<span class="text">Nirman Vihar</span>
				</div>
				<br><br>
				
				<div class="social">
					<a href="#"><span class="fab fa-facebook-f"></span></a>
					<a href="#"><span class="fab fa-twitter"></span></a>
					<a href="#"><span class="fab fa-instagram"></span></a>
					<a href="#"><span class="fab fa-youtube"></span></a>
					
				</div>

			</div>
		</div>
		

	<div class="center-box">

			<h2>Quick Links</h2>
			<div class="content-1">
				<ul style="border-left: none; ">
				<li><a href="">Departments</a></li>
				<li><a href="">Departments</a></li>
				<li><a href="">Departments</a></li>
				<li><a href="">Departments</a></li>
			  <li><a href="">Departments</a></li>				
							</ul>


				

			</div>
		</div>

<div class="right-box">

			<h2>Explore</h2>
			<div class="content-2">
				<ul style="border-left: none; ">
				<li><a href="">Departments</a></li>
				<li><a href="">Departments</a></li>
				<li><a href="">Departments</a></li>
				<li><a href="">Departments</a></li>
			  <li><a href="">Departments</a></li>				
							</ul>


				

			</div>
		</div>



	</div>
</footer>



	
	</body>
	</html>


<?php
include 'connection.php';
         
         if(isset($_POST['submit'])) {
         	  $Name = $_POST['name'];
         	  $Rollno = $_POST['rollno'];
         	  $Email = $_POST['email'];
         	  $Branch = $_POST['branch'];




     $insertquery = "INSERT INTO `addstudent`(`NAME`, `ROLLNO.`, `EMAIL`, `BRANCH`) VALUES ('$Name','$Rollno','$Email','$Branch')";

     $q = mysqli_query($connection,$insertquery);


if ($q) {
	?>

	<script>

		alert("data inserted properly");
	</script>

	<?php
}
else{
	?>
	<script>
		alert("data inserted properly");
	</script>
	<?php
}


}

?>