<?php

function get_employer_by_email($email)
{
    global $db;
    $query = 'SELECT * FROM employers
              WHERE empEmail = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $employer = $statement->fetch();
    $statement->closeCursor();

    return $employer;
}

function add_employer($email, $password)
{
    global $db;
    $query = 'INSERT INTO employers
                 (empEmail, empPassword)
              VALUES
                 (:email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->bindValue(":password", $password);
    $statement->execute();
    $statement->closeCursor();
}

function employerExists($email)
{
    global $db;
    $query     = "SELECT COUNT(*) FROM employers WHERE empEmail = :email";
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $count = $statement->fetchColumn();
    $statement->closeCursor();

    return $count > 0;
}
