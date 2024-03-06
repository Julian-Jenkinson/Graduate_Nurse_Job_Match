<?php session_start();//start session?>

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
$employer_email = '';

if ($action == 'employer_login') {
    // Display the employer login page
    include('employer_login.php');
}
else if ($action == 'get_employer') {
    //if session is set
    if (isset($_SESSION['email'])) {
        $employer_email = $_SESSION['email'];        
        $employer_password = $_SESSION['password'];
        $employer = get_employer_by_email($employer_email);
    } 
    //if no session set
    else {
        $employer_email = filter_input(INPUT_POST, 'email');
        $employer_password = filter_input(INPUT_POST, 'password');
        $employer = get_employer_by_email($employer_email);
    } 

}




if ($action == 'employer_signup') {
    // Display the employer signup page
    include('employer_signup.php');
} 

?>