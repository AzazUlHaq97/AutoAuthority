<?php

require ('CRUD.php');
session_start();

$imagedone=$formdone="";
$img_name="";

if(isset($_FILES['file']['name']))
{
	$img_name = $_FILES['file']['name'];
	
	$tmp_name = $_FILES['file']['tmp_name'];
	
	$size = $_FILES['file']['size']; 
	$type = $_FILES['file']['type'];
	
	$max_size = 2097152;
	
}








if(isset($_POST['addbtn']))
	{
		if(!empty($_POST['passengers']) && !empty($_POST['bags']) && !empty($_POST['price']) && !empty($_POST['mileage']) && !empty($_POST['color']) && !empty($_POST['fuel']) && !empty($_POST['transmission']) && !empty($_POST['carname']))
{
$res=insert("carsforsale",array(
'Passengers'=>$_POST['passengers'],
'Bags'=>$_POST['bags'],
'Price'=>$_POST['price'],
'Mileage'=>$_POST['mileage'],
'Color'=>$_POST['color'],
'FuelType'=>$_POST['fuel'],
'Transmission'=>$_POST['transmission'],
'Image'=>$img_name,
'ImageName'=>$img_name,
'CarName'=>$_POST['carname']));


if(isset($img_name)) 
	{
	
	if (!empty($img_name))
	 {
		$location	= 'images/';
		if(move_uploaded_file($tmp_name, $location.$img_name)){
			
			$imagedone='Image Uploaded and ';
			
			}
			else
		{
			$imagedone= 'There is an error/';
	}
	 }
	else
	{
		$imagedone= 'Please choose a file/';
		
		}
	}
	
	if($res)
{
	
	$formdone= "Form submitted.";
}
else
{
	$formdone= "Not submitted!";
}
	
}
else
{
				echo '<script type="text/javascript">
           alert("Please Fill All The Fields !")
      </script>';
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
                             Adding A New Car
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form id="form1" name="form1" method="post" action="Ad-CarsForSale.php" enctype="multipart/form-data">   
<center>
  <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <tr>
      <td width="203">Car Name:</td>
      <td width="168"><input type="text" name="carname" id="carname"></td>
      <td width="120">Passengers:</td>
      <td width="230"><label for="textfield5"></label>
     <input type="number" name="passengers" id="passengers">
      </td>
    </tr>
    <tr>
      <td>Fuel Type:</td>
      <td><select name="fuel" id="fuel">
      <option value="Diesel">Diesel</option>
      <option value="Petrol">Petrol</option>
      <option value="LPG">LPG</option>
      </select></td>
      <td>Transmission:</td>
      <td><select name="transmission" id="transmission">
      <option value="Automatic">Automatic</option>
      <option value="Manual">Manual</option>
    </select></td>
    </tr>
    <tr>
      <td>Bags:</td>
      <td><input type="number" name="bags" id="bags" /></td>
      <td>Price:</td>
      <td><input type="number" name="price" id="price" onChange="total()"/></td>
    </tr>
    <tr>
      <td height="45"><p>Mileage:</p></td>
      <td><label for="textfield2"></label>
      <input type="number" name="mileage" id="mileage" /></td>
      <td>Color:</td>
      <td>
      <select name="color" id="color">
      <option value="Red">Red</option>
      <option value="Blue">Blue</option>
      <option value="Black">Black</option>
      <option value="White">White</option>
      <option value="Green">Green</option>
      <option value="Red">Red</option>
      <option value="Silver">Silver</option>
      <option value="Golden">Golden</option>
      
    </select></td>
    </tr>
    <tr>
      <td colspan="4">Image:
      <input type="file" name="file" id="file"/></td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" name="addbtn" id="addbtn" value="Add Data" class="btn btn-default" /> 
      
         <input type="text" style="margin-left:420px; width: 400px; color:red;  background-color:rgba(0, 0, 0, 0);
    
    border: none;
    outline:none;" value="<?php echo $imagedone.$formdone?>" readonly/></td>
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
