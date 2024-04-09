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
    userAddress varchar(150),
    userCity varchar(20),
    userState varchar(3),
    userQualifications varchar(50),

    jobTitle varchar(40),
    sectorPref varchar(25),
    
    userServPathology varchar(1),
    userServXray varchar(1),
    userServCT varchar(1),
    userServMRI varchar(1),
    userServUltra varchar(1),
    userServNuclear varchar(1),
    userServImmunology varchar(1),
    userServNeurological varchar(1),
    userServLab varchar(1),

    userED varchar(1),
    userPeriop varchar(1),
    userICU varchar(1),
    userSurgical varchar(1),

    userMedical varchar(1),
    userRehab varchar(1),
    userAgedCare varchar(1),

    userRelocate varchar(6),
    userRuralPrefRemote varchar(1),
    userRuralPrefRural varchar(1),
    userRuralPrefRegional varchar(1),
    userRuralPrefMetro varchar(1),
    userStaffAccoms varchar(6),

    userCinema varchar(1),
    userLiveMusic varchar(1),
    userSportsClub varchar(1),
    userTheatre varchar(1),
    userCraftClub varchar(1),
    userGym varchar(1),
    userLibrary varchar(1),

    userSupermarket varchar(1),
    userFarmMarket varchar(1),
    userMechanic varchar(1),
    userRetail varchar(1),
    userRestaurants varchar(1),
    userPubs varchar(1),

    userChildCare varchar(1),
    userPrimarySchool varchar(1),
    userHighSchool varchar(1),
    userUniversity varchar(1),

    userInternet varchar(1),
    userMobileCov varchar(1),

    userBus varchar(1),
    userTrain varchar(1),
    userAirport varchar(1),
    userTaxi varchar(1),
    userEV varchar(1),
   
    
    PRIMARY KEY (userID)
);

INSERT INTO users (userID, userEmail, userPassword)
VALUES 
(1001, 'ClientsUSQ', '$2y$10$tsB9EkCnJaVSV/i7Tcz67eS8WAIOHWYx0abKftndgFKw6kQ5BrE72'),
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
(1001, 'ClientsUSQ', '$2y$10$tsB9EkCnJaVSV/i7Tcz67eS8WAIOHWYx0abKftndgFKw6kQ5BrE72'),
(1002, 'zuki@cat.com.au', '$2y$10$a9vxN/RHUENS0AcmfkafBuzpDZSkeY//kB26biAC/Q9RnvoZIZkaC'),
(1003, 'employer@employer.net.au', '$2y$10$a9vxN/RHUENS0AcmfkafBuzpDZSkeY//kB26biAC/Q9RnvoZIZkaC');


CREATE TABLE jobs (
    jobID int NOT NULL AUTO_INCREMENT,
    empID int NOT NULL,
    jobName varchar(50) NOT NULL,
    jobPlace varchar(60),
    jobDescription text,
    jobAboutUs text,
    jobSalary varchar(30),
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
    jobBeds varchar(10),
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
(1002, 1001, 'Clinical Nurse','Sunshine Coast University Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' ,'$78,000', 'Full-time', '6 Doherty st, Birtinya', 'Sunshine Coast','QLD','Regional centre', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',570,'Yes','Yes','Yes','Y','Y','','Y','Y','','','Y','Y','','Y','Y','','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','N',''),
(1003, 1001, 'Graduate Nurse','Royal Prince Alfred Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' ,'$81000', 'Full-time', '50 Missenden road, Camperdown', 'Sydney','NSW','Metropolitan area', '2024-02-25','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',920,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','','Y','','Y','Y','','','Y','Y','','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1004, 1001, 'Enrolled Nurse', "Royal Brisbane and Woman's Hospital", 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.',  'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$37 - $42', 'Contract', 'Butterfield st, herston, QLD, 4006', 'Brisbane','QLD','Metropolitan area', '2024-03-10','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',870,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','','','Y','Y','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1005, 1001, 'Registered Midwife','Tamworth Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , 'Negotiable', 'Full-time', 'Dean St, North Tamworth, NSW', 'Tamworth','NSW','Large rural town', '2024-03-8','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',660,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','','Y','Y','','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1006, 1001, 'Registered Midwife','Womans and Childrens Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$68000', 'Casual', '72 King William Rd, North Adelaide SA 5006, Australia', 'Adelaide','SA','Metropolitan area', '2024-03-5', 'apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',770,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','','Y','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1007, 1001, 'Junior Midwife','Alice Springs Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$38 - $46.50', 'Part-time', '6 gap road, The Gap, NT', 'Alice Springs','NT','Medium rural town', '2024-02-19', 'apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',700,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1008, 1002, 'Senior Midwife','Royal Adelaide Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$85,000', 'Full-time', 'North Terrace, Adelaide SA 5000, Australia', 'Adelaide','SA','Metropolitan area', '2024-03-15', 'apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',470,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','','','','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1009, 1002, 'Registered Nurse','Royal Melbourne Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$70,000', 'Full-time', '300 Grattan St, Parkville VIC 3050, Australia', 'Melbourne','VIC','Metropolitan area', '2024-03-20', 'apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',440,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','','','','Y','Yes','','Y','Y','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1010, 1002, 'Clinical Nurse','Royal Childrens Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$80,000', 'Full-time', '50 Flemington Rd, Parkville VIC 3052, Australia', 'Melbourne','VIC','Metropolitan area', '2024-03-18', 'apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Private',339,'Yes','Yes','Yes','Y','Y','','','','Y','Y','Y','Y','Y','Y','','','','','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1011, 1002, 'Registered Nurse','Royal Perth Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$75,000', 'Full-time', '197 Wellington St, Perth WA 6000, Australia', 'Perth','WA','Metropolitan area', '2024-03-22', 'apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Private',568,'Yes','Yes','Yes','Y','Y','Y','Y','','','','','','','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','','','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1012, 1003, 'Clinical Nurse','Royal Hobart Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$78,000', 'Full-time', '48 Liverpool St, Hobart TAS 7000, Australia', 'Hobart','TAS','Metropolitan area', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Private',568,'Yes','Yes','Yes','Y','Y','Y','Y','','','','','','','Y','Y','Y','Y','Y','Y','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','','','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1013, 1003, 'Clinical Nurse','Royal Darwin Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$78,000', 'Full-time', 'Rocklands Dr, Tiwi NT 0810, Australia', 'Darwin','NT','Metropolitan area', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',440,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','','','','Y','Yes','','Y','Y','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
(1014, 1003, 'Registered Nurse','Katherine District Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$78,000', 'Full-time', 'Katherine District Hospital, Giles Street, Katherine NT, Australia, Australia', 'Katherine','NT','Remote community', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',30,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','','','','','','','','',''),
(1015, 1003, 'Registered Nurse','Mount Isa Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$79,000', 'Full-time', 'Mount Isa Hospital, Camooweal Street, Mount Isa City QLD, Australia', 'Mount Isa','QLD','Very remote community', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',30,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','','','','','','','','',''),
(1016, 1003, 'Registered Nurse','Broome Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$88,000', 'Full-time', 'Broome Hospital, Robinson Street, Broome WA, Australia', 'Broome','WA','Remote community', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',30,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','','','','','','','','',''),
(1026, 1003, 'Nurse','St Andrews War Memorial Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$88,000', 'Contract', 'St Andrews War Memorial Hospital, Wickham Terrace, Spring Hill QLD, Australia', 'Brisbane','QLD','Metropolitan area', '2024-03-19','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',306,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','Y','','','Y','','Y','','','','','','','','',''),
(1027, 1003, 'Nurse','Brisbane Private Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$84,000', 'Full-time', 'Brisbane Private Hospital, Wickham Terrace, Brisbane City QLD, Australia', 'Brisbane','QLD','Metropolitan area', '2024-03-11','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Private',300,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','','','','','','','','',''),
(1028, 1003, 'Nurse','Mater Hospital Brisbane', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$85,000', 'Full-time', 'Mater Hospital Brisbane, Raymond Terrace, South Brisbane QLD, Australia', 'Brisbane','QLD','Metropolitan area', '2024-03-10','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Private',306,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','','','','','','','','',''),
(1017, 1003, 'Registered Nurse','Townsville Hospital and Health Service', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$88,000', 'Full-time', '100 Angus Smith Drive, Douglas QLD 4814, Australia', 'Townsville','QLD','Regional centre', '2024-03-25','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',300,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','Y','Y','Y','Y','','','Y','Y','Y','Y','','','','','','','',''),
(1018, 1003, 'Nurse','Toowoomba Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$88,000', 'Full-time', 'Pechey Street, Toowoomba QLD 4350, Australia', 'Toowoomba','QLD','Regional centre', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',300,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','','','','','','','Y','Y',''),
(1019, 1003, 'Registered Nurse',' Coffs Harbour Health Campus', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$98,000', 'Full-time', '345 Pacific Hwy, Coffs Harbour NSW 2450, Australia', 'Coffs Harbour','NSW','Large rural town', '2024-03-26','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',300,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','Y','','','','','','','Y','Yes','','Y','Y','','','','','Y','Y','Y','Y','Y','','','Y','Y','Y','Y','Y','Y','','','',''),
(1020, 1003, 'Registered Nurse','Lismore Base Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$68,000', 'Full-time', '60 Uralba St, Lismore NSW 2480, Australia', 'Lismore','NSW','Large rural town', '2024-03-22','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',300,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','Y','','','','','','Y','Yes','','Y','Y','','Y','','','Y','Y','Y','Y','','','Y','','Y','','','','','','','',''),
(1021, 1003, 'Registered Nurse','Byron Central Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$99,000', 'Full-time', '54 Ewingsdale Rd, Ewingsdale NSW 2481, Australia', 'Ewingsdale','NSW','Medium rural town', '2024-04-05','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',300,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','Y','Y','Y','','','','','Y','Y','','','','','','','','','','',''),
(1022, 1003, 'Registered Nurse','Dunwich Health Service', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$104,000', 'Full-time', '34 Oxley Pde, Dunwich QLD 4183, Australia', 'Dunwich','QLD','Small rural town', '2024-03-15','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',300,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','Y','','','','','','Y','Yes','','Y','Y','','','','','','Y','Y','Y','Y','Y','Y','','','','','Y','Y','Y','Y','',''),
(1023, 1003, 'Registered Nurse','Casino District and Memorial Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$109,000', 'Full-time', '70A Canterbury St, Casino, NSW 2470', 'Casino','NSW','Medium rural town', '2024-03-15','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',300,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','','','','','','','','','Y'),
(1024, 1003, 'Registered Nurse','Kilcoy Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$78,000', 'Full-time', '12 Kropp Street, Kilcoy QLD 4515, Australia', 'Kilcoy','QLD','Small rural town', '2024-03-16','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',306,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','Y','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','','Y','','','','','Y','',''),
(1025, 1003, 'Nurse','St George Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$73,000', 'Full-time', 'Victoria St, St George, Qld, 4487 ', 'St George','QLD','Remote community', '2024-03-19','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',306,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','','','','','','','','','Y','Yes','','Y','Y','','','','','','','','','','','','','Y','','','','','','','',''),
(1099, 1003, 'Clinical Nurse','Royal Canberra Hospital', 'The job involves working in a hospiatal birthing division and tending to paitents who have recently given birth or require asssistance with their infants.', 'This public hospital is run by the state government and well known for its efficient and caring medical attention.' , '$78,000', 'Full-time', 'Yamba Dr, Garran ACT 2605, Australia', 'Canberra','ACT','Remote community', '2024-03-12','apply@humanresources.gov.au','https://metronorth.health.qld.gov.au/rbwh/','Hospital','Public',440,'Yes','Yes','Yes','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','','','','Y','Yes','','Y','Y','','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y');

-- Create a user named itcrew
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO itcrew@localhost
IDENTIFIED BY 'USQ3600#';