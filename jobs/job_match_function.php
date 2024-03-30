<?php
//this function is the job match algorithm to give reccomendations to users
function job_match(){
    //maybe initialise job_keyword to null or something??
    $job_keyword = '';


    $user_quals = $_SESSION['user']['userQualifications'];
    //if user has a Bachelor of midwifery, search for job titles with 'Midwife'
    if ($user_quals == 'Bachelor of Midwifery'){
        $job_keyword = 'Midwife';
    }
    //check for users qualified for Registered nurse or Enrolled nurse
    else if ($user_quals == 'Bachelor of Nursing' 
            || $user_quals == 'Bachelor of Nursing Science' 
            || $user_quals == 'Master of Nursing Practice (Pre-Registration)' 
            || $user_quals == 'Graduate Certificate of Nursing'){
        $job_keyword = 'Registered Nurse';
    }
    else if ($user_quals == 'Diploma of Nursing'){
        $job_keyword = 'Enrolled Nurse';
    }
    else if ($user_quals == 'Graduate Diploma of Mental Health Nursing'){
        $job_keyword = 'Mental Health';
    }
    else if ($user_quals == 'Graduate Certificate in Clinical Nursing'
            || $user_quals == 'Master of Nursing'){
        $job_keyword = 'Clinical Nurse';
    }


    //this function queries the DB
    $job_matches = get_job_matches($job_keyword);
    return $job_matches;    
}
        
?>