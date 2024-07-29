<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require 'admin/myclass/connection.php';
$user_id = $_SESSION['user_id'];
$pgid = $_GET['pgid'];
if (!isset($_SESSION['user_id'])) {
    header("location:user-login.php");
}

if (!isset($_GET['pgid'])) {
    header("location:pg-list.php");
}

$qq = mysqli_query($connection, "select * from tbl_pgmaster where pg_id ='{$pgid}'");
$data1 = mysqli_fetch_array($qq);
if (isset($_POST['btn'])) {


    $booking_name = $_POST['booking_name'];
    $booking_dates = date("Y-m-d");
    $pg_id = $_GET['pgid'];
    $user_id = $_SESSION['user_id'];
    $booking_details = $_POST['booking_details'];
    $booking_status = "Confirmed";
    $booking_amount = $_POST['booking_amount'];
    $paymentoption = $_POST['paymentoption'];

    $pgName = "Select * from tbl_pgmaster where pg_id=$pg_id";
    $pgResult = $connection->query($pgName);
    $pg_name = mysqli_fetch_assoc($pgResult);

    $sql = "INSERT INTO tbl_booking (booking_name,booking_dates,pg_id,user_id,booking_details,booking_status,booking_amount)
        VALUES ( '$booking_name','$booking_dates','$pg_id','$user_id','$booking_details','$booking_status','$booking_amount')";

    $connection->query($sql);

    $pg_name = $pg_name['pg_name'];
    $mail_sql = "Select * from tbl_users where user_id=$user_id";
    $user_mail_result = $connection->query($mail_sql);
    $user_mail = mysqli_fetch_assoc($user_mail_result);
    $uemail = $user_mail['user_email'];
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->IsHTML(true);
   
    $mail->Username = 'arrayofsilicon@gmail.com';   
    $mail->Password = 'inkriqgoyvbzgkqf';
    $mail->setFrom('arrayofsilicon@gmail.com', 'Book-My-PG');
    $mail->addReplyTo('meet7359137@gmail.com', 'Book-My-PG');

    // $mail->Username = 'arrayofsilicon@gmail.com';   
    // $mail->Password = 'inkriqgoyvbzgkqf';
    // $mail->setFrom('arrayofsilicon@gmail.com', 'Book-My-PG');
    // $mail->addReplyTo('arrayofsilicon@gmail.com', 'Book-My-PG');
    $mail->addAddress($uemail, $user_mail['user_name']);
    $mail->Subject = "About Booking PG at $booking_details";
    $mail->Body = "Congratulations your Booking for PG-$pg_name_name is Confirmed, Total Amount is $booking_amount";
    $mail->send();

    $qqq =  mysqli_query($connection, "insert into tbl_payment(amount,pg_id,status,method,transaction_id,date)values('{$booking_amount}','{$pg_id}','Confirmed','{$paymentoption}','{$pg_id}','{$booking_dates}')");

    if ($qqq) {
        echo "<script>alert('Thanks for Sharing Details');window.location='booking-view.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:53:32 GMT -->

<head>
    <meta charset="utf-8">
    <title>BOOK MY PG | Submit Booking Details </title>
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
                    <h1>Submit Booking Details</h1>
                    <div class="bread-crumb"><a href="index.php">Home &nbsp; /</a> <i class="current">Submit Booking Details</i></div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- Submit Property Section -->
        <section class="submit-property-section">
            <div class="auto-container">

                <!-- Submit Property Header -->
                <div class="submit-property-header-section">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <h1>Submit Booking Details</h1>
                        </div>
                        <!-- Column -->

                    </div>
                </div>

                <!-- Submit Property Section -->
                <div class="dashboard-property-section">
                    <h2>Basic Information</h2>

                    <!-- Property Search Form -->
                    <div class="property-search-form">
                        <form method="post" enctype="multipart/form-data" class="form-horizontal" id="myform">

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="name-input" class=" form-control-label">Booking_Name</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <input type="text" id="name-input" name="booking_name" title="Enter Booking Name" class="form-control" pattern="^[A-Za-z -]+$" class="required" required>
                                </div>
                            </div>






                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Booking_Details</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <textarea name="booking_details" id="details-input" rows="9" placeholder="Content..." class="form-control" class="required" required></textarea>
                                </div>
                            </div>



                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Booking_Amount</label>
                                </div>

                                <div class="col-12 col-md-12">
                                    <input type="text" value="<?php echo $data1['pg_amount'] ?>" readonly id="amount-input" name="booking_amount" title="Enter the amount " class="form-control" class="required" required>

                                </div>
                            </div>


                            <h2>Payment Information</h2>

                            <input type="radio" id="pcash" value="Cash" checked name="paymentoption" /> <b>Cash</b>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" id="pupi" value="UPI" name="paymentoption" /> <b>UPI</b>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" id="pcard" value="Card" name="paymentoption" /> <b>CreditCart / Debitcart</b>
                            <div class="icon-container" style="margin-left: 190px;">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>


                            <div id="upiimg">
                                <img src="mytools/upi.jpg" style="width:100px;height:100px;">
                                Either Scan Image or Enter UPI No
                            </div>
                            <div class="form-group" id="upitxt">
                                <label for="">UPI<span>*</span></label>
                                <input class="form-control" type="varchar" name="txt1" placeholder="Name">
                            </div>

                            <div class="form-group" id="txt1">

                                <label for="">Name<span>*</span></label>
                                <input class="form-control" type="varchar" name="txt1" placeholder="Name">
                            </div>
                            <div class="form-group" id="txt2">
                                <label for="">Card No<span>*</span></label>
                                <input class="form-control" type="number" name="txt2" placeholder="4134 - 1024 - 3640">
                            </div>
                            <div class="form-group" id="txt3">
                                <label for="">CVV<span>*</span></label>
                                <input class="form-control" type="number" name="txt3" placeholder="Card No">
                            </div>









                            <div class="row form-group">

                                <br><br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm" name="btn">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button><br>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>

                        </form>
                    </div>

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


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $("input[name='paymentoption']").click(function() {
                if ($("#pcard").is(":checked")) {
                    $("#txt1").show();
                    $("#txt2").show();
                    $("#txt3").show();
                    $("#upitxt").hide();
                    $("#upiimg").hide();
                } else if ($("#pupi").is(":checked")) {

                    $("#txt1").hide();
                    $("#txt2").hide();
                    $("#txt3").hide();
                    $("#upitxt").show();
                    $("#upiimg").show();
                } else {
                    $("#txt1").hide();
                    $("#txt2").hide();
                    $("#txt3").hide();
                    $("#upitxt").hide();
                    $("#upiimg").hide();
                }
            });
        });

        $(document).ready(function() {
            $("#txt1").hide();
            $("#txt2").hide();
            $("#txt3").hide();
            $("#upitxt").hide();
            $("#upiimg").hide();
        });
    </script>


</body>

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:53:32 GMT -->

</html>