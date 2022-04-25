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
		</div>

		<br>

		<div class="navbar">
			<div class="n">
				<a href="indexkusum.php">Library</a>
				<a href="attendance.php">Attendance</a>
				
				<a href="dashboard.php">Result</a>

			
				
				<a href="courses.php">Our Courses</a>
				<select name="links" size ="1" id="" onchange="window.location.href = this.value;">
					<option value="studydownload.php">study material</option>
					<option value="studydownload.php"> Download</option>
					
					<option value="studyupload.php">Upload</option>
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


<?php
include 'connection.php';
if($_GET['date']){
	$date = $_GET['date'];
$query = "SELECT addstudent.*,attendance.* FROM
attendance inner join addstudent on attendance.ID=addstudent.ID and attendance.date='$date'";


$result = mysqli_query($connection,$query);

if ($result->num_rows>0) {
	$i = 0;
	while ($val=$result->fetch_array()) {
		$i++;
	
?>

  <tr>
    <td><?php echo $val['NAME']; ?></td>
    <td><?php echo $val['ROLLNO.']; ?></td>
    <td><?php echo $val['EMAIL']; ?></td>
    <td><?php echo $val['BRANCH']; ?></td>
    <td>Present<input type="radio" value ="Present"
     <?php
     if($val['value']=='Present')
     	echo "checked";
     ?>



    	>
   
Absent<input type="radio" value ="Absent"
     <?php
     if($val['value']=='Absent')
     	echo "checked";
     ?>



    	>


   </td>
    
  </tr>

  <?php
}
}
}

 ?> 

</table>
<br><br>

<div class="attendance-button">
<button>Take Attendance </button>
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
				<h4>Nirman Vihar,Metro Station,Shakarpur,Delhi-110092</h4>

			</div>
			<br><br>

				<div class="extra">
					<span class="fas fa-phone-alt"></span>
					<span class="text">01122023594,22460311 </span><br><br>
						<a class="a" style = "text-decoration: none; color: white;" href="mailto:priyakarn2000@gmail.com">
					<span class="fas fa-envelope"></span>
			<span class="text">ap.delhi@nic.in</span></a><br><br>
					<a class = "a" style = "text-decoration: none; color: white;" href="map.php"><span class="fas fa-map-marker-alt"></span>
					<span class="text">Nirman Vihar</span>
				</a>
				</div>
				<br><br>
				
				<div class="social">
					<a href="https://www.facebook.com/Gobharateducation"><span class="fab fa-facebook-f"></span></a>
					<a href="#"><span class="fab fa-twitter"></span></a>
					<a href="https://www.instagram.com/gobharateducation/"><span class="fab fa-instagram"></span></a>
					
					<a href="https://youtu.be/bf3_Od8ocvc"><span class="fab fa-youtube"></span></a>
					
				</div>

			</div>
		</div>
		

	<div class="center-box">

			<h2>Quick Links</h2>
			<div class="content-1">
				<ul style="border-left: none; ">
				<li><a href="grocerywebsite\notice.docx" download>Notice</a></li>
				<li><a href="">Syllabus</a></li>
				<li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm">SBI Collect</a></li>
				<li><a href="grocerywebsite\pms_family.docx" download>PMS Declaration(family income)</a></li>
			  <li><a href="grocerywebsite\pms_decl_stud.docx" download>PMS Declaration(student)</a></li>				
							</ul>


				

			</div>
		</div>

<div class="right-box">

			<h2>Explore</h2>
			<div class="content-2">
				<ul style="border-left: none; ">
				<li><a href="">Students Events</a></li>
				<li><a href="map.php">Google Map</a></li>
				<li><a href="">Photo Gallery</a></li>
				<li><a href="calendar.php">Institute Calendar</a></li>
			  <li><a href="">Campus Diary</a></li>				
							</ul>


				

			</div>
		</div>



	</div>
</footer>

	
	</body>
	</html>