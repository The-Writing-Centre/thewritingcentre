<?php
require('../Settings/core.php');
require("../Controllers/product_controller.php");

//check_login();
// add brand
if(isset($_POST['submit'])){

    //get data from form
    // $product_cat = $_POST['product_cat'];
    // $product_brand = $_POST['product_brand'];
    $product_title = $_POST['service_name'];
    $product_desc = $_POST['service_desc'];
    $product_price = $_POST['service_price'];
    
    //$product_image = $_FILES['service_image']['name'];
    //move_uploaded_file($_FILES["service_image"]["tmp_name"],"../images/products/".$_FILES["service_image"]["name"]);
    $product_keywords = $_POST['service_keywords'];
   // $product_keywords = $_POST['product_keywords'];

    

    $result = add_product_controller($product_title, $product_desc, $product_price,/*$product_image,*/ $product_keywords);

   // mysqli_query($conn, $result);
     var_dump($result); 

    //   if ($result){
    //     header("Location: ../Admin/add_service.php");
    //     }else{
    //     echo 'failed';
    // }



}




?>