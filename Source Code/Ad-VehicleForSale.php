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
'Price'=>$_POST['total'],
'Mileage'=>$_POST['mileage'],
'Color'=>$_POST['color'],
'FuelType'=>$_POST['fuel'],
'Transmission'=>$_POST['transmission'],
'Image'=>$img_name,
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
<html>
<head>  
<script type="text/javascript" src="js/prod-libs.min.js"></script>

<!--<link rel="stylesheet" href="css/main.min.css" type="text/css"/>-->

<link rel="stylesheet" media="all" href="css/static.css"/> 
<link rel="stylesheet" media="print" href="css/print.css"/>

<link rel='stylesheet' id='avada-modified-stylesheet-css'  href='css/avada-modified-style.css' type='text/css' media='all' />



<script type='text/javascript' src='js/jquery.js'></script>
<script>
function total()
{
var myBox1 = document.getElementById('price').value; 

var res2 = (myBox1)*0.1;
var res3 = parseInt(myBox1) - parseInt(res2);
document.getElementById('total').value= res3;


	}
	
</script>
</script>
<link rel="icon" type="image/ico" href="favicon.ico"/>





<title>Auto Authority</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>






</head>
<body class="en_us homepage">
	<header class="cf">

    <div class="master-nav">
        <div class="logo">
            <a href="/en.html"><img src="images/logo fahad.png" alt="enterprise"/></a>
        </div>
        <div class="mobile-logo">
            <a href="/en.html"><i class="icon icon-nav-mobile-e-icon-white"></i></a>
        </div>
        
        
        <div class="nav-container">
<div class="outer-nav">
    <nav class="nav" id="utility-nav">
        <ul class="utility-nav">
        <li tabindex="6" class="help">
            <div class="help">
<div class="utility-nav-label" style="right:auto">
	<a style="color:#FFF;" href="Logout.php">LOGOUT</a>
	<i class="icon icon-utility-notch"></i>
</div>
</div>
</li>
        
       </ul>
       </nav>

    <nav class="nav" id="mobile-nav">
        <ul class="mobile-nav">
            <li class="primary-nav-toggle">
                <button id="mobile-toggle"><i class="icon icon-hamburger-white"></i></button>
            </li>
        </ul>
    </nav>

 

</div></div></div></header>
<form id="form1" name="form1" method="post" action="Ad-VehicleForSale.php" enctype="multipart/form-data">
   <p style="font-size:15px;">&nbsp;</p>
<center><h1 style="font-size:50px;">CARS FOR SALE</h1></center>
 <p style="font-size:15px;">&nbsp;</p>
   <hr/>
   
<center>
  <h1 style="font-size:50px;">Adding A New Car</h1>
  <p style="font-size:10px;">&nbsp;</p>
  <table width="749" height="247" border="1">
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
      <td><input type="number" name="price" id="price" onChange="price()"/></td>
    </tr>
    <tr>
      <td><p>Mileage:</p></td>
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
      <td>Total (After 10% Discount) :</td>
      <td><label for="textfield3"></label>
      <input type="number" name="total" id="total" readonly/></td>
      <td>Image:</td>
      <td><input type="file" name="file" id="textfield7"/></td>
    </tr>
    <tr>
      <td colspan="4"><input type="submit" name="addbtn" id="addbtn" value="Add Data" style="width:120px;" /> 
      
         <input type="text" style="margin-left:420px; width: 400px; color:red;  background-color:rgba(0, 0, 0, 0);
    
    border: none;
    outline:none;" value="<?php echo $imagedone.$formdone?>" readonly/></td>
    </tr>
  </table>
  </center>
   
   
   <center>
   <p style="font-size:15px;">&nbsp;</p>
<hr>
<h1 style="font-size:50px;">Viewing A Car</h1>
<p style="font-size:10px;">&nbsp;</p>
 <table width="302" height="112" border="1">
  <tr>
    <td width="112">Car Name:</td>
    <td width="174"><input type="text" name="textfield123" id="textfield123" /></td>
    </tr>
  <tr>
    <td colspan="2"><input type="submit" name="fetch" id="fetch" value="Fetch" class="myButton" style="width:80px;" /></td>
    </tr>
</table>
 <table width="916" height="232" border="1">
   <thead>
    <tr>
      <th width="129" height="57">Car Name</th>
      <th width="88">Passenger</th>
      <th width="101">Price</th>
      <th width="75">Bag</th>
      <th width="90">Mileage</th>
      <th width="77">Color</th>
      <th width="79">Fuel Type</th>
      <th width="89">Transmission</th>
      <th width="130">Image</th>
    </tr>
    </thead>
     <?php
	 if(isset($_POST['fetch']))
	{
		if(empty($_POST['textfield123']))
		{
			$response=select("carsforsale",array());
			foreach($response['data'] as $value)
{
	
	?>
  
    <tr>
    
      <td><?php echo $value['CarName'] ?></td>
      <td><?php echo $value['Passengers'] ?></td>
      <td><?php echo $value['Price'] ?></td>
      <td><?php echo $value['Bags'] ?></td>
      <td><?php echo $value['Mileage'] ?></td>
      <td><?php echo $value['Color'] ?></td>
      <td><?php echo $value['FuelType'] ?></td>
      <td><?php echo $value['Transmission'] ?></td>
      <td><img src="<?php echo 'images/'.$value ['Image'] ?>" width="87" height="69"/> </td>
      
      
    </tr>
    
    <?php } 
		}
		
		else{
		
		
		$Name1=$_POST['textfield123'];
		$response=select("carsforsale",array('CarName'=>$Name1));

  foreach($response['data'] as $value)
{
	
	?>
  
    <tr>
    
      <td><?php echo $value['CarName'] ?></td>
      <td><?php echo $value['Passengers'] ?></td>
      <td><?php echo $value['Price'] ?></td>
      <td><?php echo $value['Bags'] ?></td>
      <td><?php echo $value['Mileage'] ?></td>
      <td><?php echo $value['Color'] ?></td>
      <td><?php echo $value['FuelType'] ?></td>
      <td><?php echo $value['Transmission'] ?></td>
      <td><img src="<?php echo 'images/'.$value ['Image'] ?>" width="87" height="69"/> </td>
      
      
    </tr>
    
    <?php }} };?>
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
</form>
<p style="font-size:40px;">&nbsp;</p>




    <footer class="cf">
    
	<div class="logo">
		<a href="/en.html"><img src="logo-enterprise.png" alt="Enterprise"/></a>
	</div>
    
   
     <!-- END OF FOOTER-->
    <link rel='stylesheet' id='jquery-style-css'  href='css/date-picker.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-style2-css'  href='css/style-crimson-red.css' type='text/css' media='all' />
<link rel='stylesheet' id='nrs-flexslider-css-css'  href='css/nrs-flexslider.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery-form-min.js'></script>


<script type='text/javascript' src='js/datepicker.js'></script>
<script type="text/javascript" src="js/home.min.js"></script>
<script type="text/javascript" src="js/nav.min.js"></script>
<link rel="stylesheet" href="css/icons.min.css" type="text/css"/>
 
</body>
</html>