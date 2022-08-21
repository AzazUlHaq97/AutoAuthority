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
		if(!empty($_POST['passengers']) && !empty($_POST['carclass']) && !empty($_POST['amountperday']) && !empty($_POST['transmission']) && !empty($_POST['carname']))
{
$res=insert("carsforrent",array(
'class'=>$_POST['carclass'],
'carname'=>$_POST['carname'],
'perdayamount'=>$_POST['amountperday'],
'transmission'=>$_POST['transmission'],
'passengers'=>$_POST['passengers'],
'Image'=>$img_name));


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
<form id="form1" name="form1" method="post" action="Ad-VehiclesOnRent.php" enctype="multipart/form-data">
   <p style="font-size:15px;">&nbsp;</p>
<center><h1 style="font-size:50px;">CARS ON RENT</h1></center>
 <p style="font-size:15px;">&nbsp;</p>
   <hr/>
   
<center>
  <h1 style="font-size:50px;">Adding A New Rental Car</h1>
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
<h1 style="font-size:50px;">Viewing A Rental Car</h1>
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
 <table width="680" height="232" border="1">
   <thead>
    <tr>
      <th width="131" height="57">Car Name</th>
      <th width="89">Class</th>
      <th width="118">Per Day Amount</th>
      <th width="86">Passengers</th>
      <th width="93">Transmission</th>
      <th width="123">Image</th>
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
	
	?>
  
    <tr>
    
      <td><?php echo $value['carname'] ?></td>
      <td><?php echo $value['class'] ?></td>
      <td><?php echo $value['perdayamount'] ?></td>
      <td><?php echo $value['passengers'] ?></td>
      <td><?php echo $value['transmission'] ?></td>
      <td><img src="<?php echo 'images/'.$value ['Image'] ?>" width="87" height="69"/> </td>
      
      
    </tr>
    
    <?php } 
		}
		
		else{
		
		
		$Name1=$_POST['textfield123'];
		$response=select("carsforrent",array('carname'=>$Name1));

  foreach($response['data'] as $value)
{
	
	?>
  
    <tr>
    
      <td><?php echo $value['carname'] ?></td>
      <td><?php echo $value['class'] ?></td>
      <td><?php echo $value['perdayamount'] ?></td>
      <td><?php echo $value['passengers'] ?></td>
      <td><?php echo $value['transmission'] ?></td>
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