<?php
require ('CRUD.php');
session_start();
$mysql_host= 'localhost';
$mysql_user= 'root' ;
$mysql_pass= '' ;
$mysql_db= 'autoauthority' ;
$conn_error= 'Could not connect.';
@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);
@mysql_select_db($mysql_db) or die('Could not connect to database.');

//1st
		if(isset($_POST['SubmitOn']))
	{
		$refid=$_POST['idd'];
		$updateid=$_POST['nidd'];

$query= "UPDATE `carsforsale` SET `id`= $updateid where `id`= $refid LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Id updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('Id already exists!!')</script>";
	}
	}
	//2nd
			if(isset($_POST['SubmitOn1']))
	{
		$refidd=$_POST['carname'];
		$updateidd=$_POST['ncarname'];

$query= "UPDATE `carsforsale` SET `CarName`= '$updateidd' where `CarName`= '$refidd' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Name updated')</script>";
	}
	else
	{
		echo "<script>alert('Name Not Updated!')</script>";
	}
	}
	//3rd
			if(isset($_POST['SubmitOn2']))
	{
		$refid=$_POST['price'];
		$updateid=$_POST['nprice'];

$query= "UPDATE `carsforsale` SET `Price`= $updateid where `Price`= $refid LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Price updated from $refid dollar to $updateid dollar !')</script>";
	}
	else
	{
		echo "<script>alert('Price Not Updated!!')</script>";
	}
	}
	//4th
			if(isset($_POST['SubmitOn3']))
	{
		$refid=$_POST['bags'];
		$updateid=$_POST['nbags'];

$query= "UPDATE `carsforsale` SET `Bags`= $updateid where `Bags`= $refid LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Bags updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('Bags Not Updated!!')</script>";
	}
	}
	//5th
			if(isset($_POST['SubmitOn4']))
	{
		$refid=$_POST['passengers'];
		$updateid=$_POST['npassengers'];

$query= "UPDATE `carsforsale` SET `Passengers`= $updateid where `Passengers`= $refid LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Passengers updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('Passengers Not Updated!!')</script>";
	}
	}
	//6th
			if(isset($_POST['SubmitOn5']))
	{
		$refid=$_POST['mileage'];
		$updateid=$_POST['nmileage'];

$query= "UPDATE `carsforsale` SET `Mileage`= $updateid where `Mileage`= $refid LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Mileage updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('Mileage Not Updated!!')</script>";
	}
	}
	//7th
			if(isset($_POST['SubmitOn6']))
	{
		$refid=$_POST['color'];
		$updateid=$_POST['ncolor'];

$query= "UPDATE `carsforsale` SET `Color`= '$updateid' where `Color`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Color updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('Color Not Updated!!')</script>";
	}
	}
	//8th
			if(isset($_POST['SubmitOn7']))
	{
		$refid=$_POST['fuel'];
		$updateid=$_POST['nfuel'];

$query= "UPDATE `carsforsale` SET `FuelType`= '$updateid' where `FuelType`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('FuelType updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('FuelType Not Updated!!')</script>";
	}
	}
	//9th
			if(isset($_POST['SubmitOn9']))
	{
		$img_name = $_FILES['nfile']['name'];
		$refid=$_POST['image'];
		

$query= "UPDATE `carsforsale` SET `Image`= '$img_name' where `Image`= '$refid',`ImageName`= '$img_name' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Image Updated!')</script>";
	}
	else
	{
		echo "<script>alert('Image Not Updated!!')</script>";
	}
	}
	//10th
			if(isset($_POST['SubmitOn8']))
	{
		$refid=$_POST['transmission'];
		$updateid=$_POST['ntransmission'];

$query= "UPDATE `carsforsale` SET `Transmission`= '$updateid' where `Transmission`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Transmission updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('Transmission Not Updated!!')</script>";
	}
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />


<script type='text/javascript' src='js/jquery.js'></script>

</head>

<body>
    <div id="wrapper">
<?php include('ad-nav.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Vehicles For Sale
                        </h1>

                    </div>
</div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Updating Car Info
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form id="form1" name="form1" method="post" action="Ad-UpdatingCarInfo.php" enctype="multipart/form-data">   
<center>
 

      <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
  <tr>
    <td width="131">ID:</td>
    <td width="110"><select name="idd" id="idd">
   <?php
	 $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['id'] ?>"><?php echo $value['id'] ?></option>
      <?php } ?>
    </select></td>
    <td width="102">New: </td>
    <td width="93"><input type="number" name="nidd" id="nidd" /></td>
    <td width="93"><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn" id="SubmitOn"/> </td>
  </tr>
  <tr>
    <td>Car Name:</td>
    <td><select name="carname" id="carname">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['CarName'] ?>"><?php echo $value['CarName'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="text" name="ncarname" id="ncarname"></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn1" id="SubmitOn1"/></td>
  </tr>
  <tr>
    <td>Price:</td>
    <td><select name="price" id="price">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['Price'] ?>"><?php echo $value['Price'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="nprice" id="nprice"/></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn2" id="SubmitOn2"/></td>
  </tr>
  <tr>
    <td>Bags:</td>
    <td><select name="bags" id="bags">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['Bags'] ?>"><?php echo $value['Bags'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="nbags" id="nbags" /></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn3" id="SubmitOn3"/></td>
  </tr>
  <tr>
    <td>Passengers:</td>
    <td><select name="passengers" id="passengers">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['Passengers'] ?>"><?php echo $value['Passengers'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="npassengers" id="npassengers"></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn4" id="SubmitOn4"/></td>
  </tr>
  <tr>
    <td>Mileage:</td>
    <td><select name="mileage" id="mileage">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['Mileage'] ?>"><?php echo $value['Mileage'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="nmileage" id="nmileage" /></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn5" id="SubmitOn5"/></td>
  </tr>
  <tr>
    <td>Color:</td>
    <td><select name="color" id="color">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['Color'] ?>"><?php echo $value['Color'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><select name="ncolor" id="ncolor">
      <option value="Red">Red</option>
      <option value="Blue">Blue</option>
      <option value="Black">Black</option>
      <option value="White">White</option>
      <option value="Green">Green</option>
      <option value="Red">Red</option>
      <option value="Silver">Silver</option>
      <option value="Golden">Golden</option>
    </select></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn6" id="SubmitOn6"/></td>
  </tr>
  <tr>
    <td>FuelType:</td>
    <td><select name="fuel" id="fuel">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['FuelType'] ?>"><?php echo $value['FuelType'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><select name="nfuel" id="nfuel">
      <option value="Diesel">Diesel</option>
      <option value="Petrol">Petrol</option>
      <option value="LPG">LPG</option>
    </select></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn7" id="SubmitOn7"/></td>
  </tr>
  <tr>
    <td>Transmission:</td>
    <td><select name="transmission" id="transmission">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['Transmission'] ?>"><?php echo $value['Transmission'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><select name="ntransmission" id="ntransmission">
      <option value="Automatic">Automatic</option>
      <option value="Manual">Manual</option>
    </select></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn8" id="SubmitOn8"/></td>
  </tr>
  <tr>
    <td>Image:</td>
    <td><select name="image" id="image">
    <?php $response=select("carsforsale",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['Image'] ?>"><?php echo $value['Image'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="file" name="nfile" id="ntextfield7"/></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn9" id="SubmitOn9"/></td>
  </tr>

  </table>

  

 
 </form>
 
 
</center>
</div>
                           
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  --><!-- /. ROW  --><!-- /. ROW  --><!-- /. ROW  -->
        </div>
<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
