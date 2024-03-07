
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require('../model/database.php');
require('../model/employers_db.php');

 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'employer_login';
    }
}
$email = '';

$t = get_employer_by_email('zuki@cat.com.au');
//echo $t['empPassword'];

if ($action == 'employer_login') {
    // Display the employer login page
    include('employer_login.php');
}
else if ($action == 'get_employer') {
    
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $employer = get_employer_by_email($email);
        //echo "<script>console.log('{$employer['empPassword']}' );</script>";
        //echo $employer['empPassword'];
    } 

    //check for incorrect credentials
    //security issue here - should validate hashed passwords
    if ($employer == NULL || $password != $employer['empPassword']) {
        $error = "Incorrect email or password.";
        include('../error/employer_error.php');
        //echo "<script>console.log('{$employer}' );</script>";
        //echo $employer;
        
    }
    else{
        include('employer_my_jobs.php');
    }
   



    if ($action == 'employer_signup') {
        // Display the employer signup page
        include('employer_signup.php');
    } 

?>