
<?php
//start session cookies
session_start();

//get error messages
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require "../model/database.php";
require "../model/users_db.php";

$action = filter_input(INPUT_POST, "action");
if ($action === null) {
    $action = filter_input(INPUT_GET, "action");
    //is session set then skip login
    if (isset($_SESSION["user"])) {
        $action = "get_user";
    }
    //go to login
    elseif ($action === null) {
        $action = "user_login";
    }
}
$email = "";

if ($action == "user_login") {
    // Display the employer login page
    include "user_login.php";
} elseif ($action == "get_user") {
    //if session is set
    if (isset($_SESSION["user"])) {
        $email    = $_SESSION["userEmail"];
        $password = $_SESSION["userPassword"];
        $user     = get_user_by_email($email);
    }
    //if no session set
    else {
        $email    = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $user     = get_user_by_email($email);
    }
    //check for incorrect credentials
    //verify hashed password
    if ($user == null || !password_verify($password, $user["userPassword"])) {
        $error = "Incorrect email or password.";
        include "../error/user_error.php";
    } elseif ($user) {
        //store user and password in session
        $_SESSION["user"]         = $user;
        $_SESSION["userEmail"]    = $email;
        $_SESSION["userPassword"] = $password;
        include "user_profile.php";
    }
} elseif ($action == "add_user") {
    //get values from user sign in form
    $email     = filter_input(INPUT_POST, "email");
    $password1 = filter_input(INPUT_POST, "password1");
    $password2 = filter_input(INPUT_POST, "password2");
    //validate inputs
    if ($email == null || $password1 == null || $password2 == null) {
        $error = "The email or password is invalid. Please try again";
        include "../error/user_error.php";
    } elseif ($password1 != $password2) {
        $error = "The passwords you entered do not match. Please try again.";
        include "../error/user_error.php";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "The email must be a valid address. Please try again";
        include "../error/user_error.php";
    } elseif (strlen($password1) < 8) {
        $error = "The password must be at least 8 characters. Please try again";
        include "../error/user_error.php";
    } elseif (userExists($email)) {
        $error = "This email address is already taken.";
        include "../error/user_error.php";
    } else {
        //hash password
        $password2 = password_hash($password1, PASSWORD_DEFAULT);
        //add user to database
        add_user($email, $password2);
        $user = get_user_by_email($email);
        //store user and password in session
        $_SESSION["user"]         = $user;
        $_SESSION["userEmail"]    = $email;
        $_SESSION["userPassword"] = $password1;
        include "user_profile.php";
    }
} elseif ($action == "create_profile_button") {
    //display the create/edit profile page
    $user = get_user_by_email($_SESSION["user"]["userEmail"]);
    include "user_edit_profile.php";
} elseif ($action == "edit_profile") {
    //display the create/edit profile page
    //echo $_SESSION['user']['userEmail'];
    $user = get_user_by_email($_SESSION["user"]["userEmail"]);
    include "user_edit_profile.php";
} elseif ($action == "save_profile") {
    $user = get_user_by_email($_SESSION["user"]["userEmail"]);

    //get data from form
    $user_id        = filter_input(INPUT_POST, "user_id");
    $first_name     = filter_input(INPUT_POST, "userFName");
    $last_name      = filter_input(INPUT_POST, "userLName");
    $address        = filter_input(INPUT_POST, "userAddress");
    $city           = filter_input(INPUT_POST, "userCity");
    $state          = filter_input(INPUT_POST, "userState");
    $qualifications = filter_input(INPUT_POST, "userQualifications");
    $jobTitle       = filter_input(INPUT_POST, "jobTitle");

    $sectorPref           = filter_input(INPUT_POST, "sectorPref");
    $userServPathology    = filter_input(INPUT_POST, "userServPathology");
    $userServXray         = filter_input(INPUT_POST, "userServXray");
    $userServCT           = filter_input(INPUT_POST, "userServCT");
    $userServMRI          = filter_input(INPUT_POST, "userServMRI");
    $userServUltra        = filter_input(INPUT_POST, "userServUltra");
    $userServNuclear      = filter_input(INPUT_POST, "userServNuclear");
    $userServImmunology   = filter_input(INPUT_POST, "userServImmunology");
    $userServNeurological = filter_input(INPUT_POST, "userServNeurological");
    $userServLab          = filter_input(INPUT_POST, "userServLab");

    $userED       = filter_input(INPUT_POST, "userED");
    $userPeriop   = filter_input(INPUT_POST, "userPeriop");
    $userICU      = filter_input(INPUT_POST, "userICU");
    $userSurgical = filter_input(INPUT_POST, "userSurgical");

    $userMedical  = filter_input(INPUT_POST, "userMedical");
    $userRehab    = filter_input(INPUT_POST, "userRehab");
    $userAgedCare = filter_input(INPUT_POST, "userAgedCare");

    $userRelocate          = filter_input(INPUT_POST, "userRelocate");
    $userRuralPrefMetro    = filter_input(INPUT_POST, "userRuralPrefMetro");
    $userRuralPrefRegional = filter_input(INPUT_POST, "userRuralPrefRegional");
    $userRuralPrefRural    = filter_input(INPUT_POST, "userRuralPrefRural");
    $userRuralPrefRemote   = filter_input(INPUT_POST, "userRuralPrefRemote");

    $userStaffAccoms = filter_input(INPUT_POST, "userStaffAccoms");

    $userCinema     = filter_input(INPUT_POST, "userCinema");
    $userLiveMusic  = filter_input(INPUT_POST, "userLiveMusic");
    $userSportsClub = filter_input(INPUT_POST, "userSportsClub");
    $userTheatre    = filter_input(INPUT_POST, "userTheatre");
    $userCraftClub  = filter_input(INPUT_POST, "userCraftClub");
    $userGym        = filter_input(INPUT_POST, "userGym");
    $userLibrary    = filter_input(INPUT_POST, "userLibrary");

    $userSupermarket = filter_input(INPUT_POST, "userSupermarket");
    $userFarmMarket  = filter_input(INPUT_POST, "userFarmMarket");
    $userMechanic    = filter_input(INPUT_POST, "userMechanic");
    $userRetail      = filter_input(INPUT_POST, "userRetail");
    $userRestaurants = filter_input(INPUT_POST, "userRestaurants");
    $userPubs        = filter_input(INPUT_POST, "userPubs");

    $userInternet  = filter_input(INPUT_POST, "userInternet");
    $userMobileCov = filter_input(INPUT_POST, "userMobileCov");

    $userBus     = filter_input(INPUT_POST, "userBus");
    $userTrain   = filter_input(INPUT_POST, "userTrain");
    $userAirport = filter_input(INPUT_POST, "userAirport");
    $userTaxi    = filter_input(INPUT_POST, "userTaxi");
    $userEV      = filter_input(INPUT_POST, "userEV");

    $userChildCare     = filter_input(INPUT_POST, "userChildCare");
    $userPrimarySchool = filter_input(INPUT_POST, "userPrimarySchool");
    $userHighSchool    = filter_input(INPUT_POST, "userHighSchool");
    $userUniversity    = filter_input(INPUT_POST, "userUniversity");

    //update user function
    update_user(
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
    );

    //return to user profile page with updated user data
    $email            = filter_input(INPUT_POST, "email");
    $user             = get_user_by_email($_SESSION["user"]["userEmail"]);
    $_SESSION["user"] = $user;
    include "user_profile.php";
}

//this logout not using???
elseif ($action == "logout") {
    //if user logs out
    //remove session variables
    unset($_SESSION["user"]);
    unset($_SESSION["userEmail"]);
    unset($_SESSION["userPassword"]);

    // Redirect to home page
    header("Location: ../home.php");
    exit(); // Stop further execution
}


?>
