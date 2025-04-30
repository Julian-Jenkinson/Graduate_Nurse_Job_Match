
# Graduate Nurse Job Match

A Job matching platform matching employment opportunities to nursing and midwifery graduates with a focus on regional and rural Australia 

The Graduate Nurse Job Match was my capstone industry based project in my undergraduate degree. Working with the nursing faculties of USQ and QUT, the task was to see the project though from gathering requirments, research and analysis, project planning, development and deployment of a web based prototype to display the feasability of this project.

## Features 🔥
- **Dynamic web application** - Dynamic web application featuring PHP and SQL database
- **Get job matches that suit you** - Create an account, fill in your job preferences and get matches that suit you.
- **GIS integration** - GIS integragtion for increased user engagement utilsising Google API's. Services include Maps, Geocoder and Autocomplete .
- **User authentication** - User signup, login and logout authentication, include password hashing and safe data storage
- **MVC architecture** - Model View Controller (MVC) architecture

## Technology 💫
**Frontend** - HTML, CSS, JS

**Backend** - PHP, SQL, AWS, NGINX 

## Deployment ✨
To deploy the prototype, I used an AWS S3 Bucket and an EC2 instance running NGINX for web hosting and SQL Server for database hosting. I have since deallocated these resources but the familiarity I gained from using AWS infastructure was invaluable.

## How to use this project 💥
For local development, install XAMPP and phpmyadmin (included in XAMPP installation) to host and connect the web application. Accompanied is a database script file to initialise a dummy SQL database and should be run prior to using.

For XAMPP installation tips. See here:

https://www.geeksforgeeks.org/how-to-set-php-development-environment-in-windows/

Please note that the google API authentication key should be updated for the google maps, autocomplete and geocoded to work. Please enable the appropriate google APIs swell. This key can be updated in the view/header files. I have since deallocated this resources as there are minor fees attached.


