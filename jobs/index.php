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
    // Display the jobs list
    include('jobs_list.php');
} 


?>