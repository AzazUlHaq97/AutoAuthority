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
			
			$_SESSION['IDforget2']=$_POST['hiddenone'];
			$idforget= $_SESSION['IDforget2'];
			
		$query="delete from carsforrent where id=$idforget";
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
                             Searching/Deleting A Car
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form id="form1" name="form1" method="post" action="Ad-SearchDeleteRentalCars.php" enctype="multipart/form-data">   
<center>
  <table width="302" height="112" border="1" style="border-style:dashed;">
  <tr>
  <td width="112" style="border-style:dashed;"><center>Car Name:</center></td>
    <td width="174"><center><input type="text" name="textfield123" id="textfield123" /></center></td>
    </tr>
  <tr>
  
    <td colspan="2" style="border-style:dashed;"><input type="submit" name="fetch" id="fetch" value="Search" class="btn btn-default" style="width:80px; margin-left:80px;" /></td>
    
    </tr>
    
</table>

  <p>&nbsp;</p>
  <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
   <thead>
    <tr>
    <th width="89">ID</th>
      <th width="131" height="57">Car Name</th>
      <th width="89">Class</th>
      <th width="150">Per Day Amount</th>
      <th width="86">Passengers</th>
      <th width="93">Transmission</th>
      <th width="123">ImageName</th>
      <th width="123">Image</th>
      <th width="123">Action</th>
    </tr>
    </thead>
     <?php

		

		
		
		
	 if(isset($_POST['fetch']))
	{
	
		
		if(empty($_POST['textfield123']))
		{ 
		
			$response=select("carsforrent",array());
			foreach($response['data'] as $value)
{
	$idgot=$value['id'];
			
	?>
  
    <tr>
    <td><?php echo $value['id'] ?></td>      
    <td><?php echo $value['carname'] ?></td>
      <td><?php echo $value['class'] ?></td>
      <td><?php echo $value['perdayamount'] ?></td>
      <td><?php echo $value['passengers'] ?></td>
      <td><?php echo $value['transmission'] ?></td>
      <td><?php echo $value['ImageName'] ?></td>
      <td><img src="<?php echo 'images/'.$value ['Image'] ?>" width="87" height="69"/> </td>
      
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
		$response=select("carsforrent",array('CarName'=>$Name1));
		
  foreach($response['data'] as $value)
{
	
	$idgot=$value['id'];
	?>
  
    <tr>
      <td><?php echo $value['id'] ?></td>      
    <td><?php echo $value['carname'] ?></td>
      <td><?php echo $value['class'] ?></td>
      <td><?php echo $value['perdayamount'] ?></td>
      <td><?php echo $value['passengers'] ?></td>
      <td><?php echo $value['transmission'] ?></td>
      <td><?php echo $value['ImageName'] ?></td>
      <td><img src="<?php echo 'images/'.$value ['Image'] ?>" width="87" height="69"/> </td>
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
