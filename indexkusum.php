<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="m14.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		body{
  			background-image: url('lib.jpg');
  			background-size: cover;
  			background-repeat: no-repeat;
  		}
  		#main_content{
  			margin-top: 2%;
  			background-color: whitesmoke;
  			padding: 30px;
  			width: 300px;
  			height: 350px;
  		}
  	</style>
</head>
<body>
	<div class="logo">
    <a href=""><img src="collegelogo1.png" style="width: 150px; height: 90px; position: absolute; left: 10%; top:20px;  background-color: darkblue;  box-shadow: 2px 2px 4px #000000;"></a>
    
  </div>
		<div class="top">
			<h1>Ambedkar Institute Of Technology </h1>
			<p>Shakarpur Near Nirman Vihar Metro Station, Delhi, 110092</p>
			<br><br><br><br><br>
			
		</div>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="indexkusum.php">Library Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/indexkusum1.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="indexkusum.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signupkusum.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee style="font-size: 25px; color: white; background-color: orange; ">This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<!-- <div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peaceful Environment</li>
			</ul>
		</div>		 -->
		<center><div class="col-md-3" id="main_content">
			<center><h3>User Login Form</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>


			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost:7882","root","");
					$db = mysqli_select_db($connection,"crud");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
	</div></center>
	</div>
</body>
</html>