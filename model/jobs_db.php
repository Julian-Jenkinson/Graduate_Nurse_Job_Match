<?php
function get_jobs() {
    global $db;
    $query = 'SELECT * FROM jobs
              ORDER BY jobName';
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

//fill in more values of job
function add_job($jobName, $jobSalary){
    global $db;
    $query = 'INSERT INTO jobs (jobName, jobSalary)
              VALUES (:jobName, :jobSalary)';
    $statement = $db->prepare($query);
    $statement->bindValue(':jobName', $jobName);
    $statement->bindValue(':jobSalary', $jobSalary);
    $statement->execute();
    $statement->closeCursor();
}

function get_jobs_by_empID($empID){
    global $db;
    $query = 'SELECT * FROM jobs
              where empID = :empID
              ORDER BY jobName';
    $statement = $db->prepare($query);
    $statement->bindValue(':empID', $empID);
    $statement->execute();
    $jobs = $statement->fetchAll();
    $statement->closeCursor();
    return $jobs;
}

//fill in more values of job
function update_job($jobID, $jobName, $jobAddress, $jobSalary){
    global $db;
    $query = 'UPDATE jobs
              SET jobName = :jobName,
                  jobAddress = :jobAddress,
                  jobSalary = :jobSalary
              WHERE jobID = :jobID';
              $statement = $db->prepare($query);
              $statement->bindValue(':jobName', $jobName);
              $statement->bindValue(':jobAddress', $jobAddress);
              $statement->bindValue(':jobSalary', $jobSalary);
              $statement->bindValue(':jobID', $jobID);
              $statement->execute();
              $statement->closeCursor();
}

?>