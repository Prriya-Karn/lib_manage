
<h1>List of candidate for web developer job</h1>
<div style="background-color: orange; width: 100%; height: 100%;">
<form>
	<div> 
	<table>
		<thead>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>degree</td>
			<td>mobile</td>
			<td>email</td>
			<td>refer</td>
			<td>post</td>
			<td>password</td>
			<td>operation</td>
			
		</tr>
		</thead>

		<tbody>


			<?php


include 'connection.php';

$selectQuery = "select * from jobregistration";

$query = mysqli_query($connection,$selectQuery);

$num = mysqli_num_rows($query);

$a = mysqli_fetch_array($query);
// echo $a[1]."<br>" .$a[2];
echo $a['NAME'];

// while ($a = mysqli_fetch_array($query)) {
// 	echo $a['NAME']."<br>"; 
// }


// due to mysqli_fetch_array() we get all data from database
while ($data = mysqli_fetch_array($query)) {
	

?>
<tr>
	        <td><?php echo $data['ID']; ?></td>
			<td><?php echo $data['NAME']; ?></td>
			<td><?php echo $data['DEGREE']; ?></td>
			<td><?php echo $data['MOBILE']; ?> </td>
			<td><?php echo $data['EMAIL']; ?></td>
			<td><?php echo $data['REFER']; ?></td>
			<td><?php echo $data['POST']; ?> </td>
			<td><?php echo $data['PASSWORD']; ?></td>
			<td><button><a href="updates.php?ID=<?php echo $data['ID']; ?>
			">update</a></button> </td>
			<td><button><a href="delete.php?ID=<?php echo $data['ID']; ?>
			">Delete</a></button></td>

		</tr>
<?php

}

?>



		
		</tbody>
	</table>
</div>
</form>
</div>