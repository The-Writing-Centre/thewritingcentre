<?php

require_once("../controllers/admin_controller.php");

session_start();

// check if theres a POST variable with the name 'submit'
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = admin_login_controller($email);
    $password_hash = $result["password"];


    if (password_verify($password, $password_hash) == true){
        $_SESSION['staffname'] = $result['staff_name'];
        $_SESSION['staff_id'] = $result['staff_id'];
        $_SESSION['staff_email'] = $result['staff_email'];
        $_SESSION['staff_role'] = $result['staff_role'];

        if ($_SESSION['staff_role'] == 1){
            echo 'success';
            header("Location: ../admin/index.php");
        }
        else{
            echo 'error: wrong credentials';
        }
    }

    else header("Location: ../admin/index.php");
    

}

?>