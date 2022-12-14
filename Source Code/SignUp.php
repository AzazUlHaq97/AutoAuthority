<?php

session_start();
require('CRUD.php');

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


<link rel="icon" type="image/ico" href="favicon.ico"/>
<title>Auto Authority</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

</head>


<body class="en_us Enroll oo_bar">
	<header class="cf">
<div><?php include('header.php')?></div>


</header>
   
   
   
   
   
   
   
   <section class="enroll-page">
   <div >
   <header>
   <h1 >CREATE YOUR AUTO AUTHORITY ACCOUNT</h1>
   <div class="required-label">All fields are required except those marked optional</div>
   
   </header>
   <?php 
   if(isset($_POST['CreateAcc']))
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



echo '<script language="javascript">';
echo 'alert("ACCOUNT CREATED! You can now Log In.")';
echo '</script>';

echo '<script type="text/javascript">
           window.location = "Login.php"
      </script>';
}

else
{
	global $error;
	$error= "Please fill all the required field!";
	



	
	
   
   ?>
<div style="color:#F00; margin-left:70px; font-size:25px;"><?php echo $error; }} ?></div>

   <div class="enroll-forms-container">
   <form class="cf enroll-forms" method="POST" action="SignUp.php">
   <h2><span class="cf numberCircle" >1</span>
   <span>My Profile</span>
   </h2>
   <div class="cf account-details active" >
   <div class="field-container first-name" >
   <label for="first-name" >First Name</label>
   <input class="" id="first-name" name="first-name"  type="text">
   </div>
   <div class="field-container last-name" >
   <label for="last-name">Last Name</label>
   <input class="" id="last-name" name="last-name" type="text">
   </div>
   <div class="field-container">
   <label for="emailAddress">Email Address</label>
   <input class="" id="email" name="email"   type="email">
   </div>
   <div class="field-container">
     <label for="password" >Password</label>
   <input class="" id="password" name="password"  type="password">
 </div>
   <div class="cf field-container active">
   <label for="passwordConfirm" >Confirm Password</label>
   <input class="" id="passwordConfirm" name="passwordConfirm"  type="password"  >
   </div>
   </div>
<hr>
   <h2 class="disabled">
   <span class="numberCircle">2</span>
   <span >Contact Details</span>
   </h2>
   <div class="contact-info active">
   <div class="field-container country" >
   </div><div class="field-container">
   <label for="streetAddress">Street Address </label>
   <input id="streetAddress" name="streetAddress" type="text">
   </div>
   <div class="field-container city">
   <label for="city">City</label>
   <input class="" id="city" name="city" type="text">
   </div>
   <div class="field-container postal">
   <label for="postal">ZIP Code</label>
   <input class="" id="postal" name="postal" type="text">
   </div>
   <div class="field-container phone">
   <label for="phoneNumber">Primary Phone Number</label>
   <select class="styled">
   <option value="HOME">Home</option>
   <option value="WORK">Work</option>
   <option value="MOBILE">Mobile</option>
   <option value="OTHER">Other</option></select>
   <input class="" id="phoneNumber" name="phoneNumber"type="tel">
   </div>
   <div class="field-container phone">
   <select class="styled">
   <option value="HOME">Home</option>
   <option value="WORK">Work</option>
   <option value="MOBILE">Mobile</option>
   <option value="OTHER">Other</option>
   </select>
   <input class="" id="alternativePhoneNumber" name="alternativePhoneNumber" placeholder="Optional"  type="tel">
   </div>
   </div>
<hr>
   <h2 class="disabled">
   <span class="numberCircle">3</span>
   <span>Driver's License Details</span>
   </h2>
   <div class="license-info active">
   <div class="field-container issue-country">
   </div>
   <div class="field-container birth-date">
   <label for="birth-date-year">
   <span>Birth Date</span>
   <span>&nbsp;</span>
   <em>
   <span>(</span><span>MM/DD/YYYY</span><span>)</span></em>
   </label>
<input name="date" id="date" type="date">   
   </div>
   <div class="field-container license-number">
   <label for="license-number">Driver's License Number</label>
   <input id="license-number" name="license-number" type="text">
   </div>
   <div class="field-container expire-date">
   <label for="expire-date-year">
   <span>Expiration Date</span>
   <span>&nbsp;</span>
   <em>
   <span>(</span><span>MM/DD/YYYY</span><span>)
   </span>
   </em>
   </label>
   <input name="date2" id="date2" type="date">   </div>

   </div>
   
<hr>
   <h2 class="disabled">
   <span class="numberCircle">4</span>
   <span>Preferences</span>
   </h2>
   <div class="preferences active">


   <div class="field-container">
    <p>     
    
      <input id="acceptTerms" name="acceptTerms" type="checkbox">
       <label class="" for="acceptTerms" >
		
  
         <span>I have read and accept </span>
       

  
         <a href="#" class="acceptTermsLink">Enterprise Plus Terms &amp; Conditions</a> 
       </label>
     </p>
     
   </div>
   <div class="form-actions">
   <div class="button-right">
   <div class="false"></div>
   <div class="btn continue"><input type="submit" id="CreateAcc" name="CreateAcc"value="CREATE ACCOUNT" onclick="if(!this.form.acceptTerms.checked){alert('You must agree to the terms first.');return false}"></div>
   </div>
   </div>
   </div>
   </form>
   
   </div>
   <div >
   </div>
   </div>
   </section>


   

   
   <script type='text/javascript' src='js/enrollmin.js'></script>
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


