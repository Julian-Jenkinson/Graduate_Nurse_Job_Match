
<?php 
//start session cookies
session_start();

//get error messages
error_reporting(E_ALL);
ini_set('display_errors', 1);


require('../model/database.php');
require('../model/employers_db.php');

 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    //is session set then skip login
    if (isset($_SESSION['employer'])) {
       //echo $_SESSION['email'];
        
        $action = 'get_employer';
    }
    //go to login
    else if ($action === NULL) {
        $action = 'employer_login';
    }
}
$email = '';

//$t = get_employer_by_email('zuki@cat.com.au');
//echo $t['empPassword'];

if ($action == 'employer_login') {
    // Display the employer login page
    include('employer_login.php');
}
else if ($action == 'get_employer') {
    //if session is set
    if (isset($_SESSION['employer'])) {
        $email = $_SESSION['empEmail'];        
        $password = $_SESSION['empPassword'];
        $employer = get_employer_by_email($email);
        
    } 
    //if no session set
    else {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $employer = get_employer_by_email($email);
        //echo "<script>console.log('{$employer['empPassword']}' );</script>";
        //echo $employer;
    } 

    //check for incorrect credentials
    //security issue here - should validate hashed passwords
    if ($employer == NULL || $password != $employer['empPassword']) {
        $error = "Incorrect email or password.";
        include('../error/employer_error.php');
        //echo "<script>console.log('{$employer}' );</script>";
        //echo $employer;
        
    }
    else if ($employer){
        //store user and password in session
        $_SESSION['employer'] = $employer; 
        $_SESSION['empEmail'] = $email;        
        $_SESSION['empPassword'] = $password;
        include('employer_my_jobs.php'); 
    }
}// else if ($action == 'register_product') {
    //get session customer data
 //   $session_customer = $_SESSION['customer'];    
  //  $product_code = filter_input(INPUT_POST, 'productCode');
    //removed this functionality
    //$customer_id = filter_input(INPUT_POST, 'customerID');
    //$product_name = filter_input(INPUT_POST, 'prods');
    //takes customer id from session customer instead of form
   // add_registration($session_customer[0], $product_code);
    //$message = "Product ($product_name) was registered successfully.";
    
    //include('product_register.php');
else if ($action == 'logout') {
    //if customer logs out
    //remove session variables
    session_unset();
    unset($_SESSION['employer']);
    unset($_SESSION['empEmail']);
    unset($_SESSION['empPassword']);
    //destroy session
    //session_destroy();
    include('employer_login.php');
}





if ($action == 'employer_signup') {        
    // Display the employer signup page
    include('employer_signup.php');
}

?>