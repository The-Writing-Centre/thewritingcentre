<?php


require('../controllers/user_controller.php');

//start session
session_start();

if(isset($_POST["sign_in"])){ 

    $email = $_POST["email"];
    $password = $_POST["password"];


    $result = check_login_details_controller($email);

    if($result){
        password_verify($password, $result["password"]);
        $_SESSION["user_id"] = $result["user_id"];
        $_SESSION["user_role"] = $result["role"];

        if($_SESSION["user_role"] == 2){
            header('location: ../admin/admin_login.php');
        }

       if($_SESSION["user_role"] == 1){
        header('location: ../portfolio-details.php');
    }
}
    else{
        echo "<script>alert('Sorry, your credentials do not match'); windows.location.href= 'login.php'</script>";
      
    
    }
    
  
}

?>