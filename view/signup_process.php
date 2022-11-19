<?php
require('../controllers/user_controller.php');

//check if button has been clicked
if(isset($_POST['sign_up'])){
    //retriving user's info
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $school = $_POST["school"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];

    //encrypt password
    $encryptedPass = password_hash($password, PASSWORD_BCRYPT); 

    //calls the controller of the what inserts into the database
    $result = add_user_controller($first_name, $last_name, $school,  $email, $contact, $encryptedPass);
    if($result === true)
    {
        // echo header("location: login.php");
        echo 'successful';
    }
    else echo 'failed';
}


?>
