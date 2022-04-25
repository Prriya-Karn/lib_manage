	<?php

      $username = "root";
      $password = "";
      $server = "localhost:7882";
      $database = "crud";

$connection = mysqli_connect($server,$username,$password,$database);


if ($connection) {
 ?>
  <script>
    alert("connected properly");
  </script>
  <?php
}
else{
  ?>
  <script>
    alert("connected not properly");
  </script>
  <?php
}
 


		?>
