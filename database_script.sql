-- Create the database
DROP DATABASE IF EXISTS job_match;
CREATE DATABASE job_match;
USE job_match; -- MySQL command

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

CREATE TABLE jobs (
    jobID int NOT NULL AUTO_INCREMENT,
    jobName varchar(20) NOT NULL,
    jobSalary int NOT NULL,
    PRIMARY KEY (jobID)
);

INSERT INTO jobs VALUES 
(1002, 'Nurse', '60000'),
(1003, 'Midwife', '65000'),
(1004, 'Junior Midwife', '52000');

-- Create a user named itcrew
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO itcrew@localhost
IDENTIFIED BY 'USQ3600#';