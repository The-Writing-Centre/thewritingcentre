<?php
//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login
function check_login(){
	if (!isset($_SESSION['user_id'])) 
	{
		//redirect to login page
		// $_SESSION['role'] = 0;
    	header('Location: ../view/login.php');
	}
	else{
		return true;
	}
}

function check_login_at_index(){
	//check if login session exit
	if (!isset($_SESSION['user_id'])) 
	{
		//redirect to login page
		$_SESSION['role'] = 0;
    	//header('Location: ..php');
	}
}

//function to check for role (admin, customer, etc)
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		return $_SESSION['user_role'];
	}
}

//get name of current page
$current_file = $_SERVER['SCRIPT_NAME']; 
?>