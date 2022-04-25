<?php
	$connection = mysqli_connect("localhost:7882","root","");
	$db = mysqli_select_db($connection,"crud");
	$query = "delete from books where book_no = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Deleted...");
	window.location.href = "manage_book.php";
</script>