	<?php
include 'connection.php';

 if($_SERVER['REQUEST_METHOD']=='POST') {
	$att = $_POST['attendance'];
	date_default_timezone_set('Asia/Kolkata');

	$date = date('d-m-y');

	$query = "select distinct date from attendance";
	// $result = $link->query($query);
	$result = mysqli_query($connection,$query);
	$b = false;

	if($result->num_rows>0){ 
		while($check=$result->fetch_array()){
			if($date==$check['date']){
				$b = true;
				echo "<div class='alert alert-danger'>
				attendance already taken today</div>";

			}
			
		} 
}
		if(!$b){
			foreach ($att as $key => $value) {
				if($value=="Present") {
					// $quer = "insert into attendance(value,ID,date) values('Present','$key','$date')";
				$quer = "INSERT INTO `attendance`(`value`, `ID`, `date`) VALUES ('Present','$key','$date')";
					// $insertquery = $link->query($query);
					$insertquer = mysqli_query($connection,$quer);
					echo "insert successfully";
				}
 
				else{
					// $quer = "insert into attendance(value,ID,date) values('Absent','$key','$date')";
					$quer = "INSERT INTO `attendance`(`value`, `ID`, `date`) VALUES ('Absent','$key','$date')";
					// $insertquery = $link->query($query);
			$insertquer = mysqli_query($connection,$quer);
			echo "insert successfully";
				}
			}

			if ($insertquer) {
			echo "<div class='alert alert-danger'>
				attendance taken successfully</div>";
			}
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
	<div class="a-student">
		<a href="view.php">View</a>
		<a href="addstu.php">Add Student</a>
		
	</div>
	<br><br>

	<form method="POST">
	<div class="table-attendance">
		<table style="width:100%">
<thead>
  <tr>
    <th>Name</th>
    <th>Roll No.</th>
    <th>Email</th>
     <th>Branch</th>
      <th>Attendance</th>
  </tr>
  

 </thead>

<tbody>


	<?php
include 'connection.php';



$select = "select * from addstudent";
$query = mysqli_query($connection,$select);
// $fetch = mysqli_fetch_array($query);
// echo $fetch['NAME'];


	while ( $fetch = mysqli_fetch_array($query)){
		?>
	

    <tr>
    <td> <?php echo $fetch['NAME']; ?></td>
    <td><?php echo $fetch['ROLLNO.']; ?></td>
    <td><?php echo $fetch['EMAIL']; ?></td>
    <td><?php echo $fetch['BRANCH']; ?></td>

    <td>
    	Present<input required type="radio" name="attendance[<?php echo $fetch['ID']?>]" value="Present">
    Absent<input required type="radio" name="attendance[<?php echo $fetch['ID']?>]" value="Absent">

</td>
  
  </tr>


 <?php
}
?>




</tbody>
</form>

 


</table>
<br><br>

<div class="attendance-button">
<button type="submit" name="submit1">Take Attendance </button>
</div>


	</div>

<!-- </form> -->

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


