<?php

include ("../settings/db_class.php");

class Order extends db_connection{
    public function add_order($service_id, $customer_id, $order_name, $file, $order_desc, $invoice_no, $order_status, $order_date){
        $sql = "INSERT INTO `orders`(`service_id`,`customer_id`, `order_name`,`file`,`order_desc`, `order_invoice`, `order_status`, `order_date`)VALUES ('$service_id','$customer_id','$order_name','$file','$order_desc','$invoice_no','$order_status','$order_date')";
        return $this->db_query($sql);
    }


    public function select_all_orders(){
        $sql = "SELECT * FROM `orders`";
        return $this->db_fetch_all($sql);
    }


    public function select_one_order($order_id){
        $sql = "SELECT  `customers`.`customer_name`, `orders`.`order_id`, `orders`.`invoice_no`, `orders`.`order_date`, `orders`.`order_status` FROM `orders` JOIN `customers` ON (`customers`.`user_id` = `orders`.`customer_id`) WHERE `orders`.`user_id` = '$order_id'";
        return $this->db_fetch_one($sql);
    }


    public function get_customer_order($customer_id){
        $sql = "SELECT MAX(`order_id`) as recent FROM `orders` where `customer_id`='$customer_id'";
        return $this->db_fetch_one($sql);
    }


    public function update_order($order_id, $staff_id, $order_status){
		$sql = ("update orders set staff_id='$staff_id', order_status='$order_status' where order_id = '$order_id'");
         return $this->db_query($sql);
	}


}

?>