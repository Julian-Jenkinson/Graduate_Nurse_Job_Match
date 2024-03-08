<?php
function get_user_by_email($email) {
    global $db;
    $query = 'SELECT * FROM users
              WHERE userEmail = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
}

function add_user($email, $password) {
    global $db;
    $query = 'INSERT INTO users
                 (userEmail, userPassword)
              VALUES
                 (:email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function userExists($email){
    global $db;
    $query = "SELECT COUNT(*) FROM users WHERE userEmail = :email";
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $count = $statement->fetchColumn();
    $statement->closeCursor();
    return $count > 0;

}
?>