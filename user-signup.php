<?php
session_start();
include 'admin/myclass/connection.php';

if ($_POST) {

    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $txt5 = $_POST['txt5'];
    $txt6 = $_POST['txt6'];


    $sql = "INSERT INTO tbl_users (user_name,user_gender,user_email,user_password,user_mobileno,user_address)
        VALUES ( '$txt1','$txt2','$txt3','$txt4','$txt5','$txt6')";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Account created');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:43:33 GMT -->

<head>
    <meta charset="utf-8">
    <title>BOOK MY PG | SignUp</title>
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
                    <h1>Sign Up</h1>
                    <div class="bread-crumb"><a href="index.php">Home &nbsp; /</a> <i class="current">SignUp</i></div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- Register Section -->
        <section class="register-section">
            <div class="auto-container">

                <!-- Form Box -->
                <div class="form-box">
                    <div class="box-inner">
                        <h1>Sign Up</h1>

                        <!--Login Form-->
                        <div class="styled-form login-form">
                            <form method="post" id="myform" enctype="multipart/form-data">

                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-user"></span></span>
                                    <input type="text" id="name-input" name="txt1" placeholder="Enter  Name " title= "Enter valid name" pattern="_[a-zA-Z0-9]+"  class="form-control" class="required" required><!----pattern="^[A-Za-z -]+$"-->
                                </div>

                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-user"></span></span>
                                     <select name="txt2">
                                        <option>Male</option>
                                        <option>Female</option>
                                     </select>
                                </div>

                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                                    <input type="email" id="email-input" name="txt3" placeholder="Enter Your Email " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" class="required" required>

                                </div>

                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-unlock"></span></span>
                                    <input type="password" id="password-input" name="txt4" placeholder="Enter Password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="required" required minlength="8">
                                </div>

                                <div class="form-group">
                                    <span class="adon-icon"></span>
                                    <input type="text" id="number-input" name="txt5" placeholder="Enter Mobile No" class="form-control" pattern="[0-9]{10}" class="required" required>
                                </div>

                                <div class="form-group">
                                    <span class="adon-icon"><span class=""></span></span>
                                    <textarea name="txt6" id="textarea-input" rows="9" placeholder="Enter  Address" class="form-control" class="required" required></textarea>
                                </div>

                                <div class="clearfix">
                                    <div class="form-group pull-left">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>



                            </form>
                        </div>

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
                            <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
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
                <form method="post" enctype="multipart/form-data" id="myform">
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
    <script src="js/main.js"></script>

   
    <script src="mytools/jquery.validate.js"></script>
    <script type="text/javascript">
          $(document).ready(function(){
                $("#myform").validate();
            });
    </script>
     <style>
            .error{
                color:red;
            }
        </style>
</body>

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:43:33 GMT -->

</html>