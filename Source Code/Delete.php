<?php 
header('Location:Ad-SearchDeleteCars.php'); 
 $id=$_GET['id'];
 $delete=mysql_query("delete from carsforsale where id=$id");
 ?>