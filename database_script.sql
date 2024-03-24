-- script to initialse and reset database
DROP DATABASE IF EXISTS job_match;
CREATE DATABASE job_match;
USE job_match;


CREATE TABLE users (
    userID int NOT NULL AUTO_INCREMENT,
    userEmail varchar(50) NOT NULL UNIQUE,
    userPassword varchar(255) NOT NULL,

    userFName varchar(20),
    userLName varchar(20),
    userPhone varchar(20),
    
    userAddress varchar(150),
    userAddressNumber varchar(4),
    userStreet varchar(20),
    userStPrefix varchar(10),
    userCity varchar(20),
    userState varchar(3),
    userPostcode varchar(40),

    userQualifications varchar(50),
    userExperience text,
    userSkills text,
    userInterests text,
    
    userMM1 varchar(1),
    userMM2 varchar(1),
    userMM3 varchar(1),
    userMM4 varchar(1),
    userMM5 varchar(1),
    userMM6 varchar(1),
    userMM7 varchar(1),
    
    PRIMARY KEY (userID)
);

INSERT INTO users (userID, userEmail, userPassword)
VALUES 
(1002, 'j@j.com.au', '$2y$10$gCfUgkSZnonu5DfSjC386OBbMTve6muuPOE2quYcjL0G.p7xLpB3q'),
(1003, 'kev@hotmail.com', '$2y$10$gCfUgkSZnonu5DfSjC386OBbMTve6muuPOE2quYcjL0G.p7xLpB3q'),
(1004, 'GMJ@gmail.com', '$2y$10$a9vxN/RHUENS0AcmfkafBuzpDZSkeY//kB26biAC/Q9RnvoZIZkaC');


CREATE TABLE employers (
    empID int NOT NULL AUTO_INCREMENT,
    empEmail varchar(50) NOT NULL UNIQUE,
    empPassword varchar(255) NOT NULL,
    PRIMARY KEY (empID)
);

INSERT INTO employers VALUES 
(1002, 'zuki@cat.com.au', '$2y$10$a9vxN/RHUENS0AcmfkafBuzpDZSkeY//kB26biAC/Q9RnvoZIZkaC'),
(1003, 'employer@employer.net.au', '$2y$10$a9vxN/RHUENS0AcmfkafBuzpDZSkeY//kB26biAC/Q9RnvoZIZkaC');


CREATE TABLE jobs (
    jobID int NOT NULL AUTO_INCREMENT,
    empID int NOT NULL,
    jobName varchar(20) NOT NULL,
    jobPlace varchar(60),
    jobDescription text,
    jobAboutUs text,
    jobSalary varchar(10),
    jobContractType varchar(10),

    jobAddress varchar(150),
    jobCity varchar(50),
    jobState varchar(3),

    jobMonashRating varchar(25),

    jobListingDate DATE,
    jobContactEmail varchar(50),
    jobLink text,

    jobFacilityType varchar(25),
    jobSectorsServices varchar(25),
    jobBeds int,
    jobMedicalPracs varchar(3),
    jobAlliedHealth varchar(3),
    jobVisitingFacilities varchar(3),
    
    jobServPathology varchar(1),
    jobServXray varchar(1),
    jobServCT varchar(1),
    jobServMRI varchar(1),
    jobServUltra varchar(1),
    jobServNuclear varchar(1),
    jobServImmunology varchar(1),
    jobServNeurological varchar(1),
    jobServLab varchar(1),

    jobED varchar(1),
    jobPeriop varchar(1),
    jobICU varchar(1),
    jobSurgical varchar(1),

    jobMedical varchar(1),
    jobRehab varchar(1),
    jobAgedCare varchar(1),

    jobAccoms varchar(3),

    jobChildCare varchar(1),
    jobPrimarySchool varchar(1),
    jobHighSchool varchar(1),
    jobUniversity varchar(1),

    jobCinema varchar(1),
    jobLiveMusic varchar(1),
    jobSportsClub varchar(1),
    jobTheatre varchar(1),
    jobCraftClub varchar(1),
    jobGym varchar(1),
    jobLibrary varchar(1),

    jobSupermarket varchar(1),
    jobFarmMarket varchar(1),
    jobMechanic varchar(1),
    jobRetail varchar(1),
    jobRestaurants varchar(1),
    jobPubs varchar(1),

    jobInternet varchar(1),
    jobMobileCov varchar(1),

    jobBus varchar(1),
    jobTrain varchar(1),
    jobAirport varchar(1),
    jobTaxi varchar(1),
    jobEV varchar(1),

    PRIMARY KEY (jobID)
);

INSERT INTO jobs VALUES 
(1002, 1002, 'Registered Nurse','Sunshine Coast University Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' ,'78000', 'Full-time', '6 Doherty st, Birtinya', 'Sunshine Coast','QLD','Regional centre', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',870,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','N',''),
(1003, 1002, 'Graduate Nurse','Royal Prince Alfred Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' ,'81000', 'Full-time', '50 Missenden road, Camperdown', 'Sydney','NSW','Metropolitan centre', '2024-02-25','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',870,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1004, 1002, 'Nurse', "Royal Brisbane and Woman's Hospital", 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.',  'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '86000', 'Contract', 'Butterfield st, herston, QLD, 4006', 'Brisbane','QLD','Metropolitan centre', '2024-03-10','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',870,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1005, 1003, 'Registered Midwife','Tamworth Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '72000', 'Full-time', 'Dean St, North Tamworth, NSW', 'Tamworth','NSW','Large rural town', '2024-03-8','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',870,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1006, 1003, 'Registered Midwife','Womans and Childrens Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , 'Casual', '68000', '72 King William Rd, North Adelaide SA 5006, Australia', 'Adelaide','SA','Metropolitan Centre', '2024-03-5', 'apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',870,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1007, 1003, 'Registered Midwife','Alice Springs Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '65000', 'Part-time', '6 gap road, The Gap, NT', 'Alice Springs','NT','Medium rural town', '2024-02-19', 'apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',870,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y');


-- Create a user named itcrew
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO itcrew@localhost
IDENTIFIED BY 'USQ3600#';