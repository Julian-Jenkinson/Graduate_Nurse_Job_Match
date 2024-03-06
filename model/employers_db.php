<?php
function get_employer_by_email($email) {
    global $db;
    $query = 'SELECT * FROM employers
              WHERE empEmail = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $employer = $statement->fetch();
    $statement->closeCursor();
    return $employer;
}

?>