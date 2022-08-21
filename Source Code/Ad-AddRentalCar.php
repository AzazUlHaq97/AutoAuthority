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
		if(!empty($_POST['passengers']) && !empty($_POST['amountperday']) && !empty($_POST['transmission']) && !empty($_POST['carname']))
{
$res=insert("carsforrent",array(
'class'=>$_POST['carclass'],
'carname'=>$_POST['carname'],
'perdayamount'=>$_POST['amountperday'],
'transmission'=>$_POST['transmission'],
'passengers'=>$_POST['passengers'],
'Image'=>$img_name,
'ImageName'=>$img_name));


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
                            <form id="form1" name="form1" method="post" action="Ad-AddRentalCar.php" enctype="multipart/form-data">   
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
      <td>Class:</td>
      <td><select name="carclass" id="carclass">
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
      <td>Transmission:</td>
      <td><select name="transmission" id="transmission">
      <option value="Automatic">Automatic</option>
      <option value="Manual">Manual</option>
    </select></td>
    </tr>
    <tr>
      <td>Per day Amount:</td>
      <td><input type="number" name="amountperday" id="amountperday" /></td>
      <td>Image:</td>
      <td><input type="file" name="file" id="textfield7"/></td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" name="addbtn" id="addbtn" value="Add Data" class="btn btn-default" style="width:120px;" /> 
        
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
