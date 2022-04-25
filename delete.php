<?php
include 'connection.php';
$id = $_GET['ID'];
$insertquery = "Delete from jobregistration where ID = $id";

// due to mysqli_query() data inserted into database

 $result1 = mysqli_query($connection,$insertquery);  



if ($result1) {
	?>

	<script>

		alert("deleted succesfully");
	</script>

	<?php
}
else{
	?>
	<script>
		alert("deleted not succesfully");
	</script>
	<?php
}



header('location:datadisplay.php');
?>