<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require('../model/database.php');
require('../model/users_db.php');

 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'user_login';
    }
}

if ($action == 'user_login') {
    // Display the employer login page
    include('user_login.php');
} 

if ($action == 'user_signup') {
    // Display the employer signup page
    include('user_signup.php');
} 

?>


