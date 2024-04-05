<?php
//this function is the job match algorithm to give reccomendations to users
function job_match(){
    //maybe initialise job_keyword to null or something??
    $job_keyword = '';


    $job_keyword = $_SESSION['user']['jobTitle'];
    



    

    //this function queries the DB
    $job_matches = get_job_matches($job_keyword);
    return $job_matches;    
}
        
?>