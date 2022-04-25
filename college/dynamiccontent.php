<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
Enter your Fav color 
<input type="text" name="favcolor"> 

		<input type="submit" name="submit" value="Check Now">

	</form>   


	<p> 
		<?php
        if (isset($_POST['submit'])) {
            $favColor = $_POST['favcolor'];


switch ($favColor) {
	case 'green': echo "your favcolor is green";
		
		break;
	case 'red': echo"your favcolor is red";
	break;

	case 'black' : echo "your favcolor is Black";
	break;

	default:
		echo "I can't found your favcolor";
		
}
 



        	 }









		?>
	</p>

</body>
</html>