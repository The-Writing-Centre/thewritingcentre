<?php

require('../settings/db_class.php');

// inherit the methods from Connection
class Admin extends db_connection{

    function admin_login($email){
            // return associative array or false
            return $this->db_fetch_one("select * from staff where staff_email='$email'");
    }
}

?>