<?php
session_start();
include 'admin/myclass/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:49:09 GMT -->

<head>
	<meta charset="utf-8">
	<title>BOOK MY PG | Home</title>
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

		<!--Page Title-->
		<section class="video-banner-section">
			<!--Video-->
			<video class="bg-video" preload="auto" autoplay loop muted>
				<source src="videos/video-banner.webm" type="video/webm" />
				<source src="videos/video-banner.mp4" type="video/mp4" />
				<h3>This browser does not happen to support video</h3>
			</video>
			<div class="auto-container">
				<div class="inner-container">
					<h1 class="variable-text"></h1>
					<div class="text"> </div>
					<a href="contact.php" class="theme-btn btn-style-two"><span class="txt">Contact Now</span></a>
				</div>
			</div>
		</section>
		<!--End Page Title-->

		<!-- Property Section Two -->


		<!-- End Fluid Section One -->

		<!-- Counter Section -->
		<section class="counter-section-two">
			<div class="auto-container">

				<!-- Fact Counter -->
				<div class="fact-counter-two">
					<div class="row clearfix">

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="2500" data-stop="100">0</span>
									</div>
									<h5 class="counter-title">Satisfied Clients</h5>
								</div>
							</div>
						</div>

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box alternate">
										<span class="count-text" data-speed="3000" data-stop="50">0</span>+
									</div>
									<h5 class="counter-title">Agents Team</h5>
								</div>
							</div>
						</div>

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3000" data-stop="100">0</span>
									</div>
									<h5 class="counter-title">Success Mission</h5>
								</div>
							</div>
						</div>

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="2500" data-stop="10">0</span>
									</div>
									<h5 class="counter-title">Awards</h5>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- End Counter Section -->

		<!-- Gallery Section -->
		<section class="gallery-section alternate">
			<div class="auto-container">
				<!--Sec Title-->
				<div class="sec-title centered">
					<h1>Book My PG Gallery</h1>
					<div class="separator"></div>
				</div>
			</div>

			<div class="gallery-carousel owl-carousel owl-theme">

				<!-- Project item -->
				<div class="gallery-item">
					<div class="image-box">
						<figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
						<div class="overlay-box">
							<div class="icon-box">
								<a href="#" class="link"><span class="icon fa flaticon-unlink"></span></a>
								<a href="images/gallery/1.jpg" class="link" data-fancybox="gallery-two" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
								<h3><a href="properties-detail.html">France Property</a></h3>
							</div>
						</div>
					</div>
				</div>

				<!-- Project item -->
				<div class="gallery-item">
					<div class="image-box">
						<figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
						<div class="overlay-box">
							<div class="icon-box">
								<a href="#" class="link"><span class="icon fa flaticon-unlink"></span></a>
								<a href="images/gallery/2.jpg" class="link" data-fancybox="gallery-two" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
								<h3><a href="#">France Property</a></h3>
							</div>
						</div>
					</div>
				</div>

				<!-- Project item -->
				<div class="gallery-item">
					<div class="image-box">
						<figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
						<div class="overlay-box">
							<div class="icon-box">
								<a href="#" class="link"><span class="icon fa flaticon-unlink"></span></a>
								<a href="images/gallery/3.jpg" class="link" data-fancybox="gallery-two" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
								<h3><a href="#">France Property</a></h3>
							</div>
						</div>
					</div>
				</div>

				<!-- Project item -->
				<div class="gallery-item">
					<div class="image-box">
						<figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
						<div class="overlay-box">
							<div class="icon-box">
								<a href="#" class="link"><span class="icon fa flaticon-unlink"></span></a>
								<a href="images/gallery/4.jpg" class="link" data-fancybox="gallery-two" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
								<h3><a href="#">France Property</a></h3>
							</div>
						</div>
					</div>
				</div>

				<!-- Project item -->
				<div class="gallery-item">
					<div class="image-box">
						<figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
						<div class="overlay-box">
							<div class="icon-box">
								<a href="#" class="link"><span class="icon fa flaticon-unlink"></span></a>
								<a href="images/gallery/5.jpg" class="link" data-fancybox="gallery-two" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
								<h3><a href="#">France Property</a></h3>
							</div>
						</div>
					</div>
				</div>

				<!-- Project item -->
				<div class="gallery-item">
					<div class="image-box">
						<figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
						<div class="overlay-box">
							<div class="icon-box">
								<a href="#" class="link"><span class="icon fa flaticon-unlink"></span></a>
								<a href="images/gallery/7.jpg" class="link" data-fancybox="gallery-two" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
								<h3><a href="#">France Property</a></h3>
							</div>
						</div>
					</div>
				</div>

				<!-- Project item -->
				<div class="gallery-item">
					<div class="image-box">
						<figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
						<div class="overlay-box">
							<div class="icon-box">
								<a href="#" class="link"><span class="icon fa flaticon-unlink"></span></a>
								<a href="images/gallery/8.jpg" class="link" data-fancybox="gallery-two" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
								<h3><a href="#">France Property</a></h3>
							</div>
						</div>
					</div>
				</div>



			</div>
		</section>
		<!-- End Gallery Section -->


		<!-- End Faq Action -->



		<!-- End Recent Properties Section -->

		<!-- Call To Action -->
		<section class="call-to-action">
			<div class="auto-container">
				<div class="sec-title light centered">
					<h1>Make Appointment Now</h1>
					<div class="separator"></div>
				</div>
				<span class="number"><a href="tel:999-000-9999">999 000 9999</a></span>
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam.</div>
				<div class="btn-box"><a href="contact.php" class="theme-btn btn-style-three"><span class="txt">Appointment</span></a></div>
			</div>
		</section>
		<!--End Call To Action -->

		<!--Clients Section-->
		<section class="clients-section" style="background-image: url(images/background/1.jpg)">
			<div class="outer-container">

				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
						</li>
					</ul>
				</div>

			</div>
		</section>
		<!--End Clients Section-->

		<!-- Footer Style Three -->
		<?php
		include './themepart/footer.php';
		?>
		<!-- End Footer Style Three -->

	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

	<!--Search Popup-->
	<div id="search-popup" class="search-popup">
		<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
		<div class="popup-inner">
			<div class="overlay-layer"></div>
			<div class="search-form">
				<form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/index.html">
					<div class="form-group">
						<fieldset>
							<input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
							<input type="submit" value="Search Now!" class="theme-btn">
						</fieldset>
					</div>
				</form>

				<br>
				<h3>Recent Search Keywords</h3>
				<ul class="recent-searches">
					<li><a href="#">Business</a></li>
					<li><a href="#">Appartment</a></li>
					<li><a href="#">Flat</a></li>
					<li><a href="#">Commercial</a></li>
					<li><a href="#">Villa</a></li>
				</ul>

			</div>

		</div>
	</div>

	<!-- sidebar cart item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">

					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.php"><img src="images/pg_logo.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
								<a href="contact.php" class="theme-btn btn-style-two"><span class="txt">Contact Us</span></a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-two">
									
									<li><span class="icon flaticon-telephone"></span>+91 92773451223</li>
									<li><span class="icon flaticon-message-1"></span>bookmypg@gmail.com</li>
								
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
								<li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
								<li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
								<li class="youtube"><a href="#" class="fab fa-youtube"></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->

	<!-- Color Palate / Color Switcher -->
	

	<!--Scroll to top-->
	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/typeit.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/jquery.paroller.min.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/nav-tool.js"></script>
	<script src="js/dropzone.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/script.js"></script>
	<script src="js/color-settings.js"></script>

</body>

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:51:03 GMT -->

</html>