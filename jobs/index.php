<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
    // Display the jobs list
    include('jobs_list.php');
}
else if ($action == 'view_listing') {
    $job_ID = filter_input(INPUT_POST, 'jobID');
    $job = get_job_by_jobID($job_ID);   
    //go to job listing page
    include('jobs_view_listing.php');
}

?>