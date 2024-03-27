
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//need this???
session_start();

require('./model/database.php');
require('./model/jobs_db.php');
 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'home';
    }
}
if ($action == 'home') {
    include('home.php');
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
    //redirect to jobs_list.php
    header("Location: ./jobs/jobs_list.php");
    exit;
    //include('./jobs/jobs_list.php');
} 
?>






