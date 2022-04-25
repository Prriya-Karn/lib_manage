
	<?php 

	include 'connection.php';
	 $id = $_GET['ID'];
$selectQuery = "select * from jobregistration where ID = $id";

$query = mysqli_query($connection,$selectQuery);
$data = mysqli_fetch_array($query);





	if (isset($_POST['Check'])) {
              
             $id = $_GET['ID'];
              $Name =$_POST['name'];
              $Degree =$_POST['degree'];
              $Mobile =$_POST['mobile'];
             
              $Email =$_POST['email'];
              $Refer =$_POST['refer'];
              $Post =$_POST['post'];
              $Password = $_POST['password'];
             








$insertquery = "update jobregistration set ID = $id, NAME = '$Name', DEGREE = '$Degree', MOBILE= '$Mobile', EMAIL= '$Email', REFER= '$Refer', POST= '$Post', PASSWORD= '$Password'  where ID = $id";

// due to mysqli_query() data inserted into database

 $result1 = mysqli_query($connection,$insertquery);  



if ($result1) {
	?>

	<script>

		alert("updated succesfully");
	</script>

	<?php
}
else{
	?>
	<script>
		alert("updated not succesfully");
	</script>
	<?php
}



header('location:datadisplay.php');




}
	 ?>

<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>




</head>
<body>

	<form method="POST">
<ol>
	
	<li>Name <input type="text" name="name" value="<?php echo $data['NAME']; ?>"><br><br></li>
	<li>Degree <input type="text" name="degree" value="<?php echo $data['DEGREE']; ?>"><br><br> </li>
<li>Mobile <input type="text" name="mobile" value="<?php echo $data['MOBILE']; ?>"><br><br></li>
<li> Refer <input type="text" name="refer" value="<?php echo $data['REFER']; ?>">
</li>
<li>Email <input type="text" name="email" value="<?php echo $data['EMAIL']; ?>"><br><br></li>
<li>Post <input type="text" name="post" value="<?php echo $data['POST']; ?>"> <br><br></li>
<li>Password <input type="password" name="password" value="<?php echo $data['PASSWORD']; ?>"><br><br></li>
</ol>

<input type="submit" name="Check">
</form>

<a href="datadisplay.php"><button>Checkdisplay</button>
</a>



	<p>
</p>

</body>
</html>

