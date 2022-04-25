	<?php 

	include 'connection.php';
	
	
	$ids = $_GET['ID'];

	$showquery = "select * from jobregistration where 'ID' = '$ids'";

	$showdata = mysqli_query($connection,$showquery);

	$arraydata = mysqli_fetch_array($showdata);




	if (isset($_POST['Check'])) {
              
             
              $Name =$_POST['name'];
              $Degree =$_POST['degree'];
              $Mobile =$_POST['mobile'];
             
              $Email =$_POST['email'];
              $Refer =$_POST['refer'];
              $Post =$_POST['post'];
              $Password = $_POST['password'];
             








$insertquery = "insert into jobregistration(NAME,DEGREE,MOBILE,EMAIL,REFER,POST,PASSWORD)  values('$Name','$Degree','$Mobile','$Email','$Refer','$Post','$Password') ";

// due to mysqli_query() data inserted into database

 $result1 = mysqli_query($connection,$insertquery);  



if ($result1) {
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
