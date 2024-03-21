
<?php 
//start session cookies
session_start();

//get error messages
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require('../model/database.php');
require('../model/users_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    //is session set then skip login
    if (isset($_SESSION['user'])) {
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
    } 
    //check for incorrect credentials
    //verify hashed password
    if ($user == NULL || !password_verify($password, $user['userPassword'])) {
        $error = "Incorrect email or password.";
        include('../error/user_error.php');
    }
    else if ($user){
        //store user and password in session
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
        $password2 = password_hash($password1, PASSWORD_DEFAULT);
        //add user to database
        add_user($email, $password2);
        $user = get_user_by_email($email);
        //store user and password in session
        $_SESSION['user'] = $user; 
        $_SESSION['userEmail'] = $email;        
        $_SESSION['userPassword'] = $password1;
        include('user_profile.php');
    }
}
else if ($action == 'create_profile_button') {
    //display the create/edit profile page
    $user = get_user_by_email($_SESSION['user']['userEmail']);
    include('user_edit_profile.php');
}
else if ($action == 'edit_profile') {
    //display the create/edit profile page
    //echo $_SESSION['user']['userEmail'];
    $user = get_user_by_email($_SESSION['user']['userEmail']);
    include('user_edit_profile.php');
}
else if ($action == 'save_profile') {

    $user = get_user_by_email($_SESSION['user']['userEmail']);
    
    //get data from form
    $user_id = filter_input(INPUT_POST, 'user_id');
    $first_name = filter_input(INPUT_POST, 'userFName');
    $last_name = filter_input(INPUT_POST, 'userLName');
    $phone = filter_input(INPUT_POST, 'userPhone');
    $address = filter_input(INPUT_POST, 'userAddress');
    $qualifications = filter_input(INPUT_POST, 'userQualifications');
    $experience = filter_input(INPUT_POST, 'userExperience');
    $skills = filter_input(INPUT_POST, 'userSkills');
    $interests = filter_input(INPUT_POST, 'userInterests');

    $mm1 = filter_input(INPUT_POST, 'mm1');
    $mm2 = filter_input(INPUT_POST, 'mm2');
    $mm3 = filter_input(INPUT_POST, 'mm3');
    $mm4 = filter_input(INPUT_POST, 'mm4');
    $mm5 = filter_input(INPUT_POST, 'mm5');
    $mm6 = filter_input(INPUT_POST, 'mm6');
    $mm7 = filter_input(INPUT_POST, 'mm7');
    
    //update user function
    update_user($user_id, $first_name, $last_name, $phone, 
                $address, $qualifications, $experience, $skills, 
                $interests, $mm1, $mm2, $mm3, $mm4, $mm5, $mm6, $mm7);
    
    //return to user profile page with updated user data
    $email = filter_input(INPUT_POST, 'email');
    $user = get_user_by_email($_SESSION['user']['userEmail']);
    include('user_profile.php');
}







//this logout not using???
else if ($action == 'logout') {
    //if user logs out
    //remove session variables
    unset($_SESSION['user']);
    unset($_SESSION['userEmail']);
    unset($_SESSION['userPassword']);
    
    // Redirect to home page
    header('Location: ../home.php');
    exit(); // Stop further execution
}
?>