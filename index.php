
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//need this???
session_start();

require('./model/database.php');
require('./model/jobs_db.php');
require('./model/users_db.php');
 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if (isset($_SESSION["auth"]) &&  $_SESSION["auth"]=== true) {
        $action = 'home';
    }
    else if ($action === NULL) {
        $action = 'auth';
    }
}
// Check if authentication is already done
//if (isset($_SESSION["auth"]) &&  $_SESSION["auth"]=== true) {
//    $action = 'home';
//}

//authenticating clients - only here to protect the site during hosting
if ($action == 'auth') {
    include('./auth.php');
}
else if ($action == 'login') {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    
    //check for correct credentials
    if ($email == "ClientsUSQ" && $password == "password"){
        $_SESSION["auth"] = true;
        include 'home.php';
    }
    else {
    $error = "Incorrect email or password.";
    
    include 'auth.php';
    echo "<div style='text-align: center; color: red;'>$error</div>";
    }
}
else if ($action == 'search_jobs') {
    //get search box data
    $by_keyword = filter_input(INPUT_POST, 'by_keyword');
    $by_location = filter_input(INPUT_POST, 'by_location');
    $by_contract_type = filter_input(INPUT_POST, 'by_contract_type');
    $by_rural_type = filter_input(INPUT_POST, 'by_rural_type');
    //search jobs function - returns search results
    $jobs = search_jobs($by_keyword, $by_location, $by_contract_type, $by_rural_type);
    //get job count of search results
    $job_count = count($jobs);
    
    //store jobs array in session
    $_SESSION['jobs'] = $jobs;
    $_SESSION['job_count'] = count($jobs);

    //mayne change to userquals is sset?? to avoid it running unneccesarily
    if (isset($_SESSION['user']['userEmail'])) {
        include('./jobs/job_match_function.php');
        $user = get_user_by_email($_SESSION['user']['userEmail']);
        $job_matches = job_match($user);
        $_SESSION['job_matches'] = $job_matches;
    }


    
    //redirect to jobs_list.php
    header("Location: ./jobs/jobs_list.php");
    exit;
    //include('./jobs/jobs_list.php');
} 
?>






