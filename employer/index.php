
<?php 
//start session cookies
session_start();

//get error messages
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('../model/database.php');
require('../model/employers_db.php');
require('../model/jobs_db.php');
 
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    //is session set then skip login
    if (isset($_SESSION['employer'])) {
        $action = 'get_employer';
    }
    //go to login
    else if ($action === NULL) {
        $action = 'employer_login';
    }
}
$email = '';

if ($action == 'employer_login') {
    // Display the employer login page
    include('employer_login.php');
}
else if ($action == 'get_employer') {
    //if session is set
    if (isset($_SESSION['employer'])) {
        $email = $_SESSION['empEmail'];        
        $password = $_SESSION['empPassword'];
        $employer = get_employer_by_email($email);
    } 
    //if no session set
    else {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $employer = get_employer_by_email($email);
    } 
    //check for incorrect credentials
    //validating hashed passwords here
    if ($employer == NULL || !password_verify($password, $employer['empPassword'])) {
        $error = "Incorrect email or password.";
        include('../error/employer_error.php');
    }
    else if ($employer){
        //store user and password in session
        $_SESSION['employer'] = $employer; 
        $_SESSION['empEmail'] = $email;        
        $_SESSION['empPassword'] = $password;
        
        
        $empID = $employer['empID'];
        $my_jobs = get_jobs_by_empID($empID);
        $job_count = count($my_jobs);
       
        include('employer_my_jobs.php'); 
    }
    
}
else if ($action == 'add_employer') {        
    //get values from user sign in form
    $email = filter_input(INPUT_POST, 'email');
    $password1 = filter_input(INPUT_POST, 'password1');
    $password2 = filter_input(INPUT_POST, 'password2');
    //validate inputs
    if ($email == NULL || $password1 == NULL || $password2 == NULL) {
        $error = "The email or password is invalid. Please try again";
        include('../error/employer_error.php');
    }
    else if ($password1 != $password2) {
        $error = "The passwords you entered do not match. Please try again.";
        include('../error/employer_error.php');
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "The email must be a valid address. Please try again";
        include('../error/employer_error.php');
    }
    else if (strlen($password1) < 8) {
        $error = "The password must be at least 8 characters. Please try again";
        include('../error/employer_error.php');
    }
    else if(employerExists($email)) {
        $error = "This email address is already taken.";
        include('../error/employer_error.php');
    }
    else {
        //hash password
        $password2 = password_hash($password1, PASSWORD_DEFAULT);
        //add user to database
        add_employer($email, $password2);
        $employer = get_employer_by_email($email);
        //store user and password in session
        $_SESSION['employer'] = $employer; 
        $_SESSION['empEmail'] = $email;        
        $_SESSION['empPassword'] = $password1;
        //just added this to fix bug    
        $empID = $employer['empID'];
        $my_jobs = get_jobs_by_empID($empID);
        $job_count = count($my_jobs);


        include('employer_my_jobs.php');
    }
}
else if ($action == 'delete_listing'){
    $job_ID = filter_input(INPUT_POST, 'jobID');
    delete_employers_job($job_ID);
    
    $employer = $_SESSION['employer'];
    $empID = $employer['empID'];
    $my_jobs = get_jobs_by_empID($empID);
    $job_count = count($my_jobs);

    include('employer_my_jobs.php'); 
}
else if ($action == 'edit_listing'){
    //working
    $job_ID = filter_input(INPUT_POST, 'jobID');

    $job = get_job_by_jobID($job_ID);

    //$employer = $_SESSION['employer'];
    //$empID = $employer['empID'];
    //$my_jobs = get_jobs_by_empID($empID);
    //$job_count = count($my_jobs);
    include('employer_edit_listing.php'); 
}
else if ($action == 'save_changes'){
    $job_ID = filter_input(INPUT_POST, 'jobID');//need this?

    $job = get_job_by_jobID($job_ID);//need this?
   //get form data
   $employer = $_SESSION['employer'];//need this?

   $jobID = filter_input(INPUT_POST, 'jobID');
   $empID = filter_input(INPUT_POST, 'empID');
   $jobName = filter_input(INPUT_POST, 'jobName');
   $jobPlace = filter_input(INPUT_POST, 'jobPlace');
   $jobDescription = filter_input(INPUT_POST, 'jobDescription');
   $jobAboutUs = filter_input(INPUT_POST, 'jobAboutUs');
   $jobSalary = filter_input(INPUT_POST, 'jobSalary');
   $jobContractType = filter_input(INPUT_POST, 'jobContractType');
   
   $jobAddress = filter_input(INPUT_POST, 'jobAddress');
   $jobCity = filter_input(INPUT_POST, 'jobCity');
   $jobState = filter_input(INPUT_POST, 'jobState');

   $jobMonashRating = filter_input(INPUT_POST, 'jobMonashRating');
   $jobListingDate = filter_input(INPUT_POST, 'jobListingDate');
   
   $jobContactEmail = filter_input(INPUT_POST, 'jobContactEmail');
   $jobLink = filter_input(INPUT_POST, 'jobLink');



   $jobFacilityType = filter_input(INPUT_POST, 'jobFacilityType');
   $jobSectorsServices = filter_input(INPUT_POST, 'jobSectorsServiced');
   $jobBeds = filter_input(INPUT_POST, 'jobBeds');
   $jobMedicalPracs = filter_input(INPUT_POST, 'jobMedicalPracs');
   $jobAlliedHealth = filter_input(INPUT_POST, 'jobAlliedHealth');
   $jobVisitingFacilities = filter_input(INPUT_POST, 'jobVisitingFacilities');
    
   $jobServPathology = filter_input(INPUT_POST, 'jobServPathology');
   $jobServXray = filter_input(INPUT_POST, 'jobServXray');
   $jobServCT = filter_input(INPUT_POST, 'jobServCT');
   $jobServMRI = filter_input(INPUT_POST, 'jobServMRI');
   $jobServUltra = filter_input(INPUT_POST, 'jobServUltra');
   $jobServNuclear = filter_input(INPUT_POST, 'jobServNuclear');
   $jobServImmunology = filter_input(INPUT_POST, 'jobServImmunology');
   $jobServNeurological = filter_input(INPUT_POST, 'jobServeNeurological');
   $jobServLab = filter_input(INPUT_POST, 'jobServLab'); 

   $jobED = filter_input(INPUT_POST, 'jobED');
   $jobPeriop = filter_input(INPUT_POST, 'jobPeriop');
   $jobICU = filter_input(INPUT_POST, 'jobICU');
   $jobSurgical = filter_input(INPUT_POST, 'jobSurgical');

   $jobMedical = filter_input(INPUT_POST, 'jobMedical');
   $jobRehab = filter_input(INPUT_POST, 'jobRehab');
   $jobAgedCare = filter_input(INPUT_POST, 'jobAgedCare');

   $jobAccoms = filter_input(INPUT_POST, 'jobAccoms');

   $jobChildCare = filter_input(INPUT_POST, 'jobChildCare');
   $jobPrimarySchool = filter_input(INPUT_POST, 'jobPrimarySchool');
   $jobHighSchool = filter_input(INPUT_POST, 'jobHighSchool');
   $jobUniversity = filter_input(INPUT_POST, 'jobUniversity');

   $jobCinema = filter_input(INPUT_POST, 'jobCinema');
   $jobLiveMusic = filter_input(INPUT_POST, 'jobLiveMusic');
   $jobSportsClub = filter_input(INPUT_POST, 'jobSportsClub');
   $jobTheatre = filter_input(INPUT_POST, 'jobTheatre');
   $jobCraftClub = filter_input(INPUT_POST, 'jobCraftClub');
   $jobGym = filter_input(INPUT_POST, 'jobGym');
   $jobLibrary = filter_input(INPUT_POST, 'jobLibrary');

   $jobSupermarket = filter_input(INPUT_POST, 'jobSupermarket');
   $jobFarmMarket = filter_input(INPUT_POST, 'jobFarmMarket');
   $jobMechanic = filter_input(INPUT_POST, 'jobMechanic');
   $jobRetail = filter_input(INPUT_POST, 'jobRetail');
   $jobRestaurants = filter_input(INPUT_POST, 'jobRestaurants');
   $jobPubs = filter_input(INPUT_POST, 'jobPubs');

   $jobInternet = filter_input(INPUT_POST, 'JobInternet');
   $jobMobileCov = filter_input(INPUT_POST, 'jobMobileCov');

   $jobBus = filter_input(INPUT_POST, 'jobBus');
   $jobTrain = filter_input(INPUT_POST, 'jobTrain');
   $jobAirport = filter_input(INPUT_POST, 'jobAirport');
   $jobTaxi = filter_input(INPUT_POST, 'jobTaxi');
   $jobEV = filter_input(INPUT_POST, 'jobEV');

   //echo $empID;
   $employer = $_SESSION['employer'];
   $empID = isset($employer['empID']) ? $employer['empID'] : null;

   update_job($jobID, $empID, $jobName, $jobPlace, $jobDescription, $jobAboutUs, $jobSalary, 
             $jobContractType, $jobAddress, $jobCity, $jobState, $jobMonashRating, 
             $jobListingDate, $jobContactEmail, $jobLink, $jobFacilityType, $jobSectorsServices, 
             $jobBeds, $jobMedicalPracs, $jobAlliedHealth, $jobVisitingFacilities, 
             $jobServPathology, $jobServXray, $jobServCT, $jobServMRI, $jobServUltra, $jobServNuclear, 
             $jobServImmunology, $jobServNeurological, $jobServLab, $jobED, $jobPeriop, $jobICU, 
             $jobSurgical, $jobMedical, $jobRehab, $jobAgedCare, $jobAccoms, $jobChildCare, 
             $jobPrimarySchool, $jobHighSchool, $jobUniversity, $jobCinema, $jobLiveMusic, 
             $jobSportsClub, $jobTheatre, $jobCraftClub, $jobGym, $jobLibrary,$jobSupermarket, 
             $jobFarmMarket, $jobMechanic, $jobRetail, $jobRestaurants, $jobPubs, $jobInternet,
             $jobMobileCov, $jobBus, $jobTrain, $jobAirport, $jobTaxi, $jobEV);

   $my_jobs = get_jobs_by_empID($empID);
   $job_count = count($my_jobs);

   include('employer_my_jobs.php'); 
}



else if ($action == 'create_job'){
    //should be good
    $employer = $_SESSION['employer'];//need this?
    include('employer_create_listing.php'); 
}
else if ($action == 'add_job'){
    //get form data
    $employer = $_SESSION['employer'];

    $empID = filter_input(INPUT_POST, 'empID');
    $jobName = filter_input(INPUT_POST, 'jobName');
    $jobPlace = filter_input(INPUT_POST, 'jobPlace');
    $jobDescription = filter_input(INPUT_POST, 'jobDescription');
    $jobAboutUs = filter_input(INPUT_POST, 'jobAboutUs');
    $jobSalary = filter_input(INPUT_POST, 'jobSalary');
    $jobContractType = filter_input(INPUT_POST, 'jobContractType');
    
    $jobAddress = filter_input(INPUT_POST, 'jobAddress');
    $jobCity = filter_input(INPUT_POST, 'jobCity');
    $jobState = filter_input(INPUT_POST, 'jobState');

    $jobMonashRating = filter_input(INPUT_POST, 'jobMonashRating');
    $jobListingDate = filter_input(INPUT_POST, 'jobListingDate');
    
    $jobContactEmail = filter_input(INPUT_POST, 'jobContactEmail');
    $jobLink = filter_input(INPUT_POST, 'jobLink');

    $jobFacilityType = filter_input(INPUT_POST, 'jobFacilityType');
    $jobSectorsServices = filter_input(INPUT_POST, 'jobSectorsServices');
    $jobBeds = filter_input(INPUT_POST, 'jobBeds');
    $jobMedicalPracs = filter_input(INPUT_POST, 'jobMedicalPracs');
    $jobAlliedHealth = filter_input(INPUT_POST, 'jobAlliedHealth');
    $jobVisitingFacilities = filter_input(INPUT_POST, 'jobVisitingFacilities');
    
    $jobServPathology = filter_input(INPUT_POST, 'jobServPathology');
    $jobServXray = filter_input(INPUT_POST, 'jobServXray');
    $jobServCT = filter_input(INPUT_POST, 'jobServCT');
    $jobServMRI = filter_input(INPUT_POST, 'jobServMRI');
    $jobServUltra = filter_input(INPUT_POST, 'jobServUltra');
    $jobServNuclear = filter_input(INPUT_POST, 'jobServNuclear');
    $jobServImmunology = filter_input(INPUT_POST, 'jobServImmunology');
    $jobServNeurological = filter_input(INPUT_POST, 'jobServNeurological');
    $jobServLab = filter_input(INPUT_POST, 'jobServLab'); 

    $jobED = filter_input(INPUT_POST, 'jobED');
    $jobPeriop = filter_input(INPUT_POST, 'jobPeriop');
    $jobICU = filter_input(INPUT_POST, 'jobICU');
    $jobSurgical = filter_input(INPUT_POST, 'jobSurgical');

    $jobMedical = filter_input(INPUT_POST, 'jobMedical');
    $jobRehab = filter_input(INPUT_POST, 'jobRehab');
    $jobAgedCare = filter_input(INPUT_POST, 'jobAgedCare');

    $jobAccoms = filter_input(INPUT_POST, 'jobAccoms');

    $jobChildCare = filter_input(INPUT_POST, 'jobChildCare');
    $jobPrimarySchool = filter_input(INPUT_POST, 'jobPrimarySchool');
    $jobHighSchool = filter_input(INPUT_POST, 'jobHighSchool');
    $jobUniversity = filter_input(INPUT_POST, 'jobUniversity');

    $jobCinema = filter_input(INPUT_POST, 'jobCinema');
    $jobLiveMusic = filter_input(INPUT_POST, 'jobLiveMusic');
    $jobSportsClub = filter_input(INPUT_POST, 'jobSportsClub');
    $jobTheatre = filter_input(INPUT_POST, 'jobTheatre');
    $jobCraftClub = filter_input(INPUT_POST, 'jobCraftClub');
    $jobGym = filter_input(INPUT_POST, 'jobGym');
    $jobLibrary = filter_input(INPUT_POST, 'jobLibrary');

    $jobSupermarket = filter_input(INPUT_POST, 'jobSupermarket');
    $jobFarmMarket = filter_input(INPUT_POST, 'jobFarmMarket');
    $jobMechanic = filter_input(INPUT_POST, 'jobMechanic');
    $jobRetail = filter_input(INPUT_POST, 'jobRetail');
    $jobRestaurants = filter_input(INPUT_POST, 'jobRestaurants');
    $jobPubs = filter_input(INPUT_POST, 'jobPubs');

    $jobInternet = filter_input(INPUT_POST, 'jobInternet');
    $jobMobileCov = filter_input(INPUT_POST, 'jobMobileCov');

    $jobBus = filter_input(INPUT_POST, 'jobBus');
    $jobTrain = filter_input(INPUT_POST, 'jobTrain');
    $jobAirport = filter_input(INPUT_POST, 'jobAirport');
    $jobTaxi = filter_input(INPUT_POST, 'jobTaxi');
    $jobEV = filter_input(INPUT_POST, 'jobEV');


    //echo $empID;
    $employer = $_SESSION['employer'];
    $empID = isset($employer['empID']) ? $employer['empID'] : null;

    add_job($empID, $jobName, $jobPlace, $jobDescription, $jobAboutUs, $jobSalary, 
        $jobContractType, $jobAddress, $jobCity, $jobState, $jobMonashRating, 
        $jobListingDate, $jobContactEmail, $jobLink, $jobFacilityType, $jobSectorsServices, 
        $jobBeds, $jobMedicalPracs, $jobAlliedHealth, $jobVisitingFacilities, 
        $jobServPathology, $jobServXray, $jobServCT, $jobServMRI, $jobServUltra, $jobServNuclear, 
        $jobServImmunology, $jobServNeurological, $jobServLab, $jobED, $jobPeriop, $jobICU, 
        $jobSurgical, $jobMedical, $jobRehab, $jobAgedCare, $jobAccoms, $jobChildCare, 
        $jobPrimarySchool, $jobHighSchool, $jobUniversity, $jobCinema, $jobLiveMusic, 
        $jobSportsClub, $jobTheatre, $jobCraftClub, $jobGym, $jobLibrary,$jobSupermarket, 
        $jobFarmMarket, $jobMechanic, $jobRetail, $jobRestaurants, $jobPubs, $jobInternet,
        $jobMobileCov, $jobBus, $jobTrain, $jobAirport, $jobTaxi, $jobEV);

    $my_jobs = get_jobs_by_empID($empID);
    $job_count = count($my_jobs);

    include('employer_my_jobs.php'); 
}




else if ($action == 'view_listing'){
    $job_ID = filter_input(INPUT_POST, 'jobID');
    $job = get_job_by_jobID($job_ID);
    //go to job listing page
    include('../jobs/jobs_view_listing.php'); 
}

//this logout not using???
else if ($action == 'logout') {
    //if customer logs out
    //remove session variables
    session_unset();
    unset($_SESSION['employer']);
    unset($_SESSION['empEmail']);
    unset($_SESSION['empPassword']);
    
    // Redirect to home page
    header('Location: ../home.php');
    exit(); // Stop further execution

}

?>