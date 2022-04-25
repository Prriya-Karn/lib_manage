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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="m15.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		
	</head>
	<body>
	<div class="nav">
<div class="logo">
    <a href=""><img src="collegelogo1.png" style="width: 150px; height: 90px; position: absolute; left: 10%; top:20px;  background-color: darkblue;  box-shadow: 2px 2px 4px #000000;"></a>
    
  </div>
		<div class="top">
			<h1>Ambedkar Institute Of Technology </h1>
			<p>Shakarpur Near Nirman Vihar Metro Station, Delhi, 110092</p>
			<br><br><br><br><br><br><br>
			<marquee style = "color:white;font-size: 22px; word-spacing: 2px;">DSEU Tenders for 1- Supply of Books and 2- Empanelment of Organisations for Operating Courses in Partners with DSEU may be downloaded from the link 'DSEU TENDER' given for more information kindly visit DSEU at www.dseu.ac.in</marquee>
		</div>

		<br>

		<div class="navbar"  >
			<div class="n">
				<a href="indexkusum.php">Library</a>
				<a href="attendance.php">Attendance</a>
			
				<a href="dashboard.php">Result</a>

			
			
			
				<a href="courses.php">Our Courses</a>
				<select name="links" size ="1" id="" onchange="window.location.href = this.value;">
					<option value="studydownload.php">Study Material</option>
					<option value="studydownload.php"> Download</option>
					
					<option  value="studyupload.php">Upload</option>
				</select>
<a style="color: orange; font-weight: bold;"><?php echo $_SESSION['$Fname']?></a>

			
			</div>
			<form style="	text-align: center;
	position: absolute;
	left: 93%;
	top: 31%;">

				<button><a href="collegelogin.php">Logout</a></button>
			<!-- <button><a href="collegeregister.php">Register</a></button> -->
		</form>
		</div>

		
		<br><br>






<br><br><br><br>

<div class="div1">
		<div class="wrapper1" >

<div class="slider" >
	<!-- <img style= "width: 900px; height: 550px; background-image: url('Kedarnath.jpg'); background-repeat: no-repeat;" >
 -->
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</div>

<!-- list -->
<!-- cards -->
<div class="main" style="border:2px solid black;">
<img src="collegelogo1.png" style="width: 80px; height: 50px; position: absolute; left: 68%; top:59%;  background-color: white;  "><center><h1 style="font-size: 30px;">AIT Faculties</h1><img src="collegelogo1.png" style="width: 80px; height: 50px; position: absolute; left: 86%; top:59%;  background-color: white;  "></center>
<center>

<div class="card" style="margin-left: ;">

<div class="image">
  <a href=""> <img src="princin.jpg"> </a>
</div>
<div class="name">
	<h3>Mrs.Neeru Mehta(Principal)</h3>
</div>
</div>


<!--cards -->


<!-- <div class="card">

<div class="image">
   <a href="Cartoons.php"><img src="library1.jpg"></a>
</div>

<div class="name">
	<h3>Library management</h3>
</div>
</div> -->
<!--cards -->


<div class="card">

<div class="image">
  <a href=""> <img src="shivamsir2.jpeg"></a>
</div>
<div class="name">
	<h3>Mr.Shivam Gupta(IT Department)</h3>
</div>
</div>
<!--cards -->

<!-- 
<div class="card">

<div class="image">
   <a href="website1.php"><img src="library1.jpg"></a>
</div>
<div class="name">
	<h3>Library management</h3>
</div>
</div> -->
<!--cards -->


<!-- <div class="card">

<div class="image">
  <a href="website1.php"></a> <img src="library1.jpg"></a>
</div>
<div class="name">
	<h3>Library management</h3>
</div>
</div> -->
<!--cards -->

<!-- <div class="card">

<div class="image">
  <a href="website1.php"> <img src="library1.jpg"></a>
</div>
<div class="name">
	<h3>Library management</h3>
</div>
</div> -->
<!--cards -->

<!-- <div class="card">

<div class="image">
  <a href="website1.php"> <img src="library1.jpg"></a>
</div>
<div class="name">
	<h3>Library management</h3>
</div>
</div>
 --><!--cards -->

<!-- 
<div class="card">

<div class="image">
  <a href="website1.php"><img src="library1.jpg"></a>
</div>
<div class="name">
	<h3>Library management</h3>
</div>
</div>


<div class="card">

<div class="image">
  <a href="website1.php"><img src="library1.jpg"></a>
</div>
<div class="name">
	<h3>Library management</h3>
</div>
</div>
 -->
</center>

</div>


</div>
<br><br><br><br>
<!-- ABOUT US -->



<div style="background: skyblue;  margin-left: 5%;margin-right: 5%; height:8%; border-radius: 30px;  box-shadow: 0 0 2rem 0 rgba(0, 0, 0, 0.2);">
	<h2 style="color: white; font-size: 35px; margin-left:5%;margin-right: 5%; text-align: center; padding-top: 0.6%; 	letter-spacing: 2px; ">About Us</h2></div>
<br><br><br><!-- <br><br><br> -->
<div class="aboutus">

	<div class="about1">
		<h1>About Us</h1><br>
		<pre style="font-size:20px;text-align: left; letter-spacing">Lorem Ipsum is simply dummy text of the printing and typesetting 
  industry. Lorem Ipsum has been the industry's standard dummy
text ever since the 1500s, when an unknown printer 
  took a galley of type and scrambled it to make a type specimen book.
It has survived not only five centuries, but also the
  leap into electronic typesetting, remaining essentially unchanged.
It was popularised in the 1960s with the release 
  of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software 
  like Aldus PageMaker including versions of Lorem Ipsum.</pre>
		
	</div>

	<div class="about2">
		<img src="students.jpg">
	</div>
	
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<!-- 
classmates teachers batches incomes -->

<div class="logo">
	<div class="card1">
		<img src="teacher1.png">
		<div class="head">
		  <h2>18390</h2>
		   <p>Teachers</p>
		</div>
		
	</div>
	

	<div class="card1">
		<img src="students.png">
		<div class="head">
		  <h2>19990</h2>
		   <p>Students</p>
		</div>
		
	</div>

	<div class="card1">
		<img src="staff1.png">
		<div class="head">
		  <h2>18390</h2>
		   <p>Staff</p>
		</div>
		
	</div>
	
	<div class="card1">
		<img src="pr1.jpg">
		<div class="head"><br>
		  <h2>14390</h2>
		   <p>Projects</p>
		</div>
		
	</div>
	
	
</div>
<br><br><br>

















<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!-- <br><br><br> -->

<!-- Our team -->



<!-- Our team -->

<div class="main1">
	<div style="background: skyblue;  margin-left: 5%;margin-right: 5%;margin-top: 10%; height:8%;border-radius: 30px;  box-shadow: 0 0 2rem 0 rgba(0, 0, 0, 0.2);"class="ourteam">
		<h2 style="margin-top: -1%; text-align: left; font-size: 35px; padding-top: 1.5%; ">Our Team</h2>
	</div>
	<br><!-- <br><br> -->
<center>
<div class="card2">

<div class="image1">
  <a href=""> <img src="priya3.jpeg"> </a>
</div>
<div class="title">
 <h1>
Priya Karn</h1>
 <p>Student</p>
</div>




</div>
<!--cards -->


<div class="card2">

<div class="image1">
   <a href=""><img src="kusum.jpeg"></a>
</div>
<div class="title">
 <h1>Kusum Kumari</h1>
 <p>Student</p>
</div>

</div>
<!--cards -->


<!-- <div class="card2">

<div class="image1">
  <a href="song.php"> <img src="elonmusk.jpg"></a>
</div>
<div class="title">
 <h1>
Hindi Songs</h1>
<p>javascript</p>
</div>

</div> -->
</center>
<!--cards -->


<!-- <div class="card2">

<div class="image1">
   <a href="website1.php"><img src="elonmusk.jpg"></a>
</div>
<div class="title">
 <h1>
Serials</h1>
<p>javascript</p>
</div>

</div>
</div> -->
<br><br><br><br>

<div class="contact">
	
		<h2>Contact Us</h2>
	
	<form method = "POST" class="form">

		<div class="text">
			<input type="text" name="fname" placeholder="First Name"><br><br><br>
			<input type="text" name="lname" placeholder="Last Name"><br><br><br>

			<input type="email" name="email" placeholder="Email Address"><br><br><br>

		</div>

		<div class="message">
			<textarea placeholder="Message" name="message"></textarea>
			</div><br>
<div class="button">
			<button type="submit" name="submit" style="font-size: 18px;">Submit</button><br>
</div>
	</form>
</div>
<br><br><br>




<?php
include 'connection.php';

if (isset($_POST['submit'])) {
 $Fname = $_POST['fname'];
 $Lname = $_POST['lname'];
 $Email = $_POST['email'];
 $Message = $_POST['message'];

 $insertquery = "INSERT INTO `contact`(`Fname`, `Lname`, `Email`, `Message`) VALUES (' $Fname','$Lname','$Email','$Message')";
 $query = mysqli_query($connection,$insertquery);

 if ($query) {
 	?>

	<script>

		alert("Inserted Succesfully 😊🤩 ");
	</script>

	<?php
 }

 else{
 	?>

	<script>

		alert("Not inserted Succesfully 😥😭 ");
	</script>

	<?php
 }
}



?>




<!-- footer -->


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
				<br>
				
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
				<li><a href="studentevent.php">Students Events</a></li>
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