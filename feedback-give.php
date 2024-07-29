<?php
session_start();
require 'admin/myclass/connection.php';

if (isset($_POST['btn'])) {

    $description = $_POST['description'];
    $date =date('Y-m-d');
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO tbl_feedback(description,date,user_id)
        VALUES ('$description','$date','$user_id')";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Thanks for Sharing Feedback');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:53:32 GMT -->

<head>
    <meta charset="utf-8">
    <title>BOOK MY PG  | Submit Feedback</title>
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
                    <h1>Submit Feedback Details</h1>
                    <div class="bread-crumb"><a href="index.php">Home &nbsp; /</a> <i class="current">Submit Feedback Details</i></div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- Submit Property Section -->
        <section class="submit-property-section">
            <div class="auto-container">

                <!-- Submit Property Header -->
               

                <!-- Submit Property Section -->
                <div class="dashboard-property-section">
                    <h2>Share Feedback</h2>

                    <div class="property-search-form">
                        <form method="post" enctype="multipart/form-data" class="form-horizontal" id="myform">

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <textarea name="description" id="textarea-input1" rows="9" placeholder="Content..." title="write here Description" class="form-control" pattern="^[A-Za-z -]+$" class="required" required></textarea>
                                </div>
                            </div>
 
                             


                            <div class="row form-group">

                                <br><br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm" name="btn">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button><br>
                                     
                                </div>

                        </form>
                    </div>
                </div>
        </section>
        <!-- End Submit Property Section -->

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
                <form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/index.php">
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

    <!-- Color Palate / Color Switcher -->


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
    <script src="js/main.js"></script>
    <script src="jquery-3.1.1.js" ></script>
         <script src="jquery.validate.js" ></script>
         <script>
                       $(document).ready(function(){
                                 $("#myform").validate();
                       });
                </script>
                <style>
                        .error{
                                color : red;
                        }
                        </style>
</body>

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:53:32 GMT -->

</html>