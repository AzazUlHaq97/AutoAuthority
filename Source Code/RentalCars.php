<?php

require ('CRUD.php');
session_start();

if(isset($_POST['SlctBtn']))
	{
		
$_SESSION['RentCar'] = $_POST['hiddenvalueal'];

echo '<script type="text/javascript">
           window.location = "Reserve.php"
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

<link rel="icon" type="image/ico" href="favicon.ico"/>





<title>Auto Authority</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>






</head>
           <script type="text/javascript">
jQuery(document).ready(function(){
    jQuery.datepicker.setDefaults({
            dateFormat: 'mm/dd/yy',
            firstDay: 0    });
    var unavailableDates = [];
    function unavailable(date)
    {
        var ymd = date.getFullYear() + "-" + ("0"+(date.getMonth()+1)).slice(-2) + "-" + ("0"+date.getDate()).slice(-2);
        var day = new Date(ymd).getDay();
        if (jQuery.inArray(ymd, unavailableDates) < 0)
        {
            return [true, "enabled", ""];
        } else
        {
            return [false,"disabled","Closed"];
        }
    }
    jQuery("#pickup_date").datepicker({
        minDate: "+1D",
        maxDate: "+730D",
        beforeShowDay: unavailable,
        numberOfMonths: 2,
        onSelect: function(selected) {
            var date = jQuery(this).datepicker('getDate');
            if(date){
                date.setDate(date.getDate());
            }
            jQuery("#dropoff_date").datepicker("option","minDate", date)
        }
    });

    jQuery("#dropoff_date").datepicker({
        minDate: 0,
        beforeShowDay: unavailable,
        maxDate:"+730D",
        numberOfMonths: 2,
        onSelect: function(selected) {
            jQuery("#pickup_date").datepicker("option","maxDate", selected)
        }
    });
    jQuery("#pickup_date_datepicker_image").click(function()
    {
        jQuery("#pickup_date").datepicker("show");
    });
    jQuery("#dropoff_date_datepicker_image").click(function()
    {
        jQuery("#dropoff_date").datepicker("show");
    });

    jQuery('#nrs_do_search').click(function()
    {
        var objBookingCode = jQuery('#booking_code');
        var objPickupLocation = jQuery('#pickup_location_id');
        var objDropoffLocation = jQuery('#dropoff_location_id');
        var objPickupDate = jQuery('#pickup_date');
        var objDropoffDate = jQuery('#dropoff_date');
        var objBookingPeriod = jQuery('#booking_period');

        var bookingCode = "";
        var pickupLocationId = "SKIP";
        var dropoffLocationId = "SKIP";
        var pickupDate = "SKIP";
        var dropoffDate = "SKIP";
        var bookingPeriod = "SKIP";

        if(objBookingCode.length)
        {
            bookingCode = objBookingCode.val();
        }

                    if(objPickupLocation.length)
            {
                pickupLocationId = objPickupLocation.val();
            }
        
                    if(objDropoffLocation.length)
            {
                dropoffLocationId = objDropoffLocation.val();
            }
        
                    if(objPickupDate.length)
            {
                pickupDate = objPickupDate.val();
            }
        
                    if(objDropoffDate.length)
            {
                dropoffDate = objDropoffDate.val();
            }
        
                    if(objBookingPeriod.length)
            {
                bookingPeriod = objBookingPeriod.val();
            }
                //alert('bookingCode[len]:' + objBookingCode.length + ', bookingCode[val]:' + bookingCode);

        if(bookingCode != "" && bookingCode != "I have a reservation number:")
        {
            return true;
        } else if(pickupLocationId == "")
        {
            alert('Please select pick-up location!');
            return false;
        } else if(dropoffLocationId == "")
        {
            alert('Please select drop-off location!');
            return false;
        } else if(pickupDate == "" || pickupDate == "Date:")
        {
            alert('Please select pickup date!');
            return false;
        } else if(dropoffDate == "" || dropoffDate == "Date:")
        {
            alert('Please select dropoff date!');
            return false;
        } else if(bookingPeriod == "")
        {
            alert('Please select reservation period!');
            return false;
        } else
        {
            return true;
        }
    });
});
</script>

<body class="en_us homepage">
	<header class="cf">
<div><?php include('header.php')?></div>


</header>
   

<section class="band vehicle-page-heading">
	<div class="cf">
		<div class="left">
			<h1>Rental Cars in the United States</h1>
			<h3> Choose from a variety of rental cars in this category including economy, full-size or luxury sedans. Whether you are looking for fuel-efficiency, space, or comfort and style you are sure to find the perfect rental car no matter where you are headed.</h3>
		</div>

		<div class="right">
			<a id="resButton" class="btn" href="#reserve">START A RESERVATION</a>
		</div>
	</div>
</section>
<hr class="rule vehicle-meta-page"/>

<section>

	<div class="vehicles vehicle-meta-page">
		<div class="reservation-flow cars null">
			<div class="reservation-step">
				<div class="cars-wrapper cf">
                <div class="vehicles">
			 <?php

  	$response=select("carsforrent",array());

  foreach($response['data'] as $value)
{

$RentCarID = $value['id'];




	?>        	
<div class="car-container animated">
<div class="car-cutoff" >
<div class="car" >
<div class="default-view " >
<div class="car-details cf">
<div class="car-header">
<p class="beta" ><?php echo $value['class'] ?></p>
<span ><?php echo $value['carname'] ?></span>
<span class="transmission"><?php echo $value['transmission'] ?></span>
<img class="trucks-icon" src="/content/dam/ecom/utilitarian/enterprise-truck-logo.png" alt="">
</div>
</div>
<div class="car-image">
<img src="<?php echo 'images/'.$value ['Image'] ?>" style="margin-top:60px;" alt="CarImage">
</div>
<div class="cf" >
<div class="rate-section">
<span>PAY LATER</span>
</div>
<div class="rates cf">
<div class="day-rate rate-info">
<div class="block-seperator">
<div class="rate-uppertext">
</div>
<div class="rate-normal">$ <?php echo $value['perdayamount'] ?></div>
<div class="rate-uppertext">
</div>
</div>
<div class="rate-subtext">Per Day</div>
</div>
<div class="total-rate rate-info">
<div class="block-seperator">
<div class="rate-uppertext">
</div>
<div class="car-specs cf" style="margin-left:50px;">
<ul class="spec-list"><li class="spec-heading">Passengers</li><li class="spec-value"><i class="icon icon-specs-seats"></i><?php echo $value['passengers'] ?></li></ul></div>
<div class="rate-uppertext">
</div>
</div>

</div>
</div>
</div>
								<form action="" method="post">
<input type="submit" class="select-button" data-name="Economy" data-car="ECAR" id="SlctBtn" Name="SlctBtn"  value="SELECT">
 <input id="hiddenvalueal" value="<?php echo $RentCarID; ?>" type="hidden" name="hiddenvalueal" />
</form>
					
</div>
</div>
</div>
</div>
<?php  }   ?>
            
				</div>
			</div>
		</div>
        </div>
	</div>
</section>
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