<?php

require ('CRUD.php');
session_start();
$formdone="";
if(isset($_POST['addbtn']))
	{

if(!empty ($_POST['date2']) && !empty($_POST['first-name']) && !empty ($_POST['last-name']) && !empty ($_POST['email']) && !empty ($_POST['password']) && !empty ($_POST['streetAddress']) && !empty ($_POST['city']) && !empty ($_POST['postal']) && !empty ($_POST['phoneNumber']) && !empty ($_POST['alternativePhoneNumber']) && !empty ($_POST['date']) && !empty ($_POST['license-number']) )
{

$res=insert("users",array(
'FirstName'=>$_POST['first-name'],
'LastName'=>$_POST['last-name'],
'Email'=>$_POST['email'],
'Password'=>$_POST['password'],
'StreetAddress'=>$_POST['streetAddress'],
'City'=>$_POST['city'],
'ZipCode'=>$_POST['postal'],
'NumberOne'=>$_POST['phoneNumber'],
'NumberTwo'=>$_POST['alternativePhoneNumber'],
'BirthDate'=>$_POST['date'],
'DriveLicenseNumber'=>$_POST['license-number'],
'ExpirationDate'=>$_POST['date2']));



	if($res)
{
	
	$formdone= "User account created!";
}
else
{
	$formdone= "User account not created!";
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
                               <form class="cf enroll-forms" method="POST" action="Ad-AddingNewUser.php">
  
<center>
  <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <tr>
      <td width="203">First Name:</td>
      <td width="168"><input type="text" name="first-name" id="first-name"></td>
      <td width="120">Last Name:</td>
      <td width="230"><label for="textfield5"></label>
     <input type="text" name="last-name" id="last-name">
      </td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" name="email" id="email"></td>
      <td>Password:</td>
    <td><input type="password" name="password" id="password"></td>

    <tr>
      <td>Street Address:</td>
      <td><input type="text" name="streetAddress" id="streetAddress"></td>
      <td>City:</td>
      <td><input type="text" name="city" id="city"></td>
    </tr>
    <tr>
      <td height="45">Zip Code:</td>
      <td><input type="text" name="postal" id="postal"></td>
      <td>Phone Number(1):</td>
      <td><input type="text" name="phoneNumber" id="phoneNumber"></td>
    </tr>
    <tr>
      <td height="45">Phone Number(2):</td>
      <td><input type="text" name="alternativePhoneNumber" id="alternativePhoneNumber"></td>
      <td>Birth Date(YY-MM-DD):</td>
      <td><input type="text" name="date" id="date"></td>
    </tr>
    <tr>
      <td height="45"><p>Driving License Number:</p></td>
      <td><input type="text" name="license-number" id="license-number"></td>
      <td>Licence Expiration Date(YY-MM-DD):</td>
      <td>
      <input type="text" name="date2" id="date2"></td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" name="addbtn" id="addbtn" value="Add Data" class="btn btn-default" /> 
      
         <input type="text" style="margin-left:420px; width: 400px; color:red;  background-color:rgba(0, 0, 0, 0);
    
    border: none;
    outline:none;" value="<?php echo $formdone?>" readonly/></td>
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
