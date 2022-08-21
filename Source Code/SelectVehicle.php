<?php
session_start();
 
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

    <div class="master-nav">
        <div class="logo">
            <a href="/en.html"><img src="logo-enterprise.png" alt="enterprise"/></a>
        </div>
        <div class="mobile-logo">
            <a href="/en.html"><i class="icon icon-nav-mobile-e-icon-white"></i></a>
        </div>

  <div class="nav-container">
<div class="outer-nav">
    <nav class="nav" id="utility-nav">
        <ul class="utility-nav">
        
        
<li tabindex="7" class="language" style="font-size:15px">
<b>  Pickup Location: </b><?php echo $_SESSION['PickLocation']; ?>
</li>


<li tabindex="9" class="currency" style="font-size:15px">
<b> Dropoff Location:</b> <?php echo $_SESSION['DropLocation'];?> 
</li>


<li tabindex="6" class="help" style="font-size:15px">
<b>	Pickup Date: </b> <?php echo $_SESSION['PickDate']; ?>
</li>



<li tabindex="8" class="currency" style="font-size:15px">
<b>Dropoff Date:</b> <?php echo $_SESSION['DropDate']; ?>
</li>


<li tabindex="8" class="currency" style="font-size:15px">
<b>Dropoff Date:</b> <?php echo $_SESSION['BookingCode']; ?>
</li>

        
        </ul>
    </nav>
</header>
   

<section class="band vehicle-page-heading">
	<div class="cf">
		<div class="centre">
			<h1 style="margin-left:240px; font-size:70px; font:Verdana, Geneva, sans-serif">SELECT A CATEGORY</h1>
			
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
					<div class="car-container animated">
						<div class="car-cutoff">
							<div class="car">
								<div class="default-view">
									<div class="car-details">
										<div class="car-header">
											
											
										</div>
									</div>
									<div class="car-image">
										<img src="https://www.enterprise.com/content/enterprise_cros/data/vehicle/bookingCountries/US/CARS/ECAR.doi.352.high.imageSmallThreeQuarterNodePath.png/1435160857936.png" alt="Economy">
									</div>
												<h2 style="margin-left:100px; font-size:50px;margin-top:30px; font:'Courier New', Courier, monospace; color:#006639;">CARS</h2>
									<a href="RentalCars.php" class="select-button">Choose</a>
								</div>
							</div>
						</div>
					</div>
				
					
				
					
				
					<div class="car-container animated">
						<div class="car-cutoff">
							<div class="car">
								<div class="default-view">
									<div class="car-details">
										<div class="car-header">
											
										</div>
									</div>
									<div class="car-image">
										<img src="https://www.enterprise.com/content/enterprise_cros/data/vehicle/bookingCountries/US/CARS/ICAE.doi.352.high.imageSmallThreeQuarterNodePath.png/1368816990201.png" alt="Intermediate&#x20;Electric">
									</div>
											<h2 style="margin-left:100px; font-size:50px;margin-top:30px; font:'Courier New', Courier, monospace; color:#006639;">SUVs</h2>
									<a href="/en/car-rental/vehicles/us/cars/intermediate-electric.html" class="select-button">Choose</a>
								</div>
							</div>
						</div>
					</div>
				
					
				
					<div class="car-container animated">
						<div class="car-cutoff">
							<div class="car">
								<div class="default-view">
									<div class="car-details">
										<div class="car-header">
											
										</div>
									</div>
									<div class="car-image">
										<img src="https://www.enterprise.com/content/enterprise_cros/data/vehicle/bookingCountries/US/CARS/UXAR.doi.352.high.imageSmallThreeQuarterNodePath.png/1444354955149.png" alt="Premium&#x20;Elite">
									</div> 
									<h2 style="margin-left:40px; font-size:50px;margin-top:30px; font:'Courier New', Courier, monospace; color:#006639;">MINI VANS</h2>
									<a href="/en/car-rental/vehicles/us/cars/premium-elite.html" class="select-button">Choose</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        </div>
	</div>
</section>

   
    
    
    
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