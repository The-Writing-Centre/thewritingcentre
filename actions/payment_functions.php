<?php
include('../controllers/order_controller.php');

function get_service_option()
{
    $service = select_all_products_controller();
    foreach ($service as $s) {
        echo ("<option value=$s[service_id]>$s[service_name]</option>
        ");
    }
}

?>

