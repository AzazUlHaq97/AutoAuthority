<?php
session_start();




if(isset($_POST['nrs_do_search2']))
	{
$_SESSION['BookingCode']= $_POST['booking_code'];
$_SESSION['PickLocation']= $_POST['pickup_location_id'];
$_SESSION['DropLocation']= $_POST['dropoff_location_id'];
$_SESSION['PickTime']= $_POST['pickup_time'];
$_SESSION['DropTime']= $_POST['dropoff_time'];
$_SESSION['PickDate']= $_POST['pickup_date'];
$_SESSION['DropDate']= $_POST['dropoff_date'];

if(!isset($_SESSION['Username']))
{
header('Location:Login.php?error="Login First"');
}
else
{
	header('Location:SelectVehicle.php');
}
	}
?>
<!DOCTYPE html>
<html>
<head>  
<script type="text/javascript" src="js/prod-libs.min.js"></script>
<link rel="stylesheet" href="css/main.min.css" type="text/css"/>

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
            dateFormat: 'yy-mm-dd',
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

    jQuery('#nrs_do_search2').click(function()
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
   



  <!-- TOP SECTION -->
<section class="band hero-band full-bleed" style="
    height: 596.797px;
">
	<div class="hero-container" style="background-image:url(images/data1/images/f1.jpg);">
		
    </div>
</section>
<!-- END OF TOP SECTION -->
    
    
    
    <!-- RESERVATION -->
<div id="main" class="clearfix " style="">
        		<div class="maininpage" style="max-width:100%">
            	    <div class="widereservation">
        <div class="avada-row" style="width:100%">
 
<style type="text/css">
.input-text, input[type="text"], textarea,
input.s,input.s .placeholder,#comment-input input,#comment-textarea textarea,#comment-input .placeholder,#comment-textarea .placeholder,.comment-form-comment textarea, .post-password-form .password,
.wpcf7-form .wpcf7-text,.wpcf7-form .wpcf7-quiz,.wpcf7-form .wpcf7-number,.wpcf7-form textarea,.wpcf7-form .wpcf7-select,.wpcf7-select-parent .select-arrow,.wpcf7-captchar,.wpcf7-form .wpcf7-date,
.gform_wrapper .gfield input[type=text],.gform_wrapper .gfield input[type=email],.gform_wrapper .gfield textarea,.gform_wrapper .gfield select,
select
{color:#aaa9a9;}
</style>

<div class="item-rental-wrapper item-rental-home-page item-rental-new-reservation" style="padding-top:100px; padding-bottom:100px;">
    <form id="formElem" name="formElem" action="" method="post">
                <div class="reservation-item">
            <div class="reservation-item-header">
                <div class="reservation-item-title">
                    Pick Up<br />
                    Information                </div>
                <img src="images/fsds.png" alt="Reservation" />
            </div>
            <div class="reservation-item-body">
                                    <div class="styled-select-dropdown wide-dropdown">
                        <select name="pickup_location_id" id="pickup_location_id" class="home-select"><option value="" selected="selected">City &amp; Location:</option><option value="NorthKarachi">NorthKarachi</option><option value="Defence">Defence</option><option value="Nazimabad">Nazimabad</option><option value="Maymar">Maymar</option><option value="Airport">Airport</option><option value="Gulshan">Gulshan</option>    </select>                    </div>
                                                    <div class="inline-div">
                        <input id="pickup_date" name="pickup_date" type="text" value="Date:" readonly AUTOCOMPLETE=OFF />
                    </div>
                    <div class="inline-div">
                        <a id="pickup_date_datepicker_image" href="javascript:;">
                            <img name="datepicker" alt="datepicker" src="images/month.png" height="30" width="30" />
                        </a>
                    </div>
                    <div class="styled-select-dropdown narrow-dropdown">
                        <select id="pickup_time" name="pickup_time"><option value="00:00:00">12:00 AM</option><option value="00:30:00">12:30 AM</option><option value="01:00:00">1:00 AM</option><option value="01:30:00">1:30 AM</option><option value="02:00:00">2:00 AM</option><option value="02:30:00">2:30 AM</option><option value="03:00:00">3:00 AM</option><option value="03:30:00">3:30 AM</option><option value="04:00:00">4:00 AM</option><option value="04:30:00">4:30 AM</option><option value="05:00:00">5:00 AM</option><option value="05:30:00">5:30 AM</option><option value="06:00:00">6:00 AM</option><option value="06:30:00">6:30 AM</option><option value="07:00:00">7:00 AM</option><option value="07:30:00">7:30 AM</option><option value="08:00:00">8:00 AM</option><option value="08:30:00">8:30 AM</option><option value="09:00:00" selected="selected">9:00 AM</option><option value="09:30:00">9:30 AM</option><option value="10:00:00">10:00 AM</option><option value="10:30:00">10:30 AM</option><option value="11:00:00">11:00 AM</option><option value="11:30:00">11:30 AM</option><option value="12:00:00">12:00 PM</option><option value="12:30:00">12:30 PM</option><option value="13:00:00">1:00 PM</option><option value="13:30:00">1:30 PM</option><option value="14:00:00">2:00 PM</option><option value="14:30:00">2:30 PM</option><option value="15:00:00">3:00 PM</option><option value="15:30:00">3:30 PM</option><option value="16:00:00">4:00 PM</option><option value="16:30:00">4:30 PM</option><option value="17:00:00">5:00 PM</option><option value="17:30:00">5:30 PM</option><option value="18:00:00">6:00 PM</option><option value="18:30:00">6:30 PM</option><option value="19:00:00">7:00 PM</option><option value="19:30:00">7:30 PM</option><option value="20:00:00">8:00 PM</option><option value="20:30:00">8:30 PM</option><option value="21:00:00">9:00 PM</option><option value="21:30:00">9:30 PM</option><option value="22:00:00">10:00 PM</option><option value="22:30:00">10:30 PM</option><option value="23:00:00">11:00 PM</option><option value="23:30:00">11:30 PM</option></select>                    </div>
                                                    <input id="booking_code" value="<?php 													$BookingCode=rand(10000,99999); echo $BookingCode ?>" type="hidden" name="booking_code" />
                            </div>
        </div>
        
                    <div class="reservation-item">
                <div class="reservation-item-header">
                    <div class="reservation-item-title">
                        Drop Off<br />
                        Information</div>
                    <img src="images/fsds.png" alt="Reservation" />
                </div>
                <div class="reservation-item-body">
                                            <div class="styled-select-dropdown wide-dropdown">
                            <select name="dropoff_location_id" id="dropoff_location_id" class="home-select"><option value="" selected="selected">City &amp; Location:</option><option value="NorthKarachi">NorthKarachi</option><option value="Defence">Defence</option><option value="Nazimabad">Nazimabad</option>   <option value="Maymar">Maymar</option>     <option value="Airport">Airport</option>    <option value="Gulshan">Gulshan</option>    </select>                    </div>
                                                                                            <div class="inline-div">
                                <input id="dropoff_date" name="dropoff_date" type="text" value="Date:" readonly AUTOCOMPLETE=OFF />
                            </div>
                            <div class="inline-div">
                                <a id="dropoff_date_datepicker_image" href="javascript:;">
                                    <img name="datepicker" alt="datepicker" src="images/month.png" height="30" width="30" />
                                </a>
                            </div>
                            <div class="styled-select-dropdown narrow-dropdown">
                                <select id="dropoff_time" name="dropoff_time"><option value="00:00:00">12:00 AM</option><option value="00:30:00">12:30 AM</option><option value="01:00:00">1:00 AM</option><option value="01:30:00">1:30 AM</option><option value="02:00:00">2:00 AM</option><option value="02:30:00">2:30 AM</option><option value="03:00:00">3:00 AM</option><option value="03:30:00">3:30 AM</option><option value="04:00:00">4:00 AM</option><option value="04:30:00">4:30 AM</option><option value="05:00:00">5:00 AM</option><option value="05:30:00">5:30 AM</option><option value="06:00:00">6:00 AM</option><option value="06:30:00">6:30 AM</option><option value="07:00:00">7:00 AM</option><option value="07:30:00">7:30 AM</option><option value="08:00:00">8:00 AM</option><option value="08:30:00">8:30 AM</option><option value="09:00:00" selected="selected">9:00 AM</option><option value="09:30:00">9:30 AM</option><option value="10:00:00">10:00 AM</option><option value="10:30:00">10:30 AM</option><option value="11:00:00">11:00 AM</option><option value="11:30:00">11:30 AM</option><option value="12:00:00">12:00 PM</option><option value="12:30:00">12:30 PM</option><option value="13:00:00">1:00 PM</option><option value="13:30:00">1:30 PM</option><option value="14:00:00">2:00 PM</option><option value="14:30:00">2:30 PM</option><option value="15:00:00">3:00 PM</option><option value="15:30:00">3:30 PM</option><option value="16:00:00">4:00 PM</option><option value="16:30:00">4:30 PM</option><option value="17:00:00">5:00 PM</option><option value="17:30:00">5:30 PM</option><option value="18:00:00">6:00 PM</option><option value="18:30:00">6:30 PM</option><option value="19:00:00">7:00 PM</option><option value="19:30:00">7:30 PM</option><option value="20:00:00">8:00 PM</option><option value="20:30:00">8:30 PM</option><option value="21:00:00">9:00 PM</option><option value="21:30:00">9:30 PM</option><option value="22:00:00">10:00 PM</option><option value="22:30:00">10:30 PM</option><option value="23:00:00">11:00 PM</option><option value="23:30:00">11:30 PM</option></select>                            </div>
                                                                                </div>
            </div>
                <div class="reservation-item">
            <div class="reservation-item-header">
                <div class="reservation-item-title">
                    Other<br />
                    Information</div>
                <img src="images/fsds.png" alt="Reservation" />
            </div>
            <div class="reservation-item-body">
                <input type="hidden" name="nrs_came_from_step1" value="yes" />
                                    <div class="styled-select-dropdown wide-dropdown">
                        <select name="body_type_id" id="body_type_id"><option value="0" selected="selected">Class:</option><option value="1">Intermediate</option><option value="2">Compact</option><option value="3">Station Wagon</option><option value="4">SUV</option><option value="5">Minibus</option></select>                    </div>
                                                                    <div class="styled-select-dropdown wide-dropdown">
                        <select name="fuel_type_id" id="fuel_type_id"><option value="0" selected="selected">Fuel:</option><option value="1">Petrol</option><option value="2">Diesel</option></select>                    </div>
                                <div class="top-padded-submit">
                                
                                    <input type="submit" id="nrs_do_search2" type="submit"  name="nrs_do_search2"  value="SUBMIT"/>
                                </div>
            </div>
        </div>
    </form>

    </div>
    
<!-- RESERVATION END -->




<!-- MEET THE FLEET-->
    
    <div class="section meet-the-fleet"><section class="band meet-the-fleet-band">
  

  <div class="fleet-background-wrapper">

    <div class="fleet-content">
      <div class="fleet-headline">
        <h2>MEET THE FLEET </h2>
        <div class="fleet-subtext"><p>From a mini car to a truck, wherever you go, there we are.</p>


</div>
      </div>

      <div class="fleet-cars">
       
      
        <div class="single-car" data-class="Exotic&#x20;Car&#x20;Collection">
          <p>When only the best will do. Choose from an exceptional collection of premium vehicles by world-class brands.</p>
          <img src="images/meetfleet/mtf-exotics-porsche-boxster.png.wrend.1280.720.jpeg" alt="Exotic&#x20;Car&#x20;Collection"/>
        </div>
      
        <div class="single-car" data-class="Trucks">
          <p>Available for daily, weekly or monthly rentals, our selection of cargo vans, pickups and box trucks have what you need.</p>
          <img src="images/meetfleet/mtf-trucks-chevy-silverado.png.wrend.1280.720.jpeg" alt="Trucks"/>
        </div>
      
        <div class="single-car" data-class="Rideshare">
          <p>With comfort top of mind, our Rideshare fleet allows you to choose how to get to and from work.</p>
          <img src="images/meetfleet/mtf-rideshare-ford-explorer.png.wrend.1280.720.jpeg" alt="Rideshare"/>
        </div>
      
        <div class="single-car" data-class="CarShare">
          <p>Our convenient sharing program empowers you with 24&#x2f;7 access to a variety of vehicles for one low hourly rate.</p>
          <img src="images/meetfleet/mtf-carshare-ford-hatchback.png.wrend.1280.720.jpeg" alt="CarShare"/>
        </div>
      </div>
      <div class="car-information">
        <div class="car-class"></div>
        <p class="car-text"></p>
        <a href="/en/about/mobility-solutions.html" class="btn">View All Vehicles</a>
      </div>

    </div>

  </div>

</section>
<script>
  (function($) {
    //scoped vars
    var prevCarTimer = activeCarTimer = nextCarTimer = cleanUpTimer = fleetCycle = 0,
        onTheMove = false,
        autoCycle = true,
        fleetCycleInterval = 1000,
        $fleet = $('.fleet-content'),
        $cars = $fleet.find(".single-car"),
        $onStageCar = $cars.first(),
        $prevCar = $cars.last(), 
        $nextCar = $cars.eq(1),
        $carInfo = $fleet.find('.car-information'),
        $carInfoHeading = $fleet.find('.car-class'),
        $carInfoText = $fleet.find('.car-text');


    //START STATES CSS
    $cars.css({left: "120%" });
    $onStageCar.addClass('current').css({left: "20%"}).addClass("active");
    $prevCar.css({left: "-45%"}).addClass("active");
    $nextCar.css({left: "85%"}).addClass("active");
    //start states HTML
    $carInfoHeading.html($onStageCar.data('class'));
    $carInfoText.html($onStageCar.find('p').html());


    //BUILD NAV
    var navHTML = '<ul class="fleet-carousel-nav cf">';
    for( var i=0; i<$cars.length; i++ ){
      navHTML += '<li class="fleet-carousel-nav-item' + (!i ? ' current' : '') + '"></li>';
    }
    navHTML += '</ul>';
    //update DOM & cache var
    $fleet.append(navHTML);
    var $fleetNav = $('.fleet-carousel-nav');
    

    //ON CLICK ADVANCE THE FLEET
    function advanceFleet(prevCar, onStageCar, nextCar) {
      //prevent quick succession clicks
      if(onTheMove){
        return;
      }
      onTheMove = true;

      //fleet auto cycle
      clearTimeout(fleetCycle);
      fleetCycle = 0;

      //local vars
      var $first = prevCar || $prevCar,
          $prev = onStageCar || $onStageCar, 
          $active = nextCar || $nextCar, 
          $next = $nextCar.next().length ? $nextCar.next() : $cars.first();

      //update larger scope vars
      $onStageCar = $active;
      $nextCar = $next;
      $prevCar = $prev;

      //update nav
      $fleetNav.children().removeClass('current').eq($active.index()).addClass('current');

      //info - update content and fade in
      $carInfoHeading.css({opacity:0});
      $carInfoText.css({opacity:0});
      infoTimer = setTimeout(function(){
        $carInfoHeading.html($onStageCar.data('class')).css({opacity:1});
        $carInfoText.html($onStageCar.find('p').html()).css({opacity:1});
      }, 500);

      //move previous vehicle (only partially seen) off screen 
      $first.addClass("active").css({left: "-165%" });

      //old "on stage" vehicle - coming off
      prevCarTimer = setTimeout(function(){
        $prev.addClass("active").css({left: "-45%" });
        //get the next up car over to the right (off stage)
        $next.removeClass("active").css({left: "120%"});
      }, 100);

      //old "on deck" vehicle - coming on stage
      activeCarTimer = setTimeout(function(){
        $active.addClass("active").css({left: "20%" });
      }, 300);

      //new vehicle that is "on deck"
      nextCarTimer = setTimeout(function(){
        $next.addClass("active").css({left: "85%" });
      }, 400);

      //clean up the mess (css classes, lingering inline styles, and click blocking)
      cleanUpTimer = setTimeout(function(){
        $cars.not('.active').css({left: "120%"});
        $cars.removeClass('active').removeClass('current');
        $active.addClass('current');
        //un-block clicks
        onTheMove = false;
        //auto cycle - recurse on the function
        if(autoCycle) fleetCycle = setTimeout(advanceFleet, fleetCycleInterval);
      }, 1000);
    }


    //AUTO CYCLE
    fleetCycle = setTimeout(advanceFleet, fleetCycleInterval);


    //BIND CLICK EVENT
    $(".fleet-cars").on("click faux_click", function(){ 
      autoCycle = false;
      advanceFleet(); 
    });


    //BIND MOUSE EVENTS - to pause/resume auto cycle
    $cars.on('mouseenter', function(){
        //only hover on current car to stop carousel
        if( $(this).hasClass('current') ){
          clearTimeout(fleetCycle);
          fleetCycle = 0;
          autoCycle = false;
        }
      })
      .on('mouseleave', function(){
        //game on! start the carousel back up
        if( $(this).hasClass('current') && !fleetCycle ){
          fleetCycle = setTimeout(function(){ advanceFleet(); }, fleetCycleInterval);
          autoCycle = true;
        }
      });
  })(jQuery);
</script></div>
    
    
    <!-- END OF MEET THE FLEET-->




    	<!-- Section with 2 classes-->
<div class="contextual-two-up section">
<section class="band contextual-two-up-band">
    <section class="header">
        <h2>We&#x27;re more than just vehicle rentals.</h2>
        <p>Our business rental programs scale to meet specific needs. Plus, we sell vehicles too.<br />
</p>



    </section>
    <section class="g g-2up">
        <section class="gi">
            <div class="img-container">
                <img src="images/2class_section/us-homepage-2up-business-rental.jpg.wrend.640.360.jpeg" alt="Enterprise&#x20;Business&#x20;Rentals">
            </div>
            <div class="content-container">
                <h3>Auto Authority Business Rentals</h3>
                <p>Our customized rental programs are designed specifically to meet your company's needs. </p>



                <a href="/en/business-car-rental.html">Learn More About Auto Authority Business Rentals</a>
                                
            </div>
        </section>
        <section class="gi">
            <div class="img-container">
                <img src="images/2class_section/us-homepage-2up-car-sales.jpg.wrend.640.360.jpeg" alt="Enterprise&#x20;Car&#x20;Sales">
            </div>
            <div class="content-container">
                <h3>Auto Authority Car Sales</h3>
                <p>We have more than 250 makes and models of quality used cars, trucks, vans and SUVs to choose from—all at great prices and backed by one of the industry's best used car warranties.</p>



                <a href="/en/used-cars.html">Learn More About Auto Authority Car Sales</a>
                                
            </div>
        </section>
    </section>
</section></div>    
    <!-- End of Section with 2 classes-->
    
    
    
    
    
    
    
    
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