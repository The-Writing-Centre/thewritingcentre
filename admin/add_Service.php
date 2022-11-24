<?php
require("../controllers/product_controller.php");
require('../settings/core.php');
check_login();
// add brand
if(isset($_POST['addService'])){

    //retrieve product data from the form
    $service_name = $_POST['service_name'];
    $service_price = $_POST['service_price'];
    $service_desc = $_POST['service_desc'];
    $service_image = $_FILES['service_image']['name'];
    move_uploaded_file($_FILES["service_image"]["tmp_name"],"../images/products/".$_FILES["service_image"]["name"]);

    

    $result = add_product_controller($service_name,$service_price,$service_price,$service_image);

    if ($result){
        header("Location: ../admin/products.php");
    }else{
        echo ("<script>alert('Could not add the product, try again.'); window.location.href = '../admin/addproduct.php';</script>");
    }

}
// ///
// if(isset($_GET['search'])){
//     $searching = $_GET['search'];
//     $result= searching_product_control($searching);
//      if ($result){
//         echo $result;
//      }
// }

// ?>

