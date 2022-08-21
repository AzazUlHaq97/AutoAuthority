<?php
session_start();
$error="";


if(isset( $_POST['button2']))
	{

				echo '<script type="text/javascript">
           window.location = "Ad-VehicleForSale.php"
      </script>';
	  
	}

?>
<!DOCTYPE html>
<html>
<head>  
<script type="text/javascript" src="js/prod-libs.min.js"></script>
<link rel="stylesheet" href="css/main.min.css" type="text/css"/>
-->
<link rel="stylesheet" media="all" href="css/static.css"/> 
<link rel="stylesheet" media="print" href="css/print.css"/>

<link rel='stylesheet' id='avada-modified-stylesheet-css'  href='css/avada-modified-style.css' type='text/css' media='all' />



<script type='text/javascript' src='js/jquery.js'></script>

<link rel="icon" type="image/ico" href="favicon.ico"/>





<title>Auto Authority</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>






</head>
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
	<a href="Logout.php" style="color:#FFF;">LOGOUT</a>
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

 

<script>
$(document).ready(function(){
    $('#login-trigger').click(function() {
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');                    
        
        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        })
});
</script>

</div>

     
</div>
</div>
</header>
<p style="font-size:40px;">&nbsp;</p>
<center><h1 style="font-size:80px;">ADMIN PANEL</h1>
 <p style="font-size:40px;">&nbsp;</p>
 
  <form name="form1" method="post" action="">
    <table width="379" height="136" border="1">
      <tr>
        <td height="130"><input type="submit" name="button" id="button" value="Reservations"></td>
        <td><input type="submit" name="button2" id="button2" value="Vehicles For Sale"></td>
        <td><input type="submit" name="button3" id="button3" value="Vehicles On Rent"></td>
        <td><input type="submit" name="button4" id="button4" value="All Users"></td>
        <td><input type="submit" name="button5" id="button5" value="Job Applications"></td>
      </tr>
    </table>
  </form>

</center>
<p style="font-size:40px;">&nbsp;</p>

    <footer class="cf">
    
	<div class="logo">
		<a href="/en.html"><img src="logo-enterprise.png" alt="Enterprise"/></a>
	</div>
    

</footer>
</html>
