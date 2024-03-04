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
?>