<?php
function get_jobs() {
    global $db;
    $query = 'SELECT * FROM jobs
              ORDER BY jobListingDate DESC';
    $statement = $db->prepare($query);
    $statement->execute();
    $jobs = $statement->fetchAll();
    $statement->closeCursor();
    return $jobs;
}

function get_job_by_jobID($jobID) {
    global $db;
    $query = 'SELECT * FROM jobs
              WHERE jobID = :jobID';
    $statement = $db->prepare($query);
    $statement->bindValue(':jobID', $jobID);
    $statement->execute();
    $job = $statement->fetch();
    $statement->closeCursor();
    return $job;
}

function delete_employers_job($jobID) {
    global $db;
    $query = 'DELETE FROM jobs
              WHERE jobID = :jobID';
    $statement = $db->prepare($query);
    $statement->bindValue(':jobID', $jobID);
    $statement->execute();
    $statement->closeCursor();
}

function add_job($empID, $jobName, $jobPlace, $jobDescription, $jobAboutUs, $jobSalary, 
            $jobContractType, $jobAddress, $jobCity, $jobState, $jobMonashRating, 
            $jobListingDate, $jobContactEmail, $jobLink, $jobFacilityType, $jobSectorsServices, 
            $jobBeds, $jobMedicalPracs, $jobAlliedHealth, $jobVisitingFacilities, 
            $jobServPathology, $jobServXray, $jobServCT, $jobServMRI, $jobServUltra, $jobServNuclear, 
            $jobServImmunology, $jobServNeurological, $jobServLab, $jobED, $jobPeriop, $jobICU, 
            $jobSurgical, $jobMedical, $jobRehab, $jobAgedCare, $jobAccoms, $jobChildCare, 
            $jobPrimarySchool, $jobHighSchool, $jobUniversity, $jobCinema, $jobLiveMusic, 
            $jobSportsClub, $jobTheatre, $jobCraftClub, $jobGym, $jobLibrary,$jobSupermarket, 
            $jobFarmMarket, $jobMechanic, $jobRetail, $jobRestaurants, $jobPubs, $jobInternet,
            $jobMobileCov, $jobBus, $jobTrain, $jobAirport, $jobTaxi, $jobEV){
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
    $statement->bindValue(':empID', $empID);
    $statement->bindValue(':jobName', $jobName);
    $statement->bindValue(':jobPlace', $jobPlace);
    $statement->bindValue(':jobDescription', $jobDescription);
    $statement->bindValue(':jobAboutUs', $jobAboutUs);
    $statement->bindValue(':jobSalary', $jobSalary);
    $statement->bindValue(':jobContractType', $jobContractType);
    $statement->bindValue(':jobAddress', $jobAddress);
    $statement->bindValue(':jobCity', $jobCity);
    $statement->bindValue(':jobState', $jobState);
    $statement->bindValue(':jobMonashRating', $jobMonashRating);
    $statement->bindValue(':jobListingDate', $jobListingDate);
    $statement->bindValue(':jobContactEmail', $jobContactEmail);
    $statement->bindValue(':jobLink', $jobLink);
    
    $statement->bindValue(':jobFacilityType', $jobFacilityType);
    $statement->bindValue(':jobSectorsServices', $jobSectorsServices);
    $statement->bindValue(':jobBeds', $jobBeds);
    $statement->bindValue(':jobMedicalPracs', $jobMedicalPracs);
    $statement->bindValue(':jobAlliedHealth', $jobAlliedHealth);
    $statement->bindValue(':jobVisitingFacilities', $jobVisitingFacilities);
    $statement->bindValue(':jobServPathology', $jobServPathology);
    $statement->bindValue(':jobServXray', $jobServXray);
    $statement->bindValue(':jobServCT', $jobServCT);
    $statement->bindValue(':jobServMRI', $jobServMRI);
    $statement->bindValue(':jobServUltra', $jobServUltra);

    $statement->bindValue(':jobServNuclear', $jobServNuclear);
    $statement->bindValue(':jobServImmunology', $jobServImmunology);
    $statement->bindValue(':jobServNeurological', $jobServNeurological);
    $statement->bindValue(':jobServLab', $jobServLab);
    $statement->bindValue(':jobED', $jobED);
    $statement->bindValue(':jobPeriop', $jobPeriop);
    $statement->bindValue(':jobICU', $jobICU);
    $statement->bindValue(':jobSurgical', $jobSurgical);
    $statement->bindValue(':jobMedical', $jobMedical);
    $statement->bindValue(':jobRehab', $jobRehab);

    $statement->bindValue(':jobAgedCare', $jobAgedCare);
    $statement->bindValue(':jobAccoms', $jobAccoms);
    $statement->bindValue(':jobChildCare', $jobChildCare);
    $statement->bindValue(':jobPrimarySchool', $jobPrimarySchool);
    $statement->bindValue(':jobHighSchool', $jobHighSchool);
    $statement->bindValue(':jobUniversity', $jobUniversity);
    $statement->bindValue(':jobCinema', $jobCinema);
    $statement->bindValue(':jobLiveMusic', $jobLiveMusic);
    $statement->bindValue(':jobSportsClub', $jobSportsClub);
    $statement->bindValue(':jobTheatre', $jobTheatre);

    $statement->bindValue(':jobCraftClub', $jobCraftClub);
    $statement->bindValue(':jobGym', $jobGym);
    $statement->bindValue(':jobLibrary', $jobLibrary);
    $statement->bindValue(':jobSupermarket', $jobSupermarket);
    $statement->bindValue(':jobFarmMarket', $jobFarmMarket);
    $statement->bindValue(':jobMechanic', $jobMechanic);
    $statement->bindValue(':jobRetail', $jobRetail);
    $statement->bindValue(':jobRestaurants', $jobRestaurants);
    $statement->bindValue(':jobPubs', $jobPubs);
    $statement->bindValue(':jobInternet', $jobInternet);

    $statement->bindValue(':jobMobileCov', $jobMobileCov);
    $statement->bindValue(':jobBus', $jobBus);
    $statement->bindValue(':jobTrain', $jobTrain);
    $statement->bindValue(':jobAirport', $jobAirport);
    $statement->bindValue(':jobTaxi', $jobTaxi);
    $statement->bindValue(':jobEV', $jobEV);

    $statement->execute();
    $statement->closeCursor();
}



function get_jobs_by_empID($empID){
    global $db;
    $query = 'SELECT * FROM jobs
              where empID = :empID
              ORDER BY jobListingDate DESC';
    $statement = $db->prepare($query);
    $statement->bindValue(':empID', $empID);
    $statement->execute();
    $jobs = $statement->fetchAll();
    $statement->closeCursor();
    return $jobs;
}

//fill in more values of job
function update_job($jobID, $empID, $jobName, $jobPlace, $jobDescription, $jobAboutUs, $jobSalary, 
                    $jobContractType, $jobAddress, $jobCity, $jobState, $jobMonashRating, 
                    $jobListingDate, $jobContactEmail, $jobLink){
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
                  jobLink = :jobLink
              WHERE jobID = :jobID';
              $statement = $db->prepare($query);
              $statement->bindValue(':empID', $empID);
              $statement->bindValue(':jobName', $jobName);
              $statement->bindValue(':jobPlace', $jobPlace);
              $statement->bindValue(':jobDescription', $jobDescription);
              $statement->bindValue(':jobAboutUs', $jobAboutUs);
              $statement->bindValue(':jobSalary', $jobSalary);
              $statement->bindValue(':jobContractType', $jobContractType);
              $statement->bindValue(':jobAddress', $jobAddress);
              $statement->bindValue(':jobCity', $jobCity);
              $statement->bindValue(':jobState', $jobState);
              $statement->bindValue(':jobMonashRating', $jobMonashRating);
              $statement->bindValue(':jobListingDate', $jobListingDate);
              $statement->bindValue(':jobContactEmail', $jobContactEmail);
              $statement->bindValue(':jobLink', $jobLink);
              $statement->bindValue(':jobID', $jobID);
              $statement->execute();
              $statement->closeCursor();
}
function count_jobs(){
    
}

?>