<?php
require('../settings/core.php');
require('../controllers/product_controller.php');
// Admin has permission 0
// if (check_login() != 0) {
//     header('Location: ../index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="../mega-able-lite/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../mega-able-lite/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../mega-able-lite/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="../mega-able-lite/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../mega-able-lite/assets/icon/themify-icons/themify-icons.css" href="">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../mega-able-lite/assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../mega-able-lite/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../mega-able-lite/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../mega-able-lite/assets/css/jquery.mCustomScrollbar.css">


</head>

<body>
    <div class="row">
        <div class="col-md-3">
            <div class="card-body">
                <a href="index.php">Dashboard</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body">
                <a href="">Customers</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body">
                <a href="">Services</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body">
                <a href="../settings/logout.php">Log Out</a>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Service Form</h5>

                                        </div>
                                        <div class="card-block">
                                            <form class="form-material" enctype="multipart/form-data" action="../actions/add_service.php" method="post">
                                                <!-- Service Title -->
                                                <div class="form-group row">
                                                    <label>Service Name</label>
                                                    <input type="text" name="service_name" class="form-control" required>

                                                </div>
                                                <!-- Service Price -->
                                                <div class="form-group row">
                                                    <label>Price</label>
                                                    <input type="number" name="service_price" class="form-control" required="">

                                                </div>

                                                <!-- Service Description -->
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="service_desc">Service Description <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" name="service_desc" rows="5" placeholder="Service Description" required="required"></textarea>
                                                    </div>
                                                </div>

                                                <!-- Service image -->

                                                <div class="form-group row">
                                                    <label>Upload Image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="service_image" accept="image/*">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-success" name="addService">Add Services</button>
                                                    </div>
                                                </div>


                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>