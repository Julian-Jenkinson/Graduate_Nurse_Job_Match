
<?php
// This function is the job match algorithm to give recommendations to users
function job_match($user)
{
    // Get job title from user input
    $by_keyword = $user["jobTitle"];
    $by_state   = $user["userState"];
    $by_city    = $user["userCity"];

    // Check if the user wishes to relocate
    if ($user["userRelocate"] === "Yes" || $user["userRelocate"] === "Unsure") {
        //looking for jobs any where
        // This function queries the DB
        $job_matches = get_job_matches($by_keyword);
        // trim back to 3 best matches
        $job_matches = best_3_matches($job_matches, $user);

        return $job_matches;
    } elseif ($user["userRelocate"] === "No") {
        //looking for jobs in same city
        $job_matches = get_job_matches_by_city($by_keyword, $by_city);
        //often comes empty as city is often listed as supburb

        if (count($job_matches) === 0) {
            //looking for jobs in same state
            $job_matches = get_job_matches_by_state($by_keyword, $by_state);
            // trim back to 3 best matches
            $job_matches = best_3_matches($job_matches, $user);

            return $job_matches;
        } else {
            // trim back to 3 best matches
            $job_matches = best_3_matches($job_matches, $user);

            return $job_matches;
        }
    }
}

function best_3_matches($job_matches, $user)
{
    //trim to 3 best matches
    //create a counter on each job to increment for each match
    //between job listing and user profile

    foreach ($job_matches as &$job) {
        $job["matchCount"] = 0;
        //check for matches between job listing and user profile

        //rural ratings
        if (
            $job["jobMonashRating"]     === "Metropolitan area" &&
            $user["userRuralPrefMetro"] === "Y"
        ) {
            $job["matchCount"] = $job["matchCount"] + 5;
        }
        if (
            $job["jobMonashRating"]        === "Regional centre" &&
            $user["userRuralPrefRegional"] === "Y"
        ) {
            $job["matchCount"] = $job["matchCount"] + 5;
        }
        if (
            $job["jobMonashRating"]     === "Large rural town" &&
            $user["userRuralPrefRural"] === "Y"
        ) {
            $job["matchCount"] = $job["matchCount"] + 5;
        }
        if (
            $job["jobMonashRating"]     === "Medium rural town" &&
            $user["userRuralPrefRural"] === "Y"
        ) {
            $job["matchCount"] = $job["matchCount"] + 5;
        }
        if (
            $job["jobMonashRating"]     === "Small rural town" &&
            $user["userRuralPrefRural"] === "Y"
        ) {
            $job["matchCount"] = $job["matchCount"] + 5;
        }
        if (
            $job["jobMonashRating"]      === "Remote community" &&
            $user["userRuralPrefRemote"] === "Y"
        ) {
            $job["matchCount"] = $job["matchCount"] + 5;
        }
        if (
            $job["jobMonashRating"]      === "Very remote community" &&
            $user["userRuralPrefRemote"] === "Y"
        ) {
            $job["matchCount"] = $job["matchCount"] + 5;
        }
        //public or private
        if ($job["jobSectorsServices"] === $user["sectorPref"]) {
            $job["matchCount"] = $job["matchCount"] + 5;
        }

        //job services
        if (
            $job["jobServPathology"]   === "Y" &&
            $user["userServPathology"] === "Y"
        ) {
            $job["matchCount"]++;
        }
        if ($job["jobServXray"] === "Y" && $user["userServXray"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobServCT"] === "Y" && $user["userServCT"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobServMRI"] === "Y" && $user["userServMRI"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobServUltra"] === "Y" && $user["userServUltra"] === "Y") {
            $job["matchCount"]++;
        }
        if (
            $job["jobServNuclear"]   === "Y" &&
            $user["userServNuclear"] === "Y"
        ) {
            $job["matchCount"]++;
        }
        if (
            $job["jobServImmunology"]   === "Y" &&
            $user["userServImmunology"] === "Y"
        ) {
            $job["matchCount"]++;
        }
        if (
            $job["jobServNeurological"]   === "Y" &&
            $user["userServNeurological"] === "Y"
        ) {
            $job["matchCount"]++;
        }
        if ($job["jobServLab"] === "Y" && $user["userServLab"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobED"] === "Y" && $user["userED"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobPeriop"] === "Y" && $user["userPeriop"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobICU"] === "Y" && $user["userICU"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobSurgical"] === "Y" && $user["userSurgical"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobMedical"] === "Y" && $user["userMedical"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobRehab"] === "Y" && $user["userRehab"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobAgedCare"] === "Y" && $user["userAgedCare"] === "Y") {
            $job["matchCount"]++;
        }
        //locality preferences
        if ($job["jobChildCare"] === "Y" && $user["userChildCare"] === "Y") {
            $job["matchCount"]++;
        }
        if (
            $job["jobPrimarySchool"]   === "Y" &&
            $user["userPrimarySchool"] === "Y"
        ) {
            $job["matchCount"]++;
        }
        if ($job["jobHighSchool"] === "Y" && $user["userHighSchool"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobUniversity"] === "Y" && $user["userUniversity"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobCinema"] === "Y" && $user["userCinema"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobLiveMusic"] === "Y" && $user["userLiveMusic"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobSportsClub"] === "Y" && $user["userSportsClub"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobTheatre"] === "Y" && $user["userTheatre"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobCraftClub"] === "Y" && $user["userCraftClub"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobGym"] === "Y" && $user["userGym"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobLibrary"] === "Y" && $user["userLibrary"] === "Y") {
            $job["matchCount"]++;
        }
        if (
            $job["jobSupermarket"]   === "Y" &&
            $user["userSupermarket"] === "Y"
        ) {
            $job["matchCount"]++;
        }
        if ($job["jobFarmMarket"] === "Y" && $user["userFarmMarket"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobMechanic"] === "Y" && $user["userMechanic"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobRetail"] === "Y" && $user["userRetail"] === "Y") {
            $job["matchCount"]++;
        }
        if (
            $job["jobRestaurants"]   === "Y" &&
            $user["userRestaurants"] === "Y"
        ) {
            $job["matchCount"]++;
        }
        if ($job["jobPubs"] === "Y" && $user["userPubs"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobInternet"] === "Y" && $user["userInternet"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobMobileCov"] === "Y" && $user["userMobileCov"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobBus"] === "Y" && $user["userBus"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobTrain"] === "Y" && $user["userTrain"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobAirport"] === "Y" && $user["userAirport"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobTaxi"] === "Y" && $user["userTaxi"] === "Y") {
            $job["matchCount"]++;
        }
        if ($job["jobEV"] === "Y" && $user["userEV"] === "Y") {
            $job["matchCount"]++;
        }

        //testing
        //echo $job['jobName'] . ' ' . $job['matchCount'] . '<br>';
    }

    // Sort the job matches by match count in descending order
    usort($job_matches, function ($a, $b) {
        return $b["matchCount"] <=> $a["matchCount"];
    });
    // Get the top 3 job matches
    $job_matches = array_slice($job_matches, 0, 3);

    return $job_matches;
}
?>

