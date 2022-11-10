<?php
include("../classes/order_class.php");

//--INSERT--//
function add_order_controller($service_id, $customer_id, $order_name, $file, $order_desc, $invoice_no, $order_status, $order_date){
    $order_instance = new Order();
    return $order_instance->add_order($service_id, $customer_id, $order_name, $file, $order_desc, $invoice_no, $order_status, $order_date);
}

//--SELECT--//
function select_all_orders_controller(){
    $order_instance = new Order();
    return $order_instance->select_all_orders();
}

function select_one_order_controller($order_id){
    $order_instance = new Order();
    return $order_instance->select_one_order($order_id);
}

function get_customer_order_controller($customer_id){
    $order_instance = new Order();
    return $order_instance->get_customer_order($customer_id);
}

//--UPDATE--//
function update_order_controller($order_id, $staff_id, $order_status){
    $order=new Order();
    return $order->update_order($order_id, $staff_id, $order_status);
}


?>