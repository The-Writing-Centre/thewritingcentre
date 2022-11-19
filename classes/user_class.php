<?php
require('../settings/db_class.php');

class Customer extends db_connection{
//methods
//add customer
function add_user($first_name, $last_name, $school, $email, $password){
    return $this->db_query("insert into customers(firstname, lastname, school, email, password) values ('$first_name', '$last_name', '$school', '$email', '$password')");
}

//check login details
function check_login_details($email){
    return $this->db_fetch_one("select * from customers where email='$email'");

}

//edit customer
function edit_user($user_id,$first_name, $last_name, $school, $email, $password){
    return $this->db_query("update customers set firstname = '$first_name', lastname = '$last_name', school = '$school', email='$email', password='$password' where user_id = '$user_id'");
}

//delete customer
function delete_user($user_id){
    return $this->db_query("delete from customers where user_id = '$user_id'");
}
//select all customers
function select_all_users(){
    return $this->db_fetch_all("select * from customers");
}

// select one customer
function select_one_user($user_id){
    return $this->db_fetch_one("select * from customers where email='$user_id'");

}











































}

?>
