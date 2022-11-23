<?php
require('../settings/core.php');

require('../controllers/cart_controller');

$customer_id= $_SESSION['user_id'];
$email= $_SESSION['customer_email'];
$amount = total_amount_controller($customer_id);

?>