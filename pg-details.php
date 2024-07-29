<?php
session_start();
include 'admin/myclass/connection.php';

$id = $_GET['id'];
$q = mysqli_query($connection,"SELECT * FROM `tbl_pgmaster` where pg_id  ='{$id}'  ");
$data = mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/properties-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:54:25 GMT -->
<head>
<meta charset="utf-8">
<title>BOOK MY PG | Properties Detail View</title>
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
                <h1>PG  Detail</h1>
                <div class="bread-crumb"><a href="index.php">Home &nbsp; /</a> <i class="current">PG</i></div>
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
					<div class="properties-detail">
						<div class="inner-box">
							<h1><?php echo $data['pg_name']; ?></h1>
							<div class="location"><?php echo $data['pg_address']; ?></div>
							<!-- Property List -->
							<ul class="property-list">
								<li>PG Number : <?php echo $data['pg_id']; ?></li>
								<li>Price Montly  : <?php echo $data['pg_amount']; ?></li>
								 
								<li><a href="booking-add.php?pgid=<?php echo $data['pg_id']; ?>">Book Now</a></li>
							</ul>
							
							
							<!-- Property Detail Box -->
							<div class="property-detail-box">
								<h2>PG Details.</h2>
								<div class="text">
								
								 
							 
									<p><?php echo $data['pg_details']; ?></p></div>
							<!-- Property Gallery Box -->
							<div class="property-gallery-box">
								
								<div class="carousel-outer">
									<ul class="image-carousel owl-carousel owl-theme">

									<?php 

										$qq = mysqli_query($connection,"select * from  tbl_pgphotos where pg_id = '{$id}'  ");

										while($pdata = mysqli_fetch_array($qq))
										{
											?>


<li><a href="admin/uploads/<?php echo $pdata['photo_path'] ?>" class="lightbox-image" title="Image Caption Here "><img src="admin/uploads/<?php echo $pdata['photo_path'] ?>" alt=""></a></li>

<?php
										}
									?>

								
										
									</ul>
									
									<ul class="thumbs-carousel owl-carousel owl-theme">

									<?php 

$qq = mysqli_query($connection,"select * from  tbl_pgphotos where pg_id = '{$id}'  ");

while($pdata = mysqli_fetch_array($qq))
{
	?>
<li class="thumb-box">
											<figure><img src="admin/uploads/<?php echo $pdata['photo_path'] ?>" alt=""></figure>
											<div class="overlay"><span class="icon flaticon-dimension"></span></div>
										</li>									
<?php
}
?>
										
										
										
									</ul>
								</div>
							
							</div>
							
								
								<!-- Property Featured Box 
								<div class="property-featured-box">
									<h3>Properties Features.</h3>
									<div class="row clearfix">
										
										<!-- Column 
										<div class="column col-lg-4 col-md-4 col-sm-12">
											<ul class="list-style-one">
												<li>Modern Lawn</li>
												<li>Modern Kitchen</li>
												<li>Modern Balcony</li>
												<li>Gym Room</li>
												<li>Servents Room</li>
											</ul>
										</div>
										
										<!-- Column 
										<div class="column col-lg-4 col-md-4 col-sm-12">
											<ul class="list-style-one">
												<li>Fire Alarm Available</li>
												<li>Swimming Pool</li>
												<li>Modern Laundry</li>
												<li>Pets Box</li>
												<li>4 Cars Space</li>
											</ul>
										</div>
										
										<!-- Column 
										<div class="column col-lg-4 col-md-4 col-sm-12">
											<ul class="list-style-one">
												<li>New drawing Room</li>
												<li>Games Room</li>
												<li>Elevator Available</li>
												<li>Beautiful Gardens</li>
												<li>Basketball court</li>
											</ul>
										</div>
										
									</div>
								</div>
								
								 
								
								<!--Accordian Box-->
							 
								
							 
							</div>
							
						</div>
					
						<!--Comments Area
						<div class="comments-area">
							<div class="group-title">
								<h2>2 Comments</h2>
							</div>
							
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
									<div class="comment-info clearfix"><strong>Micheal yard</strong><div class="comment-time">13 June, 2019      at 07:30</div></div>
									<div class="text">Lorem ipsum dolor sit amet, consectetuer a the adipiscing elit. Aenean commodo ligulai dolor Aenean massa ligulai dolor Aenean massa ligulai dolor Aenean massa.</div>
									<a class="theme-btn reply-btn" href="#">Reply</a>
								</div>
							</div>
							
							<div class="comment-box reply-comment">
								<div class="comment">
									<div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
									<div class="comment-info clearfix"><strong>Adam Gilgrist</strong><div class="comment-time">13 June, 2019      at 07:30</div></div>
									<div class="text">Lorem ipsum dolor sit amet, consectetuer a the adipiscing elit. Aenean commodo ligulai dolor Aenean.</div>
									<a class="theme-btn reply-btn" href="#">Reply</a>
								</div>
							</div>
							
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb"><img src="images/resource/author-3.jpg" alt=""></div>
									<div class="comment-info clearfix"><strong>Pollard Micheal</strong><div class="comment-time">13 June, 2019      at 07:30</div></div>
									<div class="text">Lorem ipsum dolor sit amet, consectetuer a the adipiscing elit. Aenean commodo ligulai dolor Aenean massa ligulai dolor Aenean massa ligulai dolor Aenean massa.</div>
									<a class="theme-btn reply-btn" href="#">Reply</a>
								</div>
							</div>
							
						</div>-->
						
						<!-- Comment Form -->
						<div class="comment-form">
								
							
							
							<!--Comment Form
							<div class="group-title"><h2>Leave A Comment</h2></div>
							<form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/blog.html">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Full Name" required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="Email" required>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<input type="text" name="subject" placeholder="Subject" required>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="darma" name="message" placeholder="Your Message"></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">SEND MESSAGE</span></button>
									</div>
									
								</div>
							</form>-->
								
						</div>
						<!--End Comment Form -->
						
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
                                <form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/contact.php">
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
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
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
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCmVhK5ZjYRjzAe-e9ZKS1mA3NBPuViwQ"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/properties-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:55:15 GMT -->
</html>