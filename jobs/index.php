<?php
//start session
session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require('../model/database.php');
require('../model/jobs_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'list_jobs';
    }
}

if ($action == 'list_jobs') {
    // Get jobs data
    $jobs = get_jobs();
    $job_count = count($jobs);
    
    //job recommendations
    // if user is logged in, display job matches
    if (isset($_SESSION['user']['userQualifications'])) {
        include('./job_match_function.php');
        $job_matches = job_match();
    }
    
    // Display the jobs list
    include('jobs_list.php');

}
else if ($action == 'view_listing') {
    $job_ID = filter_input(INPUT_POST, 'jobID');
    $job = get_job_by_jobID($job_ID);   
    //go to job listing page
    include('jobs_view_listing.php');
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
    
    
    //job recommendations
    // if user is logged in, display job matches
    if (isset($_SESSION['user']['userQualifications'])) {
        include('./job_match_function.php');
        $job_matches = job_match();  
    }
    
    // Display the jobs list

    include('jobs_list.php');
}

?>