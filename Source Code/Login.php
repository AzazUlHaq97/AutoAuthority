<?php
session_start();

require('CRUD.php');
if(isset( $_POST['textfield']) && isset( $_POST['textfield2']))
	{

		
		$user= mysql_real_escape_string(  $_POST['textfield']);
		$pass= mysql_real_escape_string( $_POST['textfield2']);
		
		 if (empty($_POST['textfield']) || empty($_POST['textfield2']))
    {
        echo '<script language="javascript">';
echo 'alert(" FILL BOTH FIELDS FIRST!")';
echo '</script>';
    }

if(!empty($user) && !empty($pass))
	{

$response=select("users",array('Email'=> $user,'Password'=> $pass ));

	if(sizeof($response["data"]) > 0)
	{
	
		if($user==$response['data'][0]['Email'] && $pass==$response['data'][0]['Password'])
		{
			$_SESSION['Username']=$user;
			echo '<script type="text/javascript">
           window.location = "UserIndex.php"
      </script>';
			//header('Location:UserIndex.php');
		}
	}

			else 
		{

echo '<script language="javascript">';
echo 'alert(" Invalid Email or Password")';
echo '</script>';
		}
	}
	}

?><!DOCTYPE html>
<html>
<head>  
<script type="text/javascript" src="js/prod-libs.min.js"></script>
<!--<link rel="stylesheet" href="css/main.min.css" type="text/css"/>-->
-->
<link rel="stylesheet" media="all" href="css/static.css"/> 
<link rel="stylesheet" media="print" href="css/print.css"/>

<link rel='stylesheet' id='avada-modified-stylesheet-css'  href='css/avada-modified-style.css' type='text/css' media='all' />



<script type='text/javascript' src='js/jquery.js'></script>

<link rel="icon" type="image/ico" href="favicon.ico"/>





<title>Auto Authority</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>






</head>
<body>
	<header class="cf">
<div><?php include('header.php')?></div>


</header>





<section>



<div id="account">
<section class="account-page sign-in">
<header>
<div class="overview">
<h1>Sign In</h1>
<div class="banner">Please sign in to your Auto Authority® account below.</div>
</div>
</header>
<form method="post" action="">
<div class="account-tabs-container"></div>
<div class="enterprise-login cf">
<label for="username">Email / Member Number</label>
<input name="user" id="user" type="text">
<label for="password">Password</label
><input name="pwd" id="pwd"type="password">
<div class="login-actions">
<div class="false"></div>
<input type="submit" class="btn" name="button" id="button" value="Log in">
</div>
</div>
</form>
</section>
</div>



    
<script type="text/javascript" src="/etc/designs/ecom/clientlibs2015-12-09-15-59/account.min.js"></script>



<div style="display: block;" class="signup">
    <div><section class="band promo-band full-bleed">
    <section class="promo-container" style="background-image:url(images/eplus-signin-signup.jpeg);">
        <section class="promo">
            <div class="cta-container">
                <h2>Not an Enterprise Plus member?</h2>
                <p></p><p>Join now and start earning points toward free rentals.<br>
</p>


<p></p>
            </div>
            <div class="cta">
                <a href="/en/enroll.html">JOIN NOW</a>
            </div>
        </section>
    </section>
</section>
</div>
</div>

</section>







   <footer class="cf">
    
	<div><?php include('footer.php')?></div>

</footer>
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