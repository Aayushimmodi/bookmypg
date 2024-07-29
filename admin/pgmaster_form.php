<?php
session_start();
include 'myclass/connection.php';

if (isset($_POST['btn'])) {
    $pg_name = $_POST['pg_name'];
    $pg_details = $_POST['pg_details'];
    $pg_areaid = $_POST['pg_areaid'];
    $pg_address = $_POST['pg_address'];
    $pg_amount = $_POST['pg_amount'];
    $category_id=$_POST['category_id'];
    $owner_id=$_POST['owner_id'];
    $pg_photos = $_FILES['pg_photos']['name'];
    $filepath = $_FILES['pg_photos']['tmp_name'];
    $sql = "INSERT INTO tbl_pgmaster(pg_name,pg_details,pg_areaid,pg_address,pg_photos,pg_amount,category_id,owner_id)
        VALUES ('$pg_name','$pg_details','$pg_areaid','$pg_address','$pg_photos','$pg_amount','$category_id','$owner_id')";
   
    if ($connection->query($sql) === TRUE) {
         move_uploaded_file($filepath, "uploads/".$pg_photos);
         echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

?>

        

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Form : PG Master Form </title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
    
        <!-- MENU SIDEBAR-->
                <?php
                    include('./themepart/sidebar.php');
                ?>
          <!-- END MENU SIDEBAR-->
       

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
                <?php
                    include('./themepart/header.php');
                ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
     
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>PG Master Form </strong>
                                    </div>
                                    <div class="card-body card-block">
                                    <form  method="post" enctype="multipart/form-data" class="form-horizontal" id="myform">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">PG_Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name-input" name="pg_name" title="Enter PG Name" class="form-control" pattern="^[A-Za-z -]+$"  class = "required" required>
                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">PG_Details</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea id="editor" name="pg_details"></textarea>
                                              
                                                </div>
                                            </div>
                                            

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">PG_AreaId</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text-number" id="areaid-input" name="pg_areaid" title="Enter Area" class="form-control" class="required" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">PG_Address</label>
                                               </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="address-input" name="pg_address" title="Enter Address" class="form-control" class="requird" required>
                                                    
                                                </div>
                                            </div>
                                    
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">PG_Photos</label>
                                               </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="photo-input" name="pg_photos" title="upload image" class="form-control" class="requird" required> 
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">PG_Amount</label>
                                               </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="amount-input" name="pg_amount" title="Enter Amount" class="form-control"  class="required" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Category Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="category_id" class='form-control'>
                                                    <?php
                                                            $q = mysqli_query($connection , "select * from tbl_category");
                                                            while($row = mysqli_fetch_array($q))
                                                            {
                                                                echo "<option value = '{$row ['category_id']}'>{$row['category_name']}</option>";
                                                            }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Owner Id </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="owner_id" class='form-control'>
                                                    <?php
                                                            $q = mysqli_query($connection , "select * from tbl_owner");
                                                            while($row = mysqli_fetch_array($q))
                                                            {
                                                                echo "<option value = '{$row ['owner_id']}'>{$row['owner_name']}</option>";
                                                            }
                                                    ?>
                                                    </select>     
                                                    
                                                </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm" name="btn">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
               <!-- FOOTER STARTS -->
               <?php
                    include('./themepart/footer.php');
                ?>
               <!-- FOOTER ENDS -->
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <!-- Main JS-->
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

</html>
<!-- end document-->