<?php
        session_start();
        require './vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        $connection=new mysqli("localhost","root","","bookmypg");

        if($_POST)
        {
            $email = $_POST['email'];

            $selectquery = mysqli_query($connection,"select * from tbl_users where user_email='{$email}'")or die(mysqli_error($connection));

            $count= mysqli_num_rows($selectquery);
            $row=mysqli_fetch_array($selectquery);
            if($count>0)
            {
                    //Load Composer's autoloader
                    require './vendor/autoload.php';

                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'arrayofsilicon@gmail.com';                     //SMTP username
                    $mail->Password   = 'inkriqgoyvbzgkqf';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('myproject1257@gmail.com', 'Book-My-PG');
                    // $mail->addAddress('meet7359137@gmail.com', 'rudra');     //Add a recipient
                    $mail->addAddress($email,$email);     //Add a recipient
                    // $mail->addAddress('ellen@example.com');               //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');

                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Password Recovery';
                    $mail->Body    = "Hi,  $email is your password is {$row['user_password']}";
                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $_SESSION['mail_sent'] = false;
                    if(!$mail->Send()) {
                        $_SESSION['mail_sent'] = false;
                    } else {
                        $_SESSION['mail_sent'] = true;
                    }   

                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
        }
        else
        {
            echo '<script>USER NOT FOUND</script>';
        }

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:43:31 GMT -->

<head>
    <meta charset="utf-8">
    <title>BOOK MY PG | Login</title>
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


        <!-- End Main Header -->

        <!-- Page Title -->
        <section class="page-title" style="background-image:url(images/background/2.jpg);">
            <div class="auto-container">
                <div class="inner-box">
                    <h1>Login</h1>
                    <div class="bread-crumb"><a href="index.php">Home &nbsp; /</a> <i class="current">Login</i></div>
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
                        <h1>Recover Password</h1>

                        <!--Login Form-->
                        <div class="styled-form login-form">
                            <form method="post" enctype="multipart/form-data" id="myform">
                                <!-- <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Your Name *">
                            </div> -->
                                <div class="form-group" method="post">
                                    <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                                    <input type="email" name="email" required placeholder="Emai Address*">
                                </div>

                               

                                <div class="clearfix">
                                    <div class="form-group pull-left">
                                        <button type="submit" class="theme-btn btn-style-two" name="submit"><span class="txt">Submit</span></button>
                                    </div>
                                    
                                </div>

                                <div class="clearfix">
                                    <div class="pull-left">
                                         <a href="user-login.php">Switch to Login.</a><br/>
                                         
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Register Section -->




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
                <form method="post" action="/user_theme/index.php">
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

<!-- Mirrored from ary-themes.com/html/noor_tech/dream-property/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 10:43:33 GMT -->

</html>