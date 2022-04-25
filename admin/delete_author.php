<?php
	$connection = mysqli_connect("localhost:7882","root","");
	$db = mysqli_select_db($connection,"crud");
	$query = "delete from authors where author_id = $_GET[aid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Author Deleted...");
	window.location.href = "manage_author.php";
</script>