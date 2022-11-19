<?php
require('../controllers/user_controller.php');

//check if button has been clicked
if(isset($_POST['sign_up'])){
    //retriving user's info
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $school = $_POST["school"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //encrypt password
    $encryptedPass = password_hash($password, PASSWORD_BCRYPT); 

    //calls the controller of the what inserts into the database
    $result = add_user_controller($firstname, $lastname, $school,  $email, $encryptedPass);
    if($result === true)
    {
        echo header("location: login.php");
    }
}


?>
