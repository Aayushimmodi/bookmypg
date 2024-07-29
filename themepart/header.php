 <header class="main-header header-style-three">

 	<!-- Header Upper -->
 	<div class="header-upper">
 		<div class="inner-container clearfix">

 			<!--Info-->
 			<div class="logo-outer">
 				<div class="logo"><a href="index.php"><img src="images/logo-3.png" alt="" title=""></a></div>
 			</div>

 			<!--Nav Box-->
 			<div class="nav-outer clearfix">
 				<!--Mobile Navigation Toggler For Mobile-->
 				<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
 				<nav class="main-menu navbar-expand-md navbar-light">
 					<div class="navbar-header">
 						<!-- Togg le Button -->
 						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 							<span class="icon flaticon-menu"></span>
 						</button>
 					</div>

 					<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
 						<ul class="navigation clearfix">
 							<li><a href="index.php"><span data-hover="Home">Home</span></a>
 							</li>
 							<li><a href="about.php"><span data-hover="About us">About us</span></a>
 							</li>
 							<li><a href="pg-list.php"><span data-hover="PG">PG</span></a>
 							</li>

 							<li class="dropdown"><a href="pg-list.php"><span data-hover="Search">Search</span></a>
 								<ul>

 									<?php
										require_once './admin/myclass/connection.php';
										$qq = mysqli_query($connection, "select * from tbl_category");
										while ($ddata = mysqli_fetch_array($qq)) {
											echo "<li><a href='pg-list.php?cid={$ddata['category_id']}'>{$ddata['category_name']}</a></li>";
										}

										?>

 									 
 								</ul>
 							</li>
 							<?php

								if (isset($_SESSION['user_id'])) {
								?>
 								<li class="dropdown"><a href="#"><span data-hover="Hi,<?php echo $_SESSION['user_name'] ?>">Hi,<?php echo $_SESSION['user_name'] ?></span></a>
 									<ul>
 										
 										
 										
 										 
 										<li><a href="booking-view.php">Booking View</a></li>
										<li><a href="feedback-give.php">Feedback Share</a></li>
 										<li><a href="feedback-view.php">Feedback View</a></li>
 										<li><a href="change-password.php">Change Password</a></li>
 										<li><a href="logout.php">Logout</a></li>
 									</ul>
 								</li>
 							<?php
								}else{
									?>
<li><a href="user-login.php"><span data-hover="Login">Login</span></a></li>
									<?php
								}
								?>


 							<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
 						</ul>
 					</div>
 				</nav>


 				<!-- Main Menu End-->

 				<!-- Main Menu End
 				<div class="outer-box clearfix">

 					<!-- Social Box  

 					<!-- Search Btn  
 					<div class="search-box-btn"><span class="icon flaticon-search"></span></div>

 					<!-- Main Menu End- 
 					<div class="nav-box">
 						<div class="nav-btn nav-toggler navSidebar-button"><span class="icon flaticon-menu-1"></span></div>
 					</div>

 				</div>-->
 			</div>

 		</div>
 	</div>
 	<!--End Header Upper-->

 	<!--Sticky Header-->
 	<div class="sticky-header">
 		<div class="auto-container clearfix">
 			<!--Logo-->
 			<div class="logo pull-left">
 				<a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
 			</div>

 			<!--Right Col-->
 			<div class="right-col pull-right">
 				<!-- Main Menu -->
 				<nav class="main-menu navbar-expand-md">
 					<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
 						<ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
 					</div>
 				</nav><!-- Main Menu End-->
 			</div>

 		</div>
 	</div>
 	<!--End Sticky Header-->

 	<!-- Mobile Menu  -->
 	<div class="mobile-menu">
 		<div class="menu-backdrop"></div>
 		<div class="close-btn"><span class="icon far fa-window-close"></span></div>

 		<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
 		<nav class="menu-box">
 			<div class="nav-logo"><a href="index.php"><img src="images/nav-logo.png" alt="" title=""></a></div>

 			<ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
 		</nav>
 	</div><!-- End Mobile Menu -->

 </header>