<?php
session_start();
require('CRUD.php');
$selectedID=$_SESSION['SaleCar'];
echo $selectedID;
if(isset($_POST['buyingbtn']))
	{
$_SESSION['VALUE3'] = $_POST['hiddenvalue22'];
echo '<script type="text/javascript">
           window.location = "Buy.php"
      </script>';
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

<link rel="icon" type="image/ico" href="php/buy-cars/favicon.ico"/>





<title>Auto Authority</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>






</head>

<body>
<header class="cf">
<div><?php include('header.php')?></div>
<?php
$response=select("carsforsale",array('id'=>$selectedID));
  foreach($response['data'] as $value)
{
	  ?>

</header>
<section class="band vehicle-page-heading">
	<div class="cf">
		<div class="left">
			<h1 style="font-size:40px;"><b><?php echo $value['CarName'] ?></b></h1>
			
		</div>
        <div class="right">
				<form action="" method="post">
			<input type="submit" class="btn submit" style="width:250px; height:50px;" value="BUY NOW" id="buyingbtn" name="buyingbtn" />
            <input id="hiddenvalue22" value="1" type="hidden" name="hiddenvalue22" /></form>
            </div>
	</div>
</section>

<div class="vehicle-detail-band-wrapper">
  <section class="band full-bleed vehicle-detail-band" style="background-image:url(images/car-detail-bg.jpeg)">
  <img src="<?php echo 'images/'.$value ['Image'] ?>" style="margin-top:50px;"/>
	</section>
</div>

<section class="band vehicle-detail-content-band">
	<h2>Car's Details:</h2>
	<hr class="vehicle-bar">
	<div class="vehicle-detail-content-band-content"> Buy an Alto car for driving in crowded, downtown areas with busy traffic and tight parking spaces. Alto Car typically offer the best fuel efficiency. Buy now and get low rates from Auto Authority Car Sales Program. </div>
</section>


<section class="band vehicle-features-band cf">
	<div class="car-specs">
		<ul class="spec-list"><li class="spec-heading">Passengers</li><li class="spec-value"><i class="icon icon-specs-seats"></i><?php echo $value['Passengers'] ?></li></ul>
		<ul class="spec-list"><li class="spec-heading">Bags</li><li class="spec-value"><i class="icon icon-specs-bags"></i><?php echo $value['Bags'] ?></li></ul>
	</div>
</section>

<section class="band vehicle-features-band cf">
	<div class="car-specs">
		<ul class="spec-list"><li class="spec-heading" style="height:20px; font-size:20px;">Price:</li></ul>
		<ul class="spec-list"><li class="spec-heading" style="font-size:30px;"><b><?php echo $value['Price'] ?> $</b></li></ul>
	</div>
</section>




<section class="band learn-band learn-band-4up full-bleed grey">
  <section class="content-container">
        <h2>
            Car's Characterstics:
        </h2>
        <section class="g g-4up">
	        
				
					<section class="gi">
	                    <i class="icon icon-carshare-join"></i>
	                    
	                    <h3 style="font-size:18px;"><b>MILEAGE</b></h3>
	                    <p><?php echo $value['Mileage'] ?> MILES</p>



	                </section>
				
					<section class="gi">
	                    <i class="icon icon-carshare-reserve"></i>
	                    
	                    <h3 style="font-size:18px;"><b>COLOR</b></h3>
	                    <p><?php echo $value['Color'] ?></p>



	                </section>
				
					<section class="gi">
	                    <i class="icon icon-carshare-unlock"></i>
	                    <h3 style="font-size:18px;"><b>FUEL TYPE</b></h3>
	                    
	                    <p><?php echo $value['FuelType'] ?></p>



	                </section>
				
					<section class="gi">
	                    <i class="icon icon-carshare-return"></i>
	                    <h3 style="font-size:18px;"><b>TRANSMISSION</b></h3>
	                    
	                    <p><?php echo $value['Transmission'] ?></p>



	                </section>


        </section>
    </section>

</section>
<?php  } ?> 
            
      <!-- FOOTER -->
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