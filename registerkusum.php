<?php
	$connection = mysqli_connect("localhost:7882","root","");
	$db = mysqli_select_db($connection,"crud");

	if (isset($_POST['submit'])) {
	$name= $_POST['name'];
    $email= $_POST['email'];
    $pass= $_POST['password'];
    $mob = $_POST['mobile'];
    $add= $_POST['address'];
	
	$query = "insert into `users`(`name`, `email`, `password`, `mobile`, `address`) VALUES ('$name','$email','$pass','$mob','$add')";
	$query_run = mysqli_query($connection,$query);
}
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "indexkusum.php";
</script>

<!-- "insert into `registration`(`Fname`,`Lname`,`Email`,`Password`,`Cpassword`) values('$Fname','$Lname','$Email','$Password','$Cpassword')"; -->