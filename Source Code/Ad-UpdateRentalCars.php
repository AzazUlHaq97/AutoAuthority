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

$query= "UPDATE `carsforrent` SET `id`= $updateid where `id`= $refid LIMIT 1";
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

$query= "UPDATE `carsforrent` SET `carname`= '$updateidd' where `carname`= '$refidd' LIMIT 1";
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

$query= "UPDATE `carsforrent` SET `perdayamount`= $updateid where `perdayamount`= $refid LIMIT 1";
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
	
	//5th
			if(isset($_POST['SubmitOn4']))
	{
		$refid=$_POST['passengers'];
		$updateid=$_POST['npassengers'];

$query= "UPDATE `carsforrent` SET `passengers`= $updateid where `passengers`= $refid LIMIT 1";
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
		$refid=$_POST['class'];
		$updateid=$_POST['nclass'];

$query= "UPDATE `carsforrent` SET `class`= '$updateid' where `class`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Class updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('Class Not Updated!!')</script>";
	}
	}
	
	//9th
			if(isset($_POST['SubmitOn9']))
	{
		$img_name = $_FILES['nfile']['name'];
		$refid=$_POST['image'];
		

$query= "UPDATE `carsforrent` SET `Image`= '$img_name',`ImageName`= '$img_name' where `Image`= '$refid' LIMIT 1";
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

$query= "UPDATE `carsforrent` SET `transmission`= '$updateid' where `transmission`= '$refid' LIMIT 1";
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
                            <form id="form1" name="form1" method="post" action="Ad-UpdateRentalCars.php" enctype="multipart/form-data">   
<center>
 

      <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
  <tr>
    <td width="131">ID:</td>
    <td width="110"><select name="idd" id="idd">
   <?php
	 $response=select("carsforrent",array()); 
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
    <?php $response=select("carsforrent",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['carname'] ?>"><?php echo $value['carname'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="text" name="ncarname" id="ncarname"></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn1" id="SubmitOn1"/></td>
  </tr>
  <tr>
    <td>Per Day Amount:</td>
    <td><select name="price" id="price">
    <?php $response=select("carsforrent",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['perdayamount'] ?>"><?php echo $value['perdayamount'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="nprice" id="nprice"/></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn2" id="SubmitOn2"/></td>
  </tr>
  <tr>
    <td>Passengers:</td>
    <td><select name="passengers" id="passengers">
      <?php $response=select("carsforrent",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['passengers'] ?>"><?php echo $value['passengers'] ?></option>
      <?php } ?>
      </select></td>
    <td>New: </td>
    <td><input type="number" name="npassengers" id="npassengers"></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn4" id="SubmitOn4"/></td>
  </tr>
  <tr>
    <td>Class:</td>
    <td><select name="class" id="class">
    <?php $response=select("carsforrent",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['class'] ?>"><?php echo $value['class'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><select name="nclass" id="nclass">
      <option value="Economy">Economy</option>
      <option value="Intermediate">Intermediate</option>
      <option value="Premium">Premium</option>
      <option value="Full Size">Full Size</option>
      <option value="Standard">Standard</option>
      <option value="Full Size Elite">Full Size Elite</option>
      <option value="Convertible">Convertible</option>
      <option value="Luxury">Luxury</option>
      <option value="Intermediate Electric">Intermediate Electric</option>
      <option value="Fullsize Hybrid">Fullsize Hybrid</option>
      <option value="Standard Hybrid">Standard Hybrid</option>
      <option value="Premium Elite">Premium Elite</option>
      <option value="Sporty">Sporty</option>
      </select></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn5" id="SubmitOn5"/></td>
  </tr>
  <tr>
    <td>Transmission:</td>
    <td><select name="transmission" id="transmission">
      <?php $response=select("carsforrent",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['transmission'] ?>"><?php echo $value['transmission'] ?></option>
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
    <?php $response=select("carsforrent",array()); 
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
