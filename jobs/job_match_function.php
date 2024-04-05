
<?php
// This function is the job match algorithm to give recommendations to users
function job_match($user){
    
    // Get job title from user input
    $job_keyword = $user['jobTitle'];
    
    $city = $user['userCity'];
    $state = $user['userState'];

    // Check if the user wishes to relocate
    if ($user['userRelocate'] === 'Yes' || $user['userRelocate'] === 'Unsure') {
        //looking for jobs any where

        // This function queries the DB
        $job_matches = get_job_matches($job_keyword);
        return $job_matches;
    } 
    else if ($user['userRelocate'] === 'No') {
        //look for jobs in same city


        // If there are not enough jobs in the same city, then expand the search to the state
        

        // This function queries the DB
        $job_matches = get_job_matches_by_location($job_keyword, $city, $state);
        return $job_matches;
    }
     
}
        
?>


<?php/* this works so i
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
        
*/?>