<?php
include '../classes/admin_class.php';



function admin_login_controller($email){
    $admin_instance = new Admin();
    return $admin_instance->admin_login($email);
}



?>
