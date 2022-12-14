<?php
require('../classes/user_class.php');
//Add user controller
function add_user_controller($first_name, $last_name, $school, $email, $contact, $password)
{
    //create user instance
    $user_instance = new Customer();
    //call the method from the class
    return $user_instance->add_user($first_name, $last_name, $school, $email, $contact, $password);
}

//Edit use controller
function edit_user_controller($user_id,$first_name, $last_name, $school, $email, $contact, $password)
{
    //create user instance
    $user_instance = new Customer();
    //call the method from the class
    return $user_instance->edit_user($user_id,$first_name, $last_name, $school, $email, $contact, $password);

}

//Verify Login controller
function check_login_details_controller($email)
{
    //create user instance
    $user_instance = new Customer();
    //call the method from the class
    return $user_instance->check_login_details($email);
}


//Delete use controller
function delete_use_controller($user_id)
{
    //create user instance
    $user_instance = new Customer();
    return $user_instance->delete_user($user_id);
}

function select_all_use_controller(){
    // create an instance of the user class
    $user_instance = new Customer();
    // call the method from the class
    return $user_instance->select_all_users();

}

function select_one_use_controller($user_id){
    // create an instance of the user class
    $user_instance = new Customer();
    // call the method from the class
    return $user_instance->select_one_user($user_id);


}
















































?>