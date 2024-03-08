
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
    if (isset($_SESSION['user'])) {
        //echo $_SESSION['email'];
        
        $action = 'get_user';
    }
    //go to login
    else if ($action === NULL) {
        $action = 'user_login';
    }
}
$email = '';

if ($action == 'user_login') {
    // Display the employer login page
    include('user_login.php');
}
else if ($action == 'get_user') {
    //if session is set
    if (isset($_SESSION['user'])) {
        $email = $_SESSION['userEmail'];        
        $password = $_SESSION['userPassword'];
        $user = get_user_by_email($email);
        
    } 
    //if no session set
    else {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $user = get_user_by_email($email);
        //echo "<script>console.log('{$user['userPassword']}' );</script>";
        //echo $employer;
    } 

    //check for incorrect credentials
    //verify hashed password
    if ($user == NULL || !password_verify($password, $user['userPassword'])) {
        $error = "Incorrect email or password.";
        include('../error/user_error.php');
        //echo "<script>console.log('{$employer}' );</script>";
        //echo $employer;
        
    }
    else if ($user){
        //store user and password in session
        //security issue here - storing unhashed passwords in program
        $_SESSION['user'] = $user; 
        $_SESSION['userEmail'] = $email;        
        $_SESSION['userPassword'] = $password;
        include('user_profile.php'); 
    }
}
else if ($action == 'add_user') {        
    //get values from user sign in form
    $email = filter_input(INPUT_POST, 'email');
    $password1 = filter_input(INPUT_POST, 'password1');
    $password2 = filter_input(INPUT_POST, 'password2');
    //validate inputs
    if ($email == NULL || $password1 == NULL || $password2 == NULL) {
        $error = "The email or password is invalid. Please try again";
        include('../error/user_error.php');
    }
    else if ($password1 != $password2) {
        $error = "The passwords you entered do not match. Please try again.";
        include('../error/user_error.php');
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "The email must be a valid address. Please try again";
        include('../error/user_error.php');
    }
    else if (strlen($password1) < 8) {
        $error = "The password must be at least 8 characters. Please try again";
        include('../error/user_error.php');
    }
    else if(userExists($email)) {
        $error = "This email address is already taken.";
        include('../error/user_error.php');
    }
    else {
        //hash password
        $password1 = password_hash($password1, PASSWORD_DEFAULT);
        //add user to database
        add_user($email, $password1);
        $user = get_user_by_email($email);
        //store user and password in session
        $_SESSION['user'] = $user; 
        $_SESSION['userEmail'] = $email;        
        $_SESSION['userPassword'] = $password1;
        
        include('user_profile.php');
    }
}
else if ($action == 'logout') {
    //if user logs out
    //remove session variables
    unset($_SESSION['user']);
    unset($_SESSION['userEmail']);
    unset($_SESSION['userPassword']);
    //destroy session
    //session_destroy();
    include('user_login.php');
}




?>