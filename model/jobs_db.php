<?php

function get_jobs()
{
    global $db;
    $query = 'SELECT * FROM jobs
              ORDER BY jobListingDate DESC';
    $statement = $db->prepare($query);
    $statement->execute();
    $jobs = $statement->fetchAll();
    $statement->closeCursor();

    return $jobs;
}

function get_job_by_jobID($jobID)
{
    global $db;
    $query = 'SELECT * FROM jobs
              WHERE jobID = :jobID';
    $statement = $db->prepare($query);
    $statement->bindValue(":jobID", $jobID);
    $statement->execute();
    $job = $statement->fetch();
    $statement->closeCursor();

    return $job;
}

function delete_employers_job($jobID)
{
    global $db;
    $query = 'DELETE FROM jobs
              WHERE jobID = :jobID';
    $statement = $db->prepare($query);
    $statement->bindValue(":jobID", $jobID);
    $statement->execute();
    $statement->closeCursor();
}

function add_job(
    $empID,
    $jobName,
    $jobPlace,
    $jobDescription,
    $jobAboutUs,
    $jobSalary,
    $jobContractType,
    $jobAddress,
    $jobCity,
    $jobState,
    $jobMonashRating,
    $jobListingDate,
    $jobContactEmail,
    $jobLink,
    $jobFacilityType,
    $jobSectorsServices,
    $jobBeds,
    $jobMedicalPracs,
    $jobAlliedHealth,
    $jobVisitingFacilities,
    $jobServPathology,
    $jobServXray,
    $jobServCT,
    $jobServMRI,
    $jobServUltra,
    $jobServNuclear,
    $jobServImmunology,
    $jobServNeurological,
    $jobServLab,
    $jobED,
    $jobPeriop,
    $jobICU,
    $jobSurgical,
    $jobMedical,
    $jobRehab,
    $jobAgedCare,
    $jobAccoms,
    $jobChildCare,
    $jobPrimarySchool,
    $jobHighSchool,
    $jobUniversity,
    $jobCinema,
    $jobLiveMusic,
    $jobSportsClub,
    $jobTheatre,
    $jobCraftClub,
    $jobGym,
    $jobLibrary,
    $jobSupermarket,
    $jobFarmMarket,
    $jobMechanic,
    $jobRetail,
    $jobRestaurants,
    $jobPubs,
    $jobInternet,
    $jobMobileCov,
    $jobBus,
    $jobTrain,
    $jobAirport,
    $jobTaxi,
    $jobEV
) {
    global $db;
    $query = 'INSERT INTO jobs (empID, jobName, jobPlace, jobDescription, jobAboutUs, jobSalary, 
                          jobContractType, jobAddress, jobCity, jobState, jobMonashRating, 
                          jobListingDate, jobContactEmail, jobLink, jobFacilityType, jobSectorsServices, 
                          jobBeds, jobMedicalPracs, jobAlliedHealth, jobVisitingFacilities, 
                          jobServPathology, jobServXray, jobServCT, jobServMRI, jobServUltra, jobServNuclear, 
                          jobServImmunology, jobServNeurological, jobServLab, jobED, jobPeriop, jobICU, 
                          jobSurgical, jobMedical, jobRehab, jobAgedCare, jobAccoms, jobChildCare, 
                          jobPrimarySchool, jobHighSchool, jobUniversity, jobCinema, jobLiveMusic, 
                          jobSportsClub, jobTheatre, jobCraftClub, jobGym, jobLibrary, jobSupermarket, 
                          jobFarmMarket, jobMechanic, jobRetail, jobRestaurants, jobPubs, jobInternet,
                          jobMobileCov, jobBus, jobTrain, jobAirport, jobTaxi, jobEV)

              VALUES (:empID, :jobName, :jobPlace, :jobDescription, :jobAboutUs, :jobSalary, 
                     :jobContractType, :jobAddress, :jobCity, :jobState, :jobMonashRating, 
                     :jobListingDate, :jobContactEmail, :jobLink, :jobFacilityType, :jobSectorsServices, 
                     :jobBeds, :jobMedicalPracs, :jobAlliedHealth, :jobVisitingFacilities, 
                     :jobServPathology, :jobServXray, :jobServCT, :jobServMRI, :jobServUltra, :jobServNuclear, 
                     :jobServImmunology, :jobServNeurological, :jobServLab, :jobED, :jobPeriop, :jobICU, 
                     :jobSurgical, :jobMedical, :jobRehab, :jobAgedCare, :jobAccoms, :jobChildCare, 
                     :jobPrimarySchool, :jobHighSchool, :jobUniversity, :jobCinema, :jobLiveMusic, 
                     :jobSportsClub, :jobTheatre, :jobCraftClub, :jobGym, :jobLibrary, :jobSupermarket, 
                     :jobFarmMarket, :jobMechanic, :jobRetail, :jobRestaurants, :jobPubs, :jobInternet,
                     :jobMobileCov, :jobBus, :jobTrain, :jobAirport, :jobTaxi, :jobEV)';
    $statement = $db->prepare($query);
    $statement->bindValue(":empID", $empID);
    $statement->bindValue(":jobName", $jobName);
    $statement->bindValue(":jobPlace", $jobPlace);
    $statement->bindValue(":jobDescription", $jobDescription);
    $statement->bindValue(":jobAboutUs", $jobAboutUs);
    $statement->bindValue(":jobSalary", $jobSalary);
    $statement->bindValue(":jobContractType", $jobContractType);
    $statement->bindValue(":jobAddress", $jobAddress);
    $statement->bindValue(":jobCity", $jobCity);
    $statement->bindValue(":jobState", $jobState);
    $statement->bindValue(":jobMonashRating", $jobMonashRating);
    $statement->bindValue(":jobListingDate", $jobListingDate);
    $statement->bindValue(":jobContactEmail", $jobContactEmail);
    $statement->bindValue(":jobLink", $jobLink);

    $statement->bindValue(":jobFacilityType", $jobFacilityType);
    $statement->bindValue(":jobSectorsServices", $jobSectorsServices);
    $statement->bindValue(":jobBeds", $jobBeds);
    $statement->bindValue(":jobMedicalPracs", $jobMedicalPracs);
    $statement->bindValue(":jobAlliedHealth", $jobAlliedHealth);
    $statement->bindValue(":jobVisitingFacilities", $jobVisitingFacilities);
    $statement->bindValue(":jobServPathology", $jobServPathology);
    $statement->bindValue(":jobServXray", $jobServXray);
    $statement->bindValue(":jobServCT", $jobServCT);
    $statement->bindValue(":jobServMRI", $jobServMRI);
    $statement->bindValue(":jobServUltra", $jobServUltra);

    $statement->bindValue(":jobServNuclear", $jobServNuclear);
    $statement->bindValue(":jobServImmunology", $jobServImmunology);
    $statement->bindValue(":jobServNeurological", $jobServNeurological);
    $statement->bindValue(":jobServLab", $jobServLab);
    $statement->bindValue(":jobED", $jobED);
    $statement->bindValue(":jobPeriop", $jobPeriop);
    $statement->bindValue(":jobICU", $jobICU);
    $statement->bindValue(":jobSurgical", $jobSurgical);
    $statement->bindValue(":jobMedical", $jobMedical);
    $statement->bindValue(":jobRehab", $jobRehab);

    $statement->bindValue(":jobAgedCare", $jobAgedCare);
    $statement->bindValue(":jobAccoms", $jobAccoms);
    $statement->bindValue(":jobChildCare", $jobChildCare);
    $statement->bindValue(":jobPrimarySchool", $jobPrimarySchool);
    $statement->bindValue(":jobHighSchool", $jobHighSchool);
    $statement->bindValue(":jobUniversity", $jobUniversity);
    $statement->bindValue(":jobCinema", $jobCinema);
    $statement->bindValue(":jobLiveMusic", $jobLiveMusic);
    $statement->bindValue(":jobSportsClub", $jobSportsClub);
    $statement->bindValue(":jobTheatre", $jobTheatre);

    $statement->bindValue(":jobCraftClub", $jobCraftClub);
    $statement->bindValue(":jobGym", $jobGym);
    $statement->bindValue(":jobLibrary", $jobLibrary);
    $statement->bindValue(":jobSupermarket", $jobSupermarket);
    $statement->bindValue(":jobFarmMarket", $jobFarmMarket);
    $statement->bindValue(":jobMechanic", $jobMechanic);
    $statement->bindValue(":jobRetail", $jobRetail);
    $statement->bindValue(":jobRestaurants", $jobRestaurants);
    $statement->bindValue(":jobPubs", $jobPubs);
    $statement->bindValue(":jobInternet", $jobInternet);

    $statement->bindValue(":jobMobileCov", $jobMobileCov);
    $statement->bindValue(":jobBus", $jobBus);
    $statement->bindValue(":jobTrain", $jobTrain);
    $statement->bindValue(":jobAirport", $jobAirport);
    $statement->bindValue(":jobTaxi", $jobTaxi);
    $statement->bindValue(":jobEV", $jobEV);

    $statement->execute();
    $statement->closeCursor();
}

function get_jobs_by_empID($empID)
{
    global $db;
    $query = 'SELECT * FROM jobs
              where empID = :empID
              ORDER BY jobListingDate DESC';
    $statement = $db->prepare($query);
    $statement->bindValue(":empID", $empID);
    $statement->execute();
    $jobs = $statement->fetchAll();
    $statement->closeCursor();

    return $jobs;
}

//fill in more values of job
function update_job(
    $jobID,
    $empID,
    $jobName,
    $jobPlace,
    $jobDescription,
    $jobAboutUs,
    $jobSalary,
    $jobContractType,
    $jobAddress,
    $jobCity,
    $jobState,
    $jobMonashRating,
    $jobListingDate,
    $jobContactEmail,
    $jobLink,
    $jobFacilityType,
    $jobSectorsServices,
    $jobBeds,
    $jobMedicalPracs,
    $jobAlliedHealth,
    $jobVisitingFacilities,
    $jobServPathology,
    $jobServXray,
    $jobServCT,
    $jobServMRI,
    $jobServUltra,
    $jobServNuclear,
    $jobServImmunology,
    $jobServNeurological,
    $jobServLab,
    $jobED,
    $jobPeriop,
    $jobICU,
    $jobSurgical,
    $jobMedical,
    $jobRehab,
    $jobAgedCare,
    $jobAccoms,
    $jobChildCare,
    $jobPrimarySchool,
    $jobHighSchool,
    $jobUniversity,
    $jobCinema,
    $jobLiveMusic,
    $jobSportsClub,
    $jobTheatre,
    $jobCraftClub,
    $jobGym,
    $jobLibrary,
    $jobSupermarket,
    $jobFarmMarket,
    $jobMechanic,
    $jobRetail,
    $jobRestaurants,
    $jobPubs,
    $jobInternet,
    $jobMobileCov,
    $jobBus,
    $jobTrain,
    $jobAirport,
    $jobTaxi,
    $jobEV
) {
    global $db;
    $query = 'UPDATE jobs
              SET empID = :empID, 
                  jobName = :jobName, 
                  jobPlace = :jobPlace, 
                  jobDescription = :jobDescription, 
                  jobAboutUs = :jobAboutUs, 
                  jobSalary = :jobSalary, 
                  jobContractType = :jobContractType, 
                  jobAddress = :jobAddress, 
                  jobCity = :jobCity, 
                  jobState = :jobState, 
                  jobMonashRating = :jobMonashRating, 
                  jobListingDate = :jobListingDate, 
                  jobContactEmail = :jobContactEmail, 
                  jobLink = :jobLink,
                  
                  jobFacilityType = :jobFacilityType,
                  jobSectorsServices = :jobSectorsServices,
                  jobBeds = :jobBeds,
                  jobMedicalPracs = :jobMedicalPracs,
                  jobAlliedHealth = :jobAlliedHealth,
                  jobVisitingFacilities = :jobVisitingFacilities,
                  jobServPathology = :jobServPathology, 
                  jobServXray = :jobServXray, 
                  jobServCT = :jobServCT, 
                  jobServMRI = :jobServMRI, 
                  jobServUltra = :jobServUltra, 
                  jobServNuclear = :jobServNuclear,
                  jobServImmunology = :jobServImmunology, 
                  jobServNeurological = :jobServNeurological, 
                  jobServLab = :jobServLab, 
                  jobED = :jobED, 
                  jobPeriop = :jobPeriop, 
                  jobICU = :jobICU, 
                  jobSurgical = :jobSurgical, 
                  jobMedical = :jobMedical, 
                  jobRehab = :jobRehab, 
                  jobAgedCare = :jobAgedCare, 
                  jobAccoms = :jobAccoms, 
                  jobChildCare = :jobChildCare, 
                  jobPrimarySchool = :jobPrimarySchool, 
                  jobHighSchool = :jobHighSchool, 
                  jobUniversity = :jobUniversity, 
                  jobCinema = :jobCinema, 
                  jobLiveMusic = :jobLiveMusic, 
                  jobSportsClub = :jobSportsClub, 
                  jobTheatre = :jobTheatre, 
                  jobCraftClub = :jobCraftClub, 
                  jobGym = :jobGym, 
                  jobLibrary = :jobLibrary,
                  jobSupermarket = :jobSupermarket, 
                  jobFarmMarket = :jobFarmMarket, 
                  jobMechanic = :jobMechanic, 
                  jobRetail = :jobRetail, 
                  jobRestaurants = :jobRestaurants, 
                  jobPubs = :jobPubs, 
                  jobInternet = :jobInternet,
                  jobMobileCov = :jobMobileCov, 
                  jobBus = :jobBus, 
                  jobTrain = :jobTrain, 
                  jobAirport = :jobAirport, 
                  jobTaxi = :jobTaxi, 
                  jobEV = :jobEV

              WHERE jobID = :jobID';
    $statement = $db->prepare($query);
    $statement->bindValue(":empID", $empID);
    $statement->bindValue(":jobName", $jobName);
    $statement->bindValue(":jobPlace", $jobPlace);
    $statement->bindValue(":jobDescription", $jobDescription);
    $statement->bindValue(":jobAboutUs", $jobAboutUs);
    $statement->bindValue(":jobSalary", $jobSalary);
    $statement->bindValue(":jobContractType", $jobContractType);
    $statement->bindValue(":jobAddress", $jobAddress);
    $statement->bindValue(":jobCity", $jobCity);
    $statement->bindValue(":jobState", $jobState);
    $statement->bindValue(":jobMonashRating", $jobMonashRating);
    $statement->bindValue(":jobListingDate", $jobListingDate);
    $statement->bindValue(":jobContactEmail", $jobContactEmail);
    $statement->bindValue(":jobLink", $jobLink);
    $statement->bindValue(":jobFacilityType", $jobFacilityType);
    $statement->bindValue(":jobSectorsServices", $jobSectorsServices);
    $statement->bindValue(":jobBeds", $jobBeds);
    $statement->bindValue(":jobMedicalPracs", $jobMedicalPracs);
    $statement->bindValue(":jobAlliedHealth", $jobAlliedHealth);
    $statement->bindValue(":jobVisitingFacilities", $jobVisitingFacilities);
    $statement->bindValue(":jobServPathology", $jobServPathology);
    $statement->bindValue(":jobServXray", $jobServXray);
    $statement->bindValue(":jobServCT", $jobServCT);
    $statement->bindValue(":jobServMRI", $jobServMRI);
    $statement->bindValue(":jobServUltra", $jobServUltra);
    $statement->bindValue(":jobServNuclear", $jobServNuclear);
    $statement->bindValue(":jobServImmunology", $jobServImmunology);
    $statement->bindValue(":jobServNeurological", $jobServNeurological);
    $statement->bindValue(":jobServLab", $jobServLab);
    $statement->bindValue(":jobED", $jobED);
    $statement->bindValue(":jobPeriop", $jobPeriop);
    $statement->bindValue(":jobICU", $jobICU);
    $statement->bindValue(":jobSurgical", $jobSurgical);
    $statement->bindValue(":jobMedical", $jobMedical);
    $statement->bindValue(":jobRehab", $jobRehab);
    $statement->bindValue(":jobAgedCare", $jobAgedCare);
    $statement->bindValue(":jobAccoms", $jobAccoms);
    $statement->bindValue(":jobChildCare", $jobChildCare);
    $statement->bindValue(":jobPrimarySchool", $jobPrimarySchool);
    $statement->bindValue(":jobHighSchool", $jobHighSchool);
    $statement->bindValue(":jobUniversity", $jobUniversity);
    $statement->bindValue(":jobCinema", $jobCinema);
    $statement->bindValue(":jobLiveMusic", $jobLiveMusic);
    $statement->bindValue(":jobSportsClub", $jobSportsClub);
    $statement->bindValue(":jobTheatre", $jobTheatre);
    $statement->bindValue(":jobCraftClub", $jobCraftClub);
    $statement->bindValue(":jobGym", $jobGym);
    $statement->bindValue(":jobLibrary", $jobLibrary);
    $statement->bindValue(":jobSupermarket", $jobSupermarket);
    $statement->bindValue(":jobFarmMarket", $jobFarmMarket);
    $statement->bindValue(":jobMechanic", $jobMechanic);
    $statement->bindValue(":jobRetail", $jobRetail);
    $statement->bindValue(":jobRestaurants", $jobRestaurants);
    $statement->bindValue(":jobPubs", $jobPubs);
    $statement->bindValue(":jobInternet", $jobInternet);
    $statement->bindValue(":jobMobileCov", $jobMobileCov);
    $statement->bindValue(":jobBus", $jobBus);
    $statement->bindValue(":jobTrain", $jobTrain);
    $statement->bindValue(":jobAirport", $jobAirport);
    $statement->bindValue(":jobTaxi", $jobTaxi);
    $statement->bindValue(":jobEV", $jobEV);
    $statement->bindValue(":jobID", $jobID);
    $statement->execute();
    $statement->closeCursor();
}

function search_jobs(
    $by_keyword,
    $by_location,
    $by_contract_type,
    $by_rural_type
) {
    global $db;
    $query = "SELECT * FROM jobs WHERE 1=1"; // this allows the ability to add AND clauses

    $params = [];

    if (!empty($by_keyword)) {
        $query .= " AND jobName LIKE :keyword";
        $params[":keyword"] = "%" . $by_keyword . "%";
    }

    if (!empty($by_location)) {
        $query .= " AND (jobCity = :location OR jobState = :location)";
        $params[":location"] = $by_location;
    }

    if (!empty($by_contract_type)) {
        $query .= " AND jobContractType = :contract_type";
        $params[":contract_type"] = $by_contract_type;
    }

    if (!empty($by_rural_type)) {
        $query .= " AND jobMonashRating = :rural_type";
        $params[":rural_type"] = $by_rural_type;
    }

    $statement = $db->prepare($query);
    $statement->execute($params);
    $jobs = $statement->fetchAll();
    $statement->closeCursor();

    return $jobs;
}

function get_job_matches($by_keyword)
{
    global $db;
    $query = 'SELECT * FROM jobs 
              WHERE 1=1';

    $params = [];

    if (!empty($by_keyword)) {
        $query .= " AND jobName LIKE :keyword";
        $params[":keyword"] = "%" . $by_keyword . "%";
    }

    $query .= " ORDER BY jobListingDate DESC";

    $statement = $db->prepare($query);
    $statement->execute($params);
    $jobMatches = $statement->fetchAll();
    $statement->closeCursor();

    return $jobMatches;
}
function get_job_matches_by_city($by_keyword, $by_city)
{
    global $db;
    $query = 'SELECT * FROM jobs 
              WHERE 1=1';

    $params = [];

    if (!empty($by_keyword)) {
        $query .= " AND jobName LIKE :keyword";
        $params[":keyword"] = "%" . $by_keyword . "%";
    }
    if (!empty($by_city)) {
        $query .= " AND jobCity = :by_city";
        $params[":by_city"] = $by_city;
    }

    $query .= " ORDER BY jobListingDate DESC";

    $statement = $db->prepare($query);
    $statement->execute($params);
    $jobMatches = $statement->fetchAll();
    $statement->closeCursor();

    return $jobMatches;
}
function get_job_matches_by_state($by_keyword, $by_state)
{
    global $db;
    $query = 'SELECT * FROM jobs 
              WHERE 1=1';

    $params = [];

    if (!empty($by_keyword)) {
        $query .= " AND jobName LIKE :keyword";
        $params[":keyword"] = "%" . $by_keyword . "%";
    }
    if (!empty($by_state)) {
        $query .= " AND jobState = :by_state";
        $params[":by_state"] = $by_state;
    }

    $query .= " ORDER BY jobListingDate DESC";

    $statement = $db->prepare($query);
    $statement->execute($params);
    $jobMatches = $statement->fetchAll();
    $statement->closeCursor();

    return $jobMatches;
}
