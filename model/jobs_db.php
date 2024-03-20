<?php
function get_jobs() {
    global $db;
    $query = 'SELECT * FROM jobs
              ORDER BY jobListingDate DESC';
    $statement = $db->prepare($query);
    $statement->execute();
    $jobs = $statement->fetchAll();
    $statement->closeCursor();
    return $jobs;
}

function get_job_by_jobID($jobID) {
    global $db;
    $query = 'SELECT * FROM jobs
              WHERE jobID = :jobID';
    $statement = $db->prepare($query);
    $statement->bindValue(':jobID', $jobID);
    $statement->execute();
    $job = $statement->fetch();
    $statement->closeCursor();
    return $job;
}

function delete_employers_job($jobID) {
    global $db;
    $query = 'DELETE FROM jobs
              WHERE jobID = :jobID';
    $statement = $db->prepare($query);
    $statement->bindValue(':jobID', $jobID);
    $statement->execute();
    $statement->closeCursor();
}

function add_job($empID, $jobName, $jobPlace, $jobDescription, $jobAboutUs, $jobSalary, 
            $jobContractType, $jobAddress, $jobCity, $jobState, $jobMonashRating, 
            $jobListingDate, $jobContactEmail, $jobLink){
    global $db;
    $query = 'INSERT INTO jobs (empID, jobName, jobPlace, jobDescription, jobAboutUs, jobSalary, 
                          jobContractType, jobAddress, jobCity, jobState, jobMonashRating, 
                          jobListingDate, jobContactEmail, jobLink)
              VALUES (:empID, :jobName, :jobPlace, :jobDescription, :jobAboutUs, :jobSalary, 
                     :jobContractType, :jobAddress, :jobCity, :jobState, :jobMonashRating, 
                     :jobListingDate, :jobContactEmail, :jobLink)';
    $statement = $db->prepare($query);
    $statement->bindValue(':empID', $empID);
    $statement->bindValue(':jobName', $jobName);
    $statement->bindValue(':jobPlace', $jobPlace);
    $statement->bindValue(':jobDescription', $jobDescription);
    $statement->bindValue(':jobAboutUs', $jobAboutUs);
    $statement->bindValue(':jobSalary', $jobSalary);
    $statement->bindValue(':jobContractType', $jobContractType);
    $statement->bindValue(':jobAddress', $jobAddress);
    $statement->bindValue(':jobCity', $jobCity);
    $statement->bindValue(':jobState', $jobState);
    $statement->bindValue(':jobMonashRating', $jobMonashRating);
    $statement->bindValue(':jobListingDate', $jobListingDate);
    $statement->bindValue(':jobContactEmail', $jobContactEmail);
    $statement->bindValue(':jobLink', $jobLink);
    $statement->execute();
    $statement->closeCursor();
}



function get_jobs_by_empID($empID){
    global $db;
    $query = 'SELECT * FROM jobs
              where empID = :empID
              ORDER BY jobListingDate DESC';
    $statement = $db->prepare($query);
    $statement->bindValue(':empID', $empID);
    $statement->execute();
    $jobs = $statement->fetchAll();
    $statement->closeCursor();
    return $jobs;
}

//fill in more values of job
function update_job($empID, $jobName, $jobPlace, $jobDescription, $jobAboutUs, $jobSalary, 
                    $jobContractType, $jobAddress, $jobCity, $jobState, $jobMonashRating, 
                    $jobListingDate, $jobContactEmail, $jobLink){
    global $db;
    $query = 'UPDATE jobs
              SET empID = :empID, 
                  jobName = :jobName, 
                  jobPlace = :jobPlace, 
                  jobDescription = :jobDescription, 
                  jobAboutUs = :jobAboutUs, 
                  jobSalary = :jobSalary, 
                  jobContractType = :jobContractType, 
                  jobAddress = :jobAddress, 
                  jobCity = :jobCity, 
                  jobState = :jobState, 
                  jobMonashRating = :jobMonashRating, 
                  jobListingDate = :jobListingDate, 
                  jobContactEmail = :jobContactEmail, 
                  jobLink = :jobLink
              WHERE jobID = :jobID';
              $statement = $db->prepare($query);
              $statement->bindValue(':empID', $empID);
              $statement->bindValue(':jobName', $jobName);
              $statement->bindValue(':jobPlace', $jobPlace);
              $statement->bindValue(':jobDescription', $jobDescription);
              $statement->bindValue(':jobAboutUs', $jobAboutUs);
              $statement->bindValue(':jobSalary', $jobSalary);
              $statement->bindValue(':jobContractType', $jobContractType);
              $statement->bindValue(':jobAddress', $jobAddress);
              $statement->bindValue(':jobCity', $jobCity);
              $statement->bindValue(':jobState', $jobState);
              $statement->bindValue(':jobMonashRating', $jobMonashRating);
              $statement->bindValue(':jobListingDate', $jobListingDate);
              $statement->bindValue(':jobContactEmail', $jobContactEmail);
              $statement->bindValue(':jobLink', $jobLink);
              $statement->bindValue(':jobID', $jobID);
              $statement->execute();
              $statement->closeCursor();
}
function count_jobs(){
    
}

?>