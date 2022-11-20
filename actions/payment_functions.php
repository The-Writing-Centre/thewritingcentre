<?php
include('../controllers/order_controller.php');

function get_service_option()
{
    $service = ;
    foreach ($brands as $brand) {
        echo ("<option value=$brand[brand_id]>$brand[brand_name]</option>
        ");
    }
}

?>

