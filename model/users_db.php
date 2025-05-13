<?php

function get_user_by_email($email)
{
    global $db;
    $query = 'SELECT * FROM users
              WHERE userEmail = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();

    return $user;
}

function add_user($email, $password)
{
    global $db;
    $query = 'INSERT INTO users
                 (userEmail, userPassword)
              VALUES
                 (:email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->bindValue(":password", $password);
    $statement->execute();
    $statement->closeCursor();
}

function update_user(
    $user_id,
    $first_name,
    $last_name,
    $address,
    $city,
    $state,
    $qualifications,
    $jobTitle,
    $sectorPref,
    $userServPathology,
    $userServXray,
    $userServCT,
    $userServMRI,
    $userServUltra,
    $userServNuclear,
    $userServImmunology,
    $userServNeurological,
    $userServLab,
    $userED,
    $userPeriop,
    $userICU,
    $userSurgical,
    $userMedical,
    $userRehab,
    $userAgedCare,
    $userRelocate,
    $userRuralPrefMetro,
    $userRuralPrefRegional,
    $userRuralPrefRural,
    $userRuralPrefRemote,
    $userStaffAccoms,
    $userCinema,
    $userLiveMusic,
    $userSportsClub,
    $userTheatre,
    $userCraftClub,
    $userGym,
    $userLibrary,
    $userSupermarket,
    $userFarmMarket,
    $userMechanic,
    $userRetail,
    $userRestaurants,
    $userPubs,
    $userInternet,
    $userMobileCov,
    $userBus,
    $userTrain,
    $userAirport,
    $userTaxi,
    $userEV,
    $userChildCare,
    $userPrimarySchool,
    $userHighSchool,
    $userUniversity
) {
    global $db;
    $query = 'UPDATE users
              SET userFName = :fname,
                userLName = :lname,           
                userAddress = :address,
                userCity = :city,
                userState = :state,
                userQualifications = :qualifications,
                jobTitle = :jobTitle,
                sectorPref = :sectorPref,
                userServPathology = :userServPathology,
                userServXray = :userServXray,
                userServCT = :userServCT,
                userServMRI = :userServMRI,
                userServUltra = :userServUltra,
                userServNuclear = :userServNuclear,
                userServImmunology = :userServImmunology,
                userServNeurological = :userServNeurological,
                userServLab = :userServLab,
                userED = :userED,
                userPeriop = :userPeriop,
                userICU = :userICU,
                userSurgical = :userSurgical,
                userMedical = :userMedical,
                userRehab = :userRehab,
                userAgedCare = :userAgedCare,
                userRelocate = :userRelocate,
                userRuralPrefMetro = :userRuralPrefMetro,
                userRuralPrefRegional = :userRuralPrefRegional,
                userRuralPrefRural = :userRuralPrefRural,
                userRuralPrefRemote = :userRuralPrefRemote,
                userStaffAccoms = :userStaffAccoms,
                userCinema = :userCinema,
                userLiveMusic = :userLiveMusic,
                userSportsClub = :userSportsClub,
                userTheatre = :userTheatre,
                userCraftClub = :userCraftClub,
                userGym = :userGym,
                userLibrary = :userLibrary,
                userSupermarket = :userSupermarket,
                userFarmMarket = :userFarmMarket,
                userMechanic = :userMechanic,
                userRetail = :userRetail,
                userRestaurants = :userRestaurants,
                userPubs = :userPubs,
                userInternet = :userInternet,
                userMobileCov = :userMobileCov,
                userBus = :userBus,
                userTrain = :userTrain,
                userAirport = :userAirport,
                userTaxi = :userTaxi,
                userEV = :userEV,
                userChildCare = :userChildCare,
                userPrimarySchool = :userPrimarySchool,
                userHighSchool = :userHighSchool,
                userUniversity = :userUniversity
              WHERE userID = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":user_id", $user_id);
    $statement->bindValue(":fname", $first_name);
    $statement->bindValue(":lname", $last_name);
    $statement->bindValue(":address", $address);
    $statement->bindValue(":city", $city);
    $statement->bindValue(":state", $state);
    $statement->bindValue(":qualifications", $qualifications);
    $statement->bindValue(":jobTitle", $jobTitle);
    $statement->bindValue(":sectorPref", $sectorPref);
    $statement->bindValue(":userServPathology", $userServPathology);
    $statement->bindValue(":userServXray", $userServXray);
    $statement->bindValue(":userServCT", $userServCT);
    $statement->bindValue(":userServMRI", $userServMRI);
    $statement->bindValue(":userServUltra", $userServUltra);
    $statement->bindValue(":userServNuclear", $userServNuclear);
    $statement->bindValue(":userServImmunology", $userServImmunology);
    $statement->bindValue(":userServNeurological", $userServNeurological);
    $statement->bindValue(":userServLab", $userServLab);
    $statement->bindValue(":userED", $userED);
    $statement->bindValue(":userPeriop", $userPeriop);
    $statement->bindValue(":userICU", $userICU);
    $statement->bindValue(":userSurgical", $userSurgical);
    $statement->bindValue(":userMedical", $userMedical);
    $statement->bindValue(":userRehab", $userRehab);
    $statement->bindValue(":userAgedCare", $userAgedCare);
    $statement->bindValue(":userRelocate", $userRelocate);
    $statement->bindValue(":userRuralPrefMetro", $userRuralPrefMetro);
    $statement->bindValue(":userRuralPrefRegional", $userRuralPrefRegional);
    $statement->bindValue(":userRuralPrefRural", $userRuralPrefRural);
    $statement->bindValue(":userRuralPrefRemote", $userRuralPrefRemote);
    $statement->bindValue(":userStaffAccoms", $userStaffAccoms);
    $statement->bindValue(":userCinema", $userCinema);
    $statement->bindValue(":userLiveMusic", $userLiveMusic);
    $statement->bindValue(":userSportsClub", $userSportsClub);
    $statement->bindValue(":userTheatre", $userTheatre);
    $statement->bindValue(":userCraftClub", $userCraftClub);
    $statement->bindValue(":userGym", $userGym);
    $statement->bindValue(":userLibrary", $userLibrary);
    $statement->bindValue(":userSupermarket", $userSupermarket);
    $statement->bindValue(":userFarmMarket", $userFarmMarket);
    $statement->bindValue(":userMechanic", $userMechanic);
    $statement->bindValue(":userRetail", $userRetail);
    $statement->bindValue(":userRestaurants", $userRestaurants);
    $statement->bindValue(":userPubs", $userPubs);
    $statement->bindValue(":userInternet", $userInternet);
    $statement->bindValue(":userMobileCov", $userMobileCov);
    $statement->bindValue(":userBus", $userBus);
    $statement->bindValue(":userTrain", $userTrain);
    $statement->bindValue(":userAirport", $userAirport);
    $statement->bindValue(":userTaxi", $userTaxi);
    $statement->bindValue(":userEV", $userEV);
    $statement->bindValue(":userChildCare", $userChildCare);
    $statement->bindValue(":userPrimarySchool", $userPrimarySchool);
    $statement->bindValue(":userHighSchool", $userHighSchool);
    $statement->bindValue(":userUniversity", $userUniversity);
    $statement->execute();
    $statement->closeCursor();
}

function userExists($email)
{
    global $db;
    $query     = "SELECT COUNT(*) FROM users WHERE userEmail = :email";
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $count = $statement->fetchColumn();
    $statement->closeCursor();

    return $count > 0;
}
