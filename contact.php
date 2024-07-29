<?php
session_start();
include 'admin/myclass/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:57:20 GMT -->
<head>
<meta charset="utf-8">
<title>BOOK MY PG | Contact us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

   <?php
                include './themepart/header.php';
   ?>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>Contact us</h1>
                <div class="bread-crumb"><a href="index.php">Home &nbsp; /</a> <i class="current">Contact</i></div>
            </div>
        </div>
    </section>
	<!-- End Page Title -->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="sec-title">
							<h1>Contact Us</h1>
							<div class="separator"></div>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
							<form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/sendemail.php" id="contact-form">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Name " required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="Email " required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="subject" placeholder="Subject " required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="phone" placeholder="Phone " required>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="Message "></textarea>
									</div>
								
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Send Now</span></button>
									</div>
									
								</div>
							</form>
								
						</div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="sec-title">
							<h1>Contact information</h1>
							<div class="separator"></div>
						</div>
						
						<div class="content-boxed">
							<div class="text">For any kind of query, contact us with the details below.</div>
							<ul>
								<li><span class="icon fa fa-phone"></span><a href="tel:000-000-000-00">+91 9724344887</a></li>
								<li><span class="icon fa fa-envelope"></span><a href="mailto:info@Dream Property">bookmypg.aayushi@gmail.com</a></li>
								<!-- <li><span class="icon fa fa-map-marker"></span>#59, East Madison Ave, Melbourne Australia</li>
								<li><span class="icon fa fa-clock"></span>Opening Hours : Monday - Satureday   9:00 am  to  5pm</li> -->
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Faq Section -->
	
 
	
	<!--Clients Section-->
    <section class="clients-section" style="background-image: url(images/background/1.jpg)">
        <div class="outer-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Clients Section-->
	
	<!--Main Footer-->
   <?php
            include './themepart/footer.php';
   ?>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
 

<!-- Color Palate / Color Switcher -->
<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:57:22 GMT -->
</html>