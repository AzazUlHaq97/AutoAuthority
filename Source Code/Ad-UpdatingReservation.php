<?php
session_start();
require ('CRUD.php');

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
		if(!empty($_POST['nidd']))
		{
		$refid=$_POST['idd'];
		$updateid=$_POST['nidd'];

$query= "UPDATE `reservations` SET `ResNo`= $updateid where `ResNo`= $refid LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('ResNo updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('ResNo already exists!!')</script>";
	}
	}
	}
	//2nd
			if(isset($_POST['SubmitOn1']))
	{
		if(!empty($_POST['nfn']))
		{
		$refidd=$_POST['fn'];
		$updateidd=$_POST['nfn'];

$query= "UPDATE `reservations` SET `VehicleName`= '$updateidd' where `VehicleName`= '$refidd' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('VehicleName updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('VehicleName Not Updated!')</script>";
	}
	}}
	//3rd
			if(isset($_POST['SubmitOn2']))
	{
		if(!empty($_POST['nln']))
		{
		$refid=$_POST['ln'];
		$updateid=$_POST['nln'];

$query= "UPDATE `reservations` SET `VehicleClass`= '$updateid' where `VehicleClass`= '$refidd' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('Last Name updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('Last Name Not Updated!!')</script>";
	}}
	}
	//4th
			if(isset($_POST['SubmitOn3']))
	{
		if(!empty($_POST['nemail']))
		{
		$refid=$_POST['email'];
		$updateid=$_POST['nemail'];

$query= "UPDATE `reservations` SET `PerDayAmount`= '$updateid' where `PerDayAmount`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('PerDayAmount updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('PerDayAmount Not Updated!!')</script>";
	}
	}}
	//5th
			if(isset($_POST['SubmitOn4']))
	{
		if(!empty($_POST['npassword']))
		{
		$refid=$_POST['password'];
		$updateid=$_POST['npassword'];

$query= "UPDATE `reservations` SET `NumberOfDays`= '$updateid' where `Password`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('NumberOfDays updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('NumberOfDays Not Updated!!')</script>";
	}
	}}
	//6th
			if(isset($_POST['SubmitOn5']))
	{
		if(!empty($_POST['nsa']))
		{
		$refid=$_POST['sa'];
		$updateid=$_POST['nsa'];

$query= "UPDATE `reservations` SET `PickUpLocation`= '$updateid' where `PickUpLocation`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('PickUpLocation updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('PickUpLocation Not Updated!!')</script>";
	}}
	}
	//7th
			if(isset($_POST['SubmitOn6']))
	{
		if(!empty($_POST['ncity']))
		{
		$refid=$_POST['city'];
		$updateid=$_POST['ncity'];

$query= "UPDATE `reservations` SET `DropOffLocation`= '$updateid' where `DropOffLocation`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('DropOffLocation updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('DropOffLocation Not Updated!!')</script>";
	}
	}}
	//8th
			if(isset($_POST['SubmitOn7']))
	{
		if(!empty($_POST['nzip']))
		{
		$refid=$_POST['zip'];
		$updateid=$_POST['nzip'];

$query= "UPDATE `reservations` SET `PickUpTime`= '$updateid' where `PickUpTime`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('PickUpTime updated from $refid to $updateid !')</script>";
	}
	else
	{
		echo "<script>alert('PickUpTime Not Updated!!')</script>";
	}
	}}
	//9th
			if(isset($_POST['SubmitOn9']))
	{
		if(!empty($_POST['ndln']))
		{
		$refid=$_POST['dln'];
		$updateid=$_POST['ndln'];
		
$query= "UPDATE `reservations` SET `DropOffDate`= '$updateid' where `DropOffDate`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('DropOffDate Updated!')</script>";
	}
	else
	{
		echo "<script>alert('DropOffDate Not Updated!!')</script>";
	}
	}}
	//10th
			if(isset($_POST['SubmitOn8']))
	{
		if(!empty($_POST['nnum1']))
		{
		$refid=$_POST['num1'];
		$updateid=$_POST['nnum1'];
		
$query= "UPDATE `reservations` SET `DropOffTime`= '$updateid' where `DropOffTime`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('DropOffTime Updated!')</script>";
	}
	else
	{
		echo "<script>alert('DropOffTime Not Updated!!')</script>";
	}
	}}
		//11th
			if(isset($_POST['SubmitOn10']))
	{
		if(!empty($_POST['nnum2']))
		{
		$refid=$_POST['num2'];
		$updateid=$_POST['nnum2'];
		
$query= "UPDATE `reservations` SET `PickUpDate`= '$updateid' where `PickUpDate`= '$refid' LIMIT 1";
$conf=mysql_query($query);
	if($conf)
	{
		echo "<script>alert('PickUpDate Updated!')</script>";
	}
	else
	{
		echo "<script>alert('PickUpDate Not Updated!!')</script>";
	}
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
                            <form id="form1" name="form1" method="post" action="Ad-UpdatingUserInfo.php" enctype="multipart/form-data">   
<center>
 

      <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
  <tr>
    <td width="131">Res No:</td>
    <td width="110"><select name="idd" id="idd">
   <?php
	 $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['ResNo'] ?>"><?php echo $value['ResNo'] ?></option>
      <?php } ?>
    </select></td>
    <td width="102">New: </td>
    <td width="93"><input type="number" name="nidd" id="nidd" /></td>
    <td width="93"><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn" id="SubmitOn"/> </td>
  </tr>
  <tr>
    <td>CarName:</td>
    <td><select name="fn" id="fn">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['VehicleName'] ?>"><?php echo $value['VehicleName'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="text" name="nfn" id="nfn"></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn1" id="SubmitOn1"/></td>
  </tr>
  <tr>
    <td>Class:</td>
    <td><select name="ln" id="ln">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['VehicleClass'] ?>"><?php echo $value['VehicleClass'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="nln" id="nln"/></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn2" id="SubmitOn2"/></td>
  </tr>
  <tr>
    <td>PerDay:</td>
    <td><select name="email" id="email">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['PerDayAmount'] ?>"><?php echo $value['PerDayAmount'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="nemail" id="nemail" /></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn3" id="SubmitOn3"/></td>
  </tr>
  <tr>
    <td>Days:</td>
    <td><select name="pass" id="pass">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['NumberOfDays'] ?>"><?php echo $value['NumberOfDays'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="npass" id="npass"></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn4" id="SubmitOn4"/></td>
  </tr>
  <tr>
    <td>PickLoc:</td>
    <td><select name="sa" id="sa">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['PickUpLocation'] ?>"><?php echo $value['PickUpLocation'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="number" name="nsa" id="nsa" /></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn5" id="SubmitOn5"/></td>
  </tr>
  <tr>
    <td>DropLoc:</td>
    <td><select name="city" id="city">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['DropOffLocation'] ?>"><?php echo $value['DropOffLocation'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="text" name="ncity" id="ncity" /></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn6" id="SubmitOn6"/></td>
  </tr>
  <tr>
    <td>PickTime(HH:MM:SS):</td>
    <td><select name="zip" id="zip">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['PickUpTime'] ?>"><?php echo $value['PickUpTime'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="text" name="nzip" id="nzip" /></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn7" id="SubmitOn7"/></td>
  </tr>
  <tr>
    <td>DropTime(HH:MM:SS):</td>
    <td><select name="num1" id="num1">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['DropOffTime'] ?>"><?php echo $value['DropOffTime'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="text" name="nnum1" id="nnum1" /></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn8" id="SubmitOn8"/></td>
  </tr>
  <tr>
    <td>PickDate(YYYY-MM-DD):</td>
    <td><select name="num2" id="num2">
      <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['PickUpDate'] ?>"><?php echo $value['PickUpDate'] ?></option>
      <?php } ?>
    </select></td>
    <td>New:</td>
    <td><input type="text" name="nnum2" id="nnum2" /></td>
    <td><input type="submit" class="btn btn-info" value="UPDATE" name="SubmitOn10" id="SubmitOn10"/></td>
  </tr>
  <tr>
    <td>DropDate(YYYY-MM-DD):</td>
    <td><select name="dln" id="dln">
    <?php $response=select("reservations",array()); 
	 foreach($response['data'] as $value)
{
	?>
      <option value="<?php echo $value['DropOffDate'] ?>"><?php echo $value['DropOffDate'] ?></option>
      <?php } ?>
    </select></td>
    <td>New: </td>
    <td><input type="text" name="ndln" id="ndln" /></td>
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
