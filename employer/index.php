
<?php 
//start session cookies
session_start();

//get error messages
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('../model/database.php');
require('../model/employers_db.php');
require('../model/jobs_db.php');
 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    //is session set then skip login
    if (isset($_SESSION['employer'])) {
        $action = 'get_employer';
    }
    //go to login
    else if ($action === NULL) {
        $action = 'employer_login';
    }
}
$email = '';

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
    } 
    //check for incorrect credentials
    //validating hashed passwords here
    if ($employer == NULL || !password_verify($password, $employer['empPassword'])) {
        $error = "Incorrect email or password.";
        include('../error/employer_error.php');
    }
    else if ($employer){
        //store user and password in session
        $_SESSION['employer'] = $employer; 
        $_SESSION['empEmail'] = $email;        
        $_SESSION['empPassword'] = $password;
        
        
        $empID = $employer['empID'];
        $my_jobs = get_jobs_by_empID($empID);
        $job_count = count($my_jobs);
       
        include('employer_my_jobs.php'); 
    }
    
}
else if ($action == 'add_employer') {        
    //get values from user sign in form
    $email = filter_input(INPUT_POST, 'email');
    $password1 = filter_input(INPUT_POST, 'password1');
    $password2 = filter_input(INPUT_POST, 'password2');
    //validate inputs
    if ($email == NULL || $password1 == NULL || $password2 == NULL) {
        $error = "The email or password is invalid. Please try again";
        include('../error/employer_error.php');
    }
    else if ($password1 != $password2) {
        $error = "The passwords you entered do not match. Please try again.";
        include('../error/employer_error.php');
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "The email must be a valid address. Please try again";
        include('../error/employer_error.php');
    }
    else if (strlen($password1) < 8) {
        $error = "The password must be at least 8 characters. Please try again";
        include('../error/employer_error.php');
    }
    else if(employerExists($email)) {
        $error = "This email address is already taken.";
        include('../error/employer_error.php');
    }
    else {
        //hash password
        $password2 = password_hash($password1, PASSWORD_DEFAULT);
        //add user to database
        add_employer($email, $password2);
        $employer = get_employer_by_email($email);
        //store user and password in session
        $_SESSION['employer'] = $employer; 
        $_SESSION['empEmail'] = $email;        
        $_SESSION['empPassword'] = $password1;
        //just added this to fix bug    
        $empID = $employer['empID'];
        $my_jobs = get_jobs_by_empID($empID);
        $job_count = count($my_jobs);


        include('employer_my_jobs.php');
    }
}
else if ($action == 'delete_listing'){
    $job_ID = filter_input(INPUT_POST, 'jobID');
    delete_employers_job($job_ID);
    
    $employer = $_SESSION['employer'];
    $empID = $employer['empID'];
    $my_jobs = get_jobs_by_empID($empID);
    $job_count = count($my_jobs);

    include('employer_my_jobs.php'); 
}
else if ($action == 'edit_listing'){
    //working
    $job_ID = filter_input(INPUT_POST, 'jobID');

    $job = get_job_by_jobID($job_ID);

    //$employer = $_SESSION['employer'];
    //$empID = $employer['empID'];
    //$my_jobs = get_jobs_by_empID($empID);
    //$job_count = count($my_jobs);
    include('employer_edit_listing.php'); 
}
else if ($action == 'save_changes'){
    //should work
    $job_ID = filter_input(INPUT_POST, 'jobID');
    $jobName = filter_input(INPUT_POST, 'jobName');
    $jobSalary = filter_input(INPUT_POST, 'jobSalary');
    $jobAddress = filter_input(INPUT_POST, 'jobAddress');
   
    update_job($job_ID, $jobName, $jobAddress, $jobSalary);
    
    $employer = $_SESSION['employer'];
    $empID = $employer['empID'];
    $my_jobs = get_jobs_by_empID($empID);
    $job_count = count($my_jobs);
    include('employer_my_jobs.php'); 
}



else if ($action == 'create_job'){
    //should be good
    $employer = $_SESSION['employer'];
    include('employer_create_listing.php'); 
}
else if ($action == 'add_job'){
    //get form data
    
    $empID = filter_input(INPUT_POST, 'empID');
    $jobName = filter_input(INPUT_POST, 'jobName');
    $jobPlace = filter_input(INPUT_POST, 'jobPlace');
    $jobSalary = filter_input(INPUT_POST, 'jobSalary');
    $jobAddress = filter_input(INPUT_POST, 'jobAddress');
    //echo $empID;
    $employer = $_SESSION['employer'];
    
    add_job($empID, $jobName,$jobPlace, $jobSalary, $jobAddress);

    $my_jobs = get_jobs_by_empID($empID);
    $job_count = count($my_jobs);

    include('employer_my_jobs.php'); 
}




else if ($action == 'view_listing'){
    $job_ID = filter_input(INPUT_POST, 'jobID');
    $job = get_job_by_jobID($job_ID);
    //go to job listing page
    include('../jobs/jobs_view_listing.php'); 
}
else if ($action == 'logout') {
    //if customer logs out
    //remove session variables
    session_unset();
    unset($_SESSION['employer']);
    unset($_SESSION['empEmail']);
    unset($_SESSION['empPassword']);
    //destroy session - not required
    //session_destroy();
    include('employer_login.php');
}

?>