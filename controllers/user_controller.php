<?php
require('../classes/user_class.php');
//Add user controller
function add_user_controller($name, $email, $password, $country, $city, $contact)
{
    //create user
 instance
    $user
_instance = new user
();
    //call the method from the class
    return $user
_instance->add_cust($name, $email, $password, $country, $city, $contact);
}

//Edit user controller
function edit_user_controller($id, $name, $email, $password, $country, $city, $contact)
{
    //create user
 instance
    $user
_instance = new user
();
    //call the method from the class
    return $user
_instance->edit_cust($id, $name, $email, $password, $country, $city, $contact);

}

//Verify Login controller
function check_login_details_controller($email)
{
    //create user
 instance
    $user
_instance = new user
();
    //call the method from the class
    return $user
_instance->check_login_details($email);
}


//Delete user controller
function delete_user_controller($id)
{
    //create user
 instance
    $user
_instance = new user
();
    return $user
_instance->delete_cust($id);
}

function select_all_user_controller(){
    // create an instance of the user
 class
    $user
_instance = new user
();
    // call the method from the class
    return $user
_instance->select_all_cust();

}

function select_one_user_controller($id){
    // create an instance of the user
 class
    $user
_instance = new user
();
    // call the method from the class
    return $user
_instance->select_one_cust($id);


}

// function sign_up_controller($name, $email, $password){
//  $new_person = new user();
//  return $new_person->sign_up($name, $email, $password);
// }
















































?>