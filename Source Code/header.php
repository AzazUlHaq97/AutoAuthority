<?php

$error="";


if(isset( $_POST['user']) && isset( $_POST['pwd']))
	{

		
		$user= mysql_real_escape_string(  $_POST['user']);
		$pass= mysql_real_escape_string( $_POST['pwd']);
		
		 if (empty($_POST['user']) || empty($_POST['pwd']))
    {
        echo '<script language="javascript">';
echo 'alert(" FILL ALL FIELDS")';
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

?>
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
	Help
	<i class="icon icon-utility-notch"></i>
</div>
<div class="utility-nav-content col-2">
	<fieldset>
		
			<div class="field-container">
				<h4>Customer Support</h4>
				<a href="https://enterprise.custhelp.com" target="_blank" class="btn">Customer Support</a>
				
			</div>
		
			<div class="field-container">
				<h4>Contact Us</h4>
				<a href="/en/help/contact.html" class="btn">Contact Us</a>
				
			</div>
		
	</fieldset>
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

<nav class="nav" id="utility-nav">
            <ul>

        <li id="login" tabindex="6">
         <div class="help">
         
            <a id="login-trigger" href="#"  >
                Log in <span>&#x25BC;</span>
            </a>

            <div id="login-content">
                <form method="post" action="" >
                    <fieldset id="inputs">
                       
                   
                        <input id="user" type="email" name="user" placeholder="Your email address">   
                        <input id="pwd" type="password" name="pwd" placeholder="Password">
                    </fieldset>
                    <fieldset id="actions">
                        <input type="submit" name="login" id="login" value="Log in">
                        <label  style="padding-top:10px; "><a href="SignUp.php" id="labeloflink">Don't have an account? Register!</a></label>
                        
                    </fieldset>
                    
                    </form>
                    </div>
            </div>                     
        </li>

    </ul>
</nav>

</div>

     
</div>






<!--NAVIGATION BAR STARTS HERE-->

<nav class="nav" id="primary-nav">

    <ul class="primary-nav active-cols-5">
    
 <!--1ST-->   
        <li tabindex="1" class="primary-item"><div class="megamenu megamenu-rent"><div class="primary-nav-label">Rent</div>
<div class="primary-nav-content">
	<div class="menu cols-4">
		<div class="nav-section">
			<h4 class="title">Reservations<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="CarReservation.php">
						Start a Car Reservation</a>
				</li>
				
				
				
				
				
				</ul>
		</div>
		<div class="nav-section">
			<h4 class="title">Alteration<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/reserve/view-modify-cancel.html">
						View/Modify or Cancel your reservation</a>
				</li>
				</ul>
		</div>
		<div class="nav-section">
			<h4 class="title">Single Way<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/car-rental/one-way.html">
						Only One-Way Car Rentals</a>
				</li>
				</ul>
		</div>
		<div class="nav-section">
			<h4 class="title">Long Time<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/car-rental/long-term.html">
						Car rental for more than a month®</a>
				</li>
				
				</ul>
		</div>
		</div>
	<div class='promo' style='background-image:url(images/short/bg1.jpeg)'>
	</div>
</div></div>
</li>


<!--2ND-->



        <li tabindex="2" class="primary-item"><div class="megamenu megamenu-own"><div class="primary-nav-label">Buy</div>
<div class="primary-nav-content">
	<div class="menu cols-2">
		<div class="nav-section">
			<h4 class="title">Buy a Car<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"><p>Visit our Auto Authority Car Sales page to browse our inventory of thousands of vehicles.</p>
</div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a class="external-link" target="_blank" href="http://www.enterprisecarsales.com/">
						Visit Page<i class="icon icon-nav-external-link-green"></i><i class="icon icon-nav-external-link-white"></i>
						</a>
				</li>
				</ul>
		</div>
		<div class="nav-section">
			<h4 class="title">About Auto Authority Car Sales<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"><p>We have more than 250 makes and models of quality used cars, new cars to choose from—all at great prices and backed by one of the industry's best used vehicle warranties.</p>
</div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/used-cars.html">
						Learn More</a>
				</li>
				</ul>
		</div>
		</div>
	<div class='promo' style='background-image:url(images/short/bg2.jpeg)'>
	</div>
</div></div>
</li>



 <!--3rd-->   
        <li tabindex="4" class="primary-item"><div class="megamenu megamenu-learn"><div class="primary-nav-label">Learn</div>
<div class="primary-nav-content">
	<div class="menu cols-3">
		<div class="nav-section">
			<h4 class="title">The Company<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/about.html">
						About Us</a>
				</li>
				
				
				
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a class="external-link" target="_blank" href="http://go.enterpriseholdings.com/search-jobs/">
						Careers<i class="icon icon-nav-external-link-green"></i><i class="icon icon-nav-external-link-white"></i>
						</a>
				</li>
				</ul>
		</div>
		<div class="nav-section">
			<h4 class="title">Inspiration<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/about/mobility-solutions.html">
						Total Mobility Solutions</a>
				</li>
				
				</ul>
		</div>
		<div class="nav-section">
			<h4 class="title">Loyalty<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/loyalty.html">
						Sign In if you're already member</a>
				</li>
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/enroll.html">
						Join Auto Authority ®</a>
				</li>
				</ul>
		</div>
		</div>
	<div class='promo' style='background-image:url(images/short/bg3.jpeg)'>
	</div>
</div></div>
</li>
	


    <!-- 3RD END -->
    
    
    
    <!-- 4TH -->
    
    <li tabindex="6" class="primary-item"><div class="megamenu megamenu-business"><div class="primary-nav-label">For Business</div>
<div class="primary-nav-content">
	<div class="menu cols-2">
		<div class="nav-section">
			<h4 class="title">Solutions for Business<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/business-car-rental.html">
						Auto Authority Business Rental Program</a>
				</li>
				
				</ul>
		</div>
		<div class="nav-section">
			<h4 class="title">Careers at Auto Authority<i class="icon icon-nav-carrot-white"></i></h4>
			<div class="nav-section-text"></div>
			<ul class="sub-menu">
				<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a class="external-link" target="_blank" href="http://www.efleets.com/">
						Apply Now<i class="icon icon-nav-external-link-green"></i><i class="icon icon-nav-external-link-white"></i>
						</a>
				</li>
				
				
				</ul>
		</div>
		</div>
        <div class='promo' style='background-image:url(images/short/bg4.jpeg)'>
	</div>
</div></div>
</li>

<!-- 4TH END -->


<!-- 5TH -->

<li tabindex="3" class="primary-item"><div class="megamenu megamenu-share">
<div class="primary-nav-label">Vehicles</div>
<div class="primary-nav-content">
	<div class="menu cols-2">
		<div class="nav-section">
			<h4 class="title">Vehicles On Rent<i class="icon icon-nav-carrot-white"></i></h4>
			<ul class="sub-menu">
			  <li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/carshare.html">
						Cars On Rent</a></li>
                
                
                
			<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/carshare.html">
						SUVs  On Rent</a>
				</li>
                
                
                <li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/carshare.html">
						Vans On Rent</a>
				</li>
				</ul>
		</div>
		<div class="nav-section">
			<h4 class="title">Vehicles For Sale<i class="icon icon-nav-carrot-white"></i></h4>
			<ul class="sub-menu">
			   <li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="SaleCars.php">
						Cars For Sale</a>
				</li>
                
                
                
			<li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/carshare.html">
						SUVs For Sale</a>
				</li>
                
                
                <li>
					<i class="icon icon-nav-carrot-white"></i>
					<a href="/en/carshare.html">
						Vans For Sale</a>
				</li>
				</ul>
		</div>
		</div>
	<div class='promo' style='background-image:url(images/eplus-signin-signup.jpeg)'>
	</div>
</div></div>
</li>

<!-- 5TH END -->




    </ul>
        </div>
</div>
    </div>

<!-- NAV END -->



</header>
