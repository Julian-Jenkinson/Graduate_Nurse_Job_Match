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
?>