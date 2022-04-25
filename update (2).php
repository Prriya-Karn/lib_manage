<?php

	$connection = mysqli_connect("localhost:7882","root","");
	$db = mysqli_select_db($connection,"crudyoutube");
	$query = "update users set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "user_dashboard.php";
</script>