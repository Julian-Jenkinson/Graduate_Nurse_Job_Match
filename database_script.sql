-- script to initialse and reset database
DROP DATABASE IF EXISTS job_match;
CREATE DATABASE job_match;
USE job_match;


CREATE TABLE users (
    userID int NOT NULL AUTO_INCREMENT,
    userName varchar(20) NOT NULL,
    password varchar(20) NOT NULL,
    PRIMARY KEY (userID)
);

INSERT INTO users VALUES 
(1002, 'julian', 'password'),
(1003, 'kevin86', 'password'),
(1004, 'GMJ21', 'password');


CREATE TABLE employers (
    empID int NOT NULL AUTO_INCREMENT,
    email varchar(50) NOT NULL UNIQUE,
    password varchar(20) NOT NULL,
    PRIMARY KEY (empID)
);

INSERT INTO employers VALUES 
(1002, 'zuki@cat.com.au', 'password'),
(1003, 'employer@employer.net.au', 'password');


CREATE TABLE jobs (
    jobID int NOT NULL AUTO_INCREMENT,
    jobName varchar(20) NOT NULL,
    jobSalary int NOT NULL,
    jobAddressNumber int NOT NULL,
    jobStreet varchar(20) NOT NULL,
    jobStPrefix varchar(10) NOT NULL,
    jobCity varchar(20) NOT NULL,
    jobState varchar(3) NOT NULL,
    jobPlace varchar(40) NOT NULL,
    jobDescription varchar(8000) NOT NULL,
    jobLat float NOT NULL,
    jobLng float NOT NULL,
    jobAddress varchar(150) NOT NULL,
    PRIMARY KEY (jobID)
);

INSERT INTO jobs VALUES 
(1002, 'Registered Nurse', '60000', '123', 'Currie', 'st','Adelaide','SA', 'Sunshine Coast University Hospital','Work in a hospital emergency room.', '-34.444', '138.216', '6 Doherty st, Birtinya'),
(1003, 'Graduate Midwife', '65000','218', 'Brunswick', 'st','Randwick','NSW', 'Royal Prince Alfred Hospital','Birthing division.', '-33.800', '151.116', '50 Missenden road, Camperdown'),
(1004, 'Nurse', '60000', '123', 'Currie', 'st','Brisbane','QLD', "Royal Brisbane and Woman's Hospital",'Work in a hospital emergency room.', '-27.470', '153.216', 'Butterfield st, herston, QLD, 4006'),
(1005, 'Registered Midwife', '60000', '123', 'Currie', 'st','Tamworth','NSW', 'Tamworth Hospital','Work in a hospital emergency room.', '-31.08', '150.91', 'Dean St, North Tamworth, NSW'),
(1006, 'Registered Nurse', '60000', '123', 'Currie', 'st','Coffs Harbour','NSW', 'Womans and Childrens Hospital','Work in a hospital emergency room.', '-30.296', '153.114', '72 King William Rd, North Adelaide SA 5006, Australia'),
(1007, 'Registered Nurse', '60000', '123', 'Currie', 'st','Alice Springs','NT', 'Alice Springs Hospital','Work in a hospital emergency room.', '-23.698', '133.88', '6 gap road, The Gap, NT ');


-- Create a user named itcrew
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO itcrew@localhost
IDENTIFIED BY 'USQ3600#';