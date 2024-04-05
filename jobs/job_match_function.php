
<?php
// This function is the job match algorithm to give recommendations to users
function job_match($user){
    
    
    // Get job title from user input
    $by_keyword = $user['jobTitle'];
    $by_state = $user['userState'];
    $by_city = $user['userCity'];

    // Check if the user wishes to relocate
    if ($user['userRelocate'] === 'Yes' || $user['userRelocate'] === 'Unsure') {
        //looking for jobs any where
        // This function queries the DB
        $job_matches = get_job_matches($by_keyword);
        // trim back to 3 best matches
        $job_matches = best_3_matches($job_matches, $user);
        return $job_matches;
    } 
    else if ($user['userRelocate'] === 'No') {
        //looking for jobs in same city
        $job_matches = get_job_matches_by_city($by_keyword, $by_city);
        //often comes empty as city is often listed as supburb

        if (count($job_matches) === 0) {
            //looking for jobs in same state
            $job_matches = get_job_matches_by_state($by_keyword, $by_state);
            // trim back to 3 best matches
            $job_matches = best_3_matches($job_matches, $user);
            return $job_matches;
        }
        else {
            // trim back to 3 best matches
            $job_matches = best_3_matches($job_matches, $user);
            return $job_matches;
        }
    }
     
}

function best_3_matches($job_matches, $user){
    //trim to 3 best matches
    //create a counter on each job to increment for each match 
    //between job listing and user profile

    foreach ($job_matches as &$job) {
        $job['matchCount'] = 0;
        //check for job state match
        if ($job['jobSectorsServices'] === $user['sectorPref']) {
            $job['matchCount'] = $job['matchCount'] + 5;
        }
        //so on for all other matches
    }

    // Sort the job matches by match count in descending order
    usort($job_matches, function($a, $b) {
        return $b['matchCount'] <=> $a['matchCount'];
    });
    // Get the top 3 job matches
    $job_matches = array_slice($job_matches, 0, 3);
    
    return $job_matches;
}
        
?>

