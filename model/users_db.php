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

function update_user($user_id, $first_name, $last_name, $phone, $address, $qualifications, $experience, $skills, $interests, $mm1, $mm2, $mm3, $mm4, $mm5, $mm6, $mm7) {
    global $db;
    $query = 'UPDATE users
              SET userFName = :fname,
                  userLName = :lname,
                  userPhone = :phone,
                  userAddress = :address,
                  userQualifications = :qualifications,
                  userExperience = :experience,
                  userSkills = :skills,
                  userInterests = :interests,

                  userMM1 = :mm1,
                  userMM2 = :mm2,
                  userMM3 = :mm3,
                  userMM4 = :mm4,
                  userMM5 = :mm5,
                  userMM6 = :mm6,
                  userMM7 = :mm7
                  
              WHERE userID = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':fname', $first_name);
    $statement->bindValue(':lname', $last_name);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':qualifications', $qualifications);
    $statement->bindValue(':experience', $experience);
    $statement->bindValue(':skills', $skills);
    $statement->bindValue(':interests', $interests);

    $statement->bindValue(':mm1', $mm1);
    $statement->bindValue(':mm2', $mm2);
    $statement->bindValue(':mm3', $mm3);
    $statement->bindValue(':mm4', $mm4);
    $statement->bindValue(':mm5', $mm5);
    $statement->bindValue(':mm6', $mm6);
    $statement->bindValue(':mm7', $mm7);
    
    $statement->bindValue(':user_id', $user_id);
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