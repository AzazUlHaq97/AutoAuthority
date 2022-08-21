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




		if(isset($_POST['delete_btn']))
		{
			
			$_SESSION['IDforget3']=$_POST['hiddenone'];
			$idforget= $_SESSION['IDforget3'];
			
		$query="delete from reservations where ResNo=$idforget";
	if(mysql_query($query))
	{
		echo "<script>alert('Record Deleted')</script>";
	}
	else
	{
		echo "<script>alert('Record Not Deleted')</script>";
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
                            Reservations
                        </h1>

                    </div>
</div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Searching/Deleting Reservation</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form id="form1" name="form1" method="post" action="Ad-AllReservations.php" enctype="multipart/form-data">   
<center>
  <table width="302" height="112" border="1" style="border-style:dashed;">
  <tr>
  <td width="112" style="border-style:dashed;"><center>
  Reservation ID:
  </center></td>
    <td width="174"><center><input type="number" name="textfield123" id="textfield123" /></center></td>
    </tr>
  <tr>
  
    <td colspan="2" style="border-style:dashed;"><input type="submit" name="fetch" id="fetch" value="Search" class="btn btn-default" style="width:80px; margin-left:80px;" /></td>
    
    </tr>
    
</table>

  <p>&nbsp;</p>
  <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
   <thead>
    <tr>
    <th width="30">ID</th>
      <th width="129" height="57">CarName</th>
      <th width="88">Class</th>
      <th width="101">PerDay</th>
      <th width="75">Days</th>
      <th width="90">Total</th>
      <th width="77">PickLoc</th>
      <th width="79">DropLoc</th>
      <th width="89">PickTime</th>
      <th width="130">DropTime</th>
      <th width="130">PickDate</th>
      <th width="130">DropDate</th>
      <th width="130">Token</th>
      <th width="130">Action</th>
    </tr>
    </thead>
     <?php

		

		
		
		
	 if(isset($_POST['fetch']))
	{
	
		
		if(empty($_POST['textfield123']))
		{ 
		
			$response=select("reservations",array());
			foreach($response['data'] as $value)
{
	$idgot=$value['ResNo'];
			
	?>
  
    <tr>
    <td><?php echo $value['ResNo'] ?></td>
      <td><?php echo $value['VehicleName'] ?></td>
      <td><?php echo $value['VehicleClass'] ?></td>
      <td><?php echo $value['PerDayAmount'] ?></td>
      <td><?php echo $value['NumberOfDays'] ?></td>
      <td><?php echo $value['TotalAmount'] ?></td>
      <td><?php echo $value['PickUpLocation'] ?></td>
      <td><?php echo $value['DropOffLocation'] ?></td>
      <td><?php echo $value['PickUpTime'] ?></td>
      <td><?php echo $value['DropOffTime'] ?></td>
      <td><?php echo $value['PickUpDate'] ?></td>
      <td><?php echo $value['DropOffDate'] ?></td>
      <td><?php echo $value['TokenNumber'] ?></td>
      <td>
      <form action="" method="post">
      <input type="submit" id="delete_btn" name="delete_btn"class="btn btn-danger" value="Delete" style="margin-top:20px;">
            <input type ="hidden" value ="<?php echo $idgot?>" name="hiddenone" id"hiddenone"/>
            </form>
            </td>
      
      
    </tr>
    
    <?php   }
	
		}
		
		else{
		
		
		$Name1=$_POST['textfield123'];
		$response=select("reservations",array('ResNo'=>$Name1));
		
  foreach($response['data'] as $value)
{
	
	$idgot=$value['ResNo'];
	?>
  
    <tr>
     <td><?php echo $value['ResNo'] ?></td>
      <td><?php echo $value['VehicleName'] ?></td>
      <td><?php echo $value['VehicleClass'] ?></td>
      <td><?php echo $value['PerDayAmount'] ?></td>
      <td><?php echo $value['NumberOfDays'] ?></td>
      <td><?php echo $value['TotalAmount'] ?></td>
      <td><?php echo $value['PickUpLocation'] ?></td>
      <td><?php echo $value['DropOffLocation'] ?></td>
      <td><?php echo $value['PickUpTime'] ?></td>
      <td><?php echo $value['DropOffTime'] ?></td>
      <td><?php echo $value['PickUpDate'] ?></td>
      <td><?php echo $value['DropOffDate'] ?></td>
      <td><?php echo $value['TokenNumber'] ?></td>
      <td><input type="submit" id="delete_btn" name="delete_btn" class="btn btn-danger" value="Delete">
                  <input type ="hidden" value ="<?php echo $idgot?>" name="hiddenone" id="hiddenone"/>
</td>
      
      
    </tr>
    
    <?php }}};

		?>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
    </tr>
</table>
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
