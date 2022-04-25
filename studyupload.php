<?php
include 'connection.php';
if(isset($_POST['submit'])){


// 	$files = $_FILES['file'];
// 	$filename = $files['name']; //55.jpg
// 	$filetemp = $files['tmp_name'];
// 	$fileext = explode('.',$filename); //explode string ko break krta hai like $filename mein 55.jpg store hai to explode yhan . ke phele wala string aur . ke baad waala string ko break kr rha hai  
// 	$filecheck = strtolower(end($fileext)); //fileext mein hmara 55.jpg hai ab filcheck mein fileext ka end ka store ho gya hai means jpg wo bhi uppercase mein

// 	$fileextstore = array('png','jpg','jpeg');
// if (in_array($filecheck,$fileextstore)) {

// $destinationfile = 'grocerywebsite/'.$filename;
// move_uploaded_file($filetemp, $destinationfile);

// 	$insertquery = "INSERT INTO `upload`(`Image`) 
// VALUES ('$filename')";
// 	$query = mysqli_query($connection,$insertquery);
// }

// }

$pdf = $_FILES['file']['name'];
$pdf_type = $_FILES['file']['type'];
$pdf_size = $_FILES['file']['size'];
$pdf_temp_loc=$_FILES['file']['tmp_name'];
$pdf_store = "grocerywebsite/".$pdf;

move_uploaded_file($pdf_temp_loc,$pdf_store);
	$insertquery = "INSERT INTO `upload`(`Image`) VALUES ('$pdf')";
		$query = mysqli_query($connection,$insertquery);


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
		</div>

		<br>

		<div class="navbar">
			<div class="n">
				<a href="">Library</a>
				<a href="">Attendance</a>
				
				<a href="">Result</a>

			
				<a href="">Our Courses</a>
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


<!-- Notes Download -->
		<div class="notes2">

			<div class="notes1">
			<h1>Study Material Upload(In PDF)</h1>
</div>

<!-- <form method="POST" enctype="multipart/form-data"> -->
 	

<div class="content">
	<!-- <form method="POST" enctype="multipart/form-data"> -->
     <ul class="main-ul">

		<li>ITES&M
		<ul>
		   <li>1 SEMESTER
			<ul>
				<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
										<form method="POST" enctype="multipart/form-data">
									<li style="color: royalblue; font-size: 20px;">Physics notes upload here
										<!-- <form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->

									</li>
								</form>

								<form method="POST" enctype="multipart/form-data">
									<li style="color: royalblue; font-size: 20px;">workshop notes upload here
										<ul><input type="file" name="file"> 
										<input type="submit" name="submit">
									</ul>

									</li>
								</form>
									<form method="POST" enctype="multipart/form-data">
									<li style="color: royalblue; font-size: 20px;">communication notes upload here
										<!-- <form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->

									</li>
								</form>
								</ul>


							</li>
							<li>2 SEMESTER
							<ul>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Applied Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">C++ notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Applied Physics notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

								<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Electrical notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

								</ul>
							</li>
							<li>3 SEMESTER
							<ul>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">WEB Designing notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Networking notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Javascript notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Java notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
										</ul>
							</li>
						</ul>
					</li>


					<li>CS
						<ul>
							<li>1 SEMESTER
							<ul>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

								<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

								</ul>
							</li>
							<li>2 SEMESTER <ul>
								<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

									<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

								<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

								</ul>
							</li>
							<li>3 SEMESTER<ul>
										<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>
										<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

										<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

										<form method="POST" enctype="multipart/form-data">
			  <li style="color: royalblue; font-size: 20px;">Maths notes upload here
			  <!-- 	<form method="POST" enctype="multipart/form-data"> -->
				<ul><input type="file" name="file"> 
				    <input type="submit" name="submit">
				</ul>
				<!-- </form> -->					
										</li>

									</form>

										</ul>
							</li>
						</ul>
					</li>

					<li>Electrical
					 <ul>
							<li>1 SEMESTER
							<ul>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul><ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
								</ul>
							</li>
							<li>2 SEMESTER<ul>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
								</ul>
							</li>
							<li>3 SEMESTER 
							<ul>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
									<li>inner shits here<ul><a href="">Download PDF</a></ul></li>
								</ul>
							</li>
						</ul>
					</li>

				</ul>
				<!-- </form> -->
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