
<?php 
//start session cookies
session_start();

//get error messages
error_reporting(E_ALL);
ini_set('display_errors', 1);


require('../model/database.php');
require('../model/users_db.php');

 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    //is session set then skip login
    if (isset($_SESSION['email'])) {
        //echo $_SESSION['email'];
        
        $action = 'get_user';
    }
    //go to login
    else if ($action === NULL) {
        $action = 'user_login';
    }
}
$email = '';

//$t = get_user_by_email('j@j.com.au');
//echo $t['userPassword'];

if ($action == 'user_login') {
    // Display the employer login page
    include('user_login.php');
}
else if ($action == 'get_user') {
    //if session is set
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];        
        $password = $_SESSION['password'];
        $user = get_user_by_email($email);
        
    } 
    //if no session set
    else {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $user = get_user_by_email($email);
        echo "<script>console.log('{$user['userPassword']}' );</script>";
        //echo $employer;
    } 

    //check for incorrect credentials
    //security issue here - should validate hashed passwords
    if ($user == NULL || $password != $user['userPassword']) {
        $error = "Incorrect email or password.";
        include('../error/user_error.php');
        //echo "<script>console.log('{$employer}' );</script>";
        //echo $employer;
        
    }
    else if ($user){
        //store user and password in session
        $_SESSION['user'] = $user; 
        $_SESSION['email'] = $email;        
        $_SESSION['password'] = $password;
        include('user_profile.php'); 
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
    //if user logs out
    //remove session variables
    session_unset();
    //destroy session
    session_destroy();
    include('user_login.php');
}





if ($action == 'user_signup') {        
    // Display the employer signup page
    include('user_signup.php');
}

?>