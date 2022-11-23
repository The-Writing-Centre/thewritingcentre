<?php
require("../controllers/cart_controller.php");
require("../settings/core.php");
if(isset($_POST['add_cart'])){

    check_login(); 
    $service_id = $_POST['service_id'];
     $ip_address = $_SERVER['REMOTE_ADDR'];
    $customer_id = $_SESSION['user_id'];

    //setting a default quantity
    $quantity = $_POST['quantity'] ? : 1;

    //select existing product from the database and store it
    $existed_service = select_one_item_controller($customer_id, $service_id);

    //check if a product is already in the cart and then update its quantity in the database

    if ($existed_service){

        $new_quantity = $existed_service['qty'] + $quantity;
        $updated_qty = update_quantity_controller($service_id, $customer_id, $new_quantity);
            
        if($updated_qty){
        header("Location:../view/view_cart.php");

        }
        
        else{
            echo ("<script>alert('Could not add the product to cart'); window.location.href = '../view/cart.php';</script>");
        }

    }

    else{

        //add the product to the cart if the prodcut is not there
        $result = add_to_cart_controller($service_id, $ip_address, $customer_id, $quantity); 

         if ($result){
             header("Location: ../view/view_cart.php");
        
         }else {
             //redirect the user to the store front
            echo ("<script>alert('Could not add the product to cart'); window.location.href = '../view/cart.php';</script>");
         } 

    }   
}
