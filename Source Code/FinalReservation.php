<?php

require ('CRUD.php');
session_start();


	


?>

<!DOCTYPE html>
<html>
<head>  
<script type="text/javascript" src="js/prod-libs.min.js"></script>

<link rel="stylesheet" href="css/main.min.css" type="text/css"/>-->

<link rel="stylesheet" media="all" href="css/static.css"/> 
<link rel="stylesheet" media="print" href="css/print.css"/>

<link rel='stylesheet' id='avada-modified-stylesheet-css'  href='css/avada-modified-style.css' type='text/css' media='all' />



<script type='text/javascript' src='js/jquery.js'></script>

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
<center><h1 style="font-size:50px;">CONGRATULATIONS!</h1></center>
<center><h1 style="font-size:50px;">Your reservation has been completed. You will soon be contacted by our team.</h1></center>
<center><h1 style="font-size:50px;">This is your booking code by which you can modify your reservation:</h1></center>
<center><h1 style="font-size:50px;"><?php echo $_SESSION['BookingCode'];?></h1></center>

 <p style="font-size:15px;">&nbsp;</p>
   <hr/>
 
 
 
 
 
 
 
 
 
 
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