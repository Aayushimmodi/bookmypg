<?php
session_start();
include 'admin/myclass/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/properties-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:53:32 GMT -->

<head>
	<meta charset="utf-8">
	<title>BOOK MY PG | PG List View</title>
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
					<h1>PG List View</h1>
					<div class="bread-crumb"><a href="index.php">Home &nbsp; /</a> <i class="current">View PG's</i></div>
				</div>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- Sidebar Page Container -->
		<div class="sidebar-page-container">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Content Side-->
					<div class="content-side col-lg-8 col-md-12 col-sm-12">
						<div class="properties-list">

							<?php



							if (isset($_GET['cid'])) {
								$cid = $_GET['cid'];
								$q = mysqli_query($connection, "SELECT * FROM `tbl_pgmaster` where category_id  ='{$cid}'  ");
							} else if (isset($_GET['search'])) {
								$search = $_GET['search'];
								$q = mysqli_query($connection, "SELECT * FROM `tbl_pgmaster` where pg_name like '%{$search}%'  ");
							}else {
								$q = mysqli_query($connection, "SELECT * FROM `tbl_pgmaster`  ");
							}
							while ($row = mysqli_fetch_array($q)) {
							?>

								<!-- Property Block -->
								<div class="property-block-two style-two">
									<div class="inner-box">
										<div class="clearfix">
											<div class="image-box col-lg-5 col-md-5 col-sm-12">
												<figure class="image"><img style="width:380px;height:250px;" src="admin/uploads/<?php echo $row['pg_photos'] ?>" alt=""></figure>


											</div>
											<div class="lower-content col-lg-7 col-md-7 col-sm-12">
												<ul class="tags">
													<li><a href="pg-details.php?id=<?php echo $row['pg_id'] ?>">PG</a>,</li>

												</ul>
												<h5><a href="pg-details.php?id=<?php echo $row['pg_id'] ?>"><?php echo $row['pg_name'] ?>.</a></h5>
												<div class="lucation"><i class="la la-map-marker"></i><?php echo $row['pg_address'] ?></div>
												<!--<ul class="property-info clearfix">
													<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
													<li><i class="flaticon-bed"></i> 1 Bedrooms</li>

												</ul>-->
												<div class="text"></div>
												<div class="property-price clearfix">
													<div class="read-more"><a href="pg-details.php?id=<?php echo $row['pg_id'] ?>" class="theme-btn">More Detail</a></div>
													<div class="price">Rs.<?php echo $row['pg_amount'] ?></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
							<!-- Property Block
						<div class="property-block-two style-two">
							<div class="inner-box">
								<div class="clearfix">
									<div class="image-box col-lg-5 col-md-5 col-sm-12">
										<figure class="image"><img src="images/resource/property-4.jpg" alt=""></figure>
										<span class="for">FOR SALE</span>
										<span class="featured">FEATURED</span>
									</div>
									<div class="lower-content col-lg-7 col-md-7 col-sm-12">
										<ul class="tags">
											<li><a href="properties-detail.html">Apartment</a>,</li>
											<li><a href="properties-detail.html">Bar</a>,</li>
											<li><a href="properties-detail.html">House</a></li>
										</ul>
										<h5><a href="properties-detail.html">Single Flat Burj Al-Arab.</a></h5>
										<div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 785, Chicago, USA</div>
										<ul class="property-info clearfix">
											<li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
											<li><i class="flaticon-bed"></i> 1 Bedrooms</li>
											<li><i class="flaticon-garage-1"></i> 1 Garage</li>
											<li><i class="flaticon-toilet"></i> 2 Bathroom</li>
										</ul>
										<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</div>
										<div class="property-price clearfix">
											<div class="read-more"><a href="properties-detail.html" class="theme-btn">More Detail</a></div>
											<div class="price">$ 14,95,000</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						 -->


						</div>
					</div>

					<!--Sidebar Side-->
					<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar sticky-top">

							<!-- Search -->
							<div class="sidebar-widget search-box">
							<div class="sidebar-title">
									<h4>Search</h4>
								</div>
								<form method="get" action="pg-list.php">
									<div class="form-group">
										<input type="search" name="search" value="" placeholder="Now search" required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>

							<!--Category Widget-->
							<div class="sidebar-widget categories-widget">
								<div class="sidebar-title">
									<h4>Categories</h4>
								</div>
								<ul class="cat-list">

									<?php
									$qq = mysqli_query($connection, "select * from tbl_category");
									while ($row = mysqli_fetch_array($qq)) {
										echo "<li class='clearfix'><a href='?cid={$row['category_id']}'>{$row['category_name']} <span></span></a></li>";
									}

									?>


								</ul>
							</div>
							<!--End Category Widget-->




							<!-- Social Widget -->
							<div class="sidebar-widget sidebar-social-widget">
								<div class="sidebar-title">
									<h4>Follow Us</h4>
								</div>
								<ul class="social-icon-two">
									<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="#"><span class="fab fa-twitter"></span></a></li>

									<li class="linkedin"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>

									<li class="instagram"><a href="#"><span class="fab fa-instagram"></span></a></li>

								</ul>
							</div>
							<!-- End Social Widget -->

						</aside>
					</div>

				</div>
			</div>
		</div>

		<!--Newsleter Section-->
		<section class="newsletter-section" style="background-image:url(images/background/1.jpg)">
			<div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix">

						<!--Title Column-->
						<div class="title-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="icon-box">
									<span class="icon flaticon-door-knob"></span>
								</div>
								<h4>Newsletter Subscription</h4>
								<div class="title">Get latest news & updates</div>
							</div>
						</div>

						<!--Form Column-->
						<div class="form-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column">

								<!--Subscribe Form-->
								<div class="subscribe-form">
									<form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/contact.html">
										<div class="form-group">
											<input type="email" name="email" value="" placeholder="Email Address" required>
											<button type="submit" class="submit-btn">Submit Now</button>
										</div>
									</form>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!--End Newsleter Section-->

		<!--Main Footer-->
		<?php

		include './themepart/footer.php';
		?>

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



	<!--Scroll to top-->
	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/dropzone.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/script.js"></script>
	<script src="js/color-settings.js"></script>

</body>

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/properties-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:53:35 GMT -->

</html>