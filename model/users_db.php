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

function update_user($user_id, $first_name, $last_name, $address, $city, $state, $qualifications) {
    global $db;
    $query = 'UPDATE users
              SET userFName = :fname,
                  userLName = :lname,           
                  userAddress = :address,
                  userCity = :city,
                  userState = :state,
                  userQualifications = :qualifications



              WHERE userID = :user_id';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':fname', $first_name);
    $statement->bindValue(':lname', $last_name);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':qualifications', $qualifications);



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