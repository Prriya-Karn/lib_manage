<?php
	$connection = mysqli_connect("localhost:7882","root","");
	$db = mysqli_select_db($connection,"crud");
	$query = "delete from category where cat_id = $_GET[cid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("category Deleted...");
	window.location.href = "manage_cat.php";
</script>