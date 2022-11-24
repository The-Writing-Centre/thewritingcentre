<?php

require('../Settings/core.php');
require('../Controllers/product_controller.php');

// check_login();
// if (check_permission() != 1) {

//   echo 'you are not an admin';

//   //redirect to index.php
//   header('Location: ../Login/login.php');
// }

//  include('../View/admin-nav-bar.php');

$service = select_one_product_controller($_GET['id']);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <br>

    <h1>Update Service Form</h1>

    <div class="container">

        <form method="post" enctype="multipart/form-data" action="../actions/update_service.php ">

            <div class="form-group">
                <input class="form-control" type="hidden" name="service_id" value=<?"php echo $_GET['service_id'] "?>
                <div class="form-group">
                    <?php
                    $services = select_all_products_controller();
                    foreach ($services as $service) {

                    ?>

                    <?php } ?>
                    </select>
                </div>



                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Service name" name="service_name" aria-required="true" required="required" value="<?php echo $service['service_name'] ?>">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Service price" name="service_price" aria-required="true" required="required" value="<?php echo $service['service_price'] ?>">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Service description" name="service_desc" aria-required="true" pattern="^[-\sa-zA-Z]+$" required="required" value="<?php echo $service['service_desc'] ?>">
                </div>

                <div class="form-group">
                    <img src="../images/products/<?php echo htmlentities($service['service_image']); ?>" width="200" height="200">
                    <input class="form-control" type="file" placeholder="Service image" name="service_image" aria-required="true">
                </div>

                <input class="btn btn-primary" type="submit" name="updateProductButton">

        </form>