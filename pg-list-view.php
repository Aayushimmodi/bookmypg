<?php
session_start();
require 'admin/myclass/connection.php';

$q = "select * from tbl_pgmaster";

$result = $connection->query($q);
//$connection->close();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:43:31 GMT -->
<head>
<meta charset="utf-8">
<title>BOOK MY PG | Booking Details</title>
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
            include  './themepart/header.php';
   ?>
    <!-- End Main Header -->
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>View Feedback</h1>
                <div class="bread-crumb"><a href="index.php">Home &nbsp; /</a> <i class="current">Feedback</i></div>
            </div>
        </div>
    </section>
    <section class="cart-section">
        <div class="auto-container">

            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                                            <tr>
                                                <th>Pg Id</th>
                                                <th>Pg Name</th>
                                                <th>Pg Details</th>
                                                <th>Pg AreaId</th>
                                                <th>Pg Address</th>
                                                <th>Pg Photos</th>
                                                <th>Pg Amount</th>
                                                <th>Category Id</th>
                                                <th>Owner Id</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>
                                                    <td>".$row['pg_id']."</td>
                                                    <td>".$row['pg_name']."</td>
                                                    <td>".$row['pg_details']."</td>
                                                    <td>".$row['pg_areaid']."</td>
                                                    <td>".$row['pg_address']."</td>
                                                    <td><img src='uploads/{$row['pg_photos']}' width='70px'></td>
                                                    <td>".$row['pg_amount']."</td>
                                                    <td>".$row['category_id']."</td>
                                                    <td>".$row['owner_id']."</td>
                                                </tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
					<!--Login Form-->
                 
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Register Section -->
	
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
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post"   action = "/user_theme/index.php" >
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
<script src="js/parallax.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:43:33 GMT -->
</html>