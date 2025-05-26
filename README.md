
# Graduate Nurse Job Match

A Job matching platform matching employment opportunities to nursing and midwifery graduates with a focus on regional and rural Australia 

The Graduate Nurse Job Match was my capstone industry based project in my undergraduate degree. Working with the nursing faculties of USQ and QUT, the task was to see the project though from gathering requirments, research and analysis, project planning, development and deployment of a web based prototype to display the feasability of this project.

## Features 🔥
- **Dynamic web application** - Dynamic web application featuring PHP and SQL database
- **Get job matches that suit you** - Create a profile, fill in your job preferences and get matches that suit you.
- **GIS integration** - GIS map integration lists jobs from the database and displays their location geographically. Users can search for jobs based on loaction - increasing user engagement.
- **Chat bot** - User friendly chat bot to assist users powered by Google Dialogflow
- **User authentication** - User signup, login and logout authentication, including password hashing and cookies
- **Employers + Graduate site** - The Employers site allows organizations to list employment opportunities, which are directly submitted to the database and then displayed on the GIS map. 
- **MVC architecture** - A Model View Controller (MVC) architecture to keep things tidy

## Technology 💫
**Frontend** - HTML, CSS, JS

**Backend** - PHP, SQL

**APIs / Integrations** - Google Maps, Geocoder, Autocomplete and Dialogflow (chatbot) 

**Ops** - AWS, NGINX

## Deployment ✨
To deploy the prototype, I used an AWS S3 Bucket and an EC2 instance running NGINX for web hosting and SQL Server for database hosting. I have since deallocated these resources but the familiarity I gained from using AWS infastructure was invaluable.

## How to use this project 💥
For local development, install XAMPP and phpmyadmin (included in XAMPP installation) to host and connect the web application. Accompanied is a database script file to initialise a dummy SQL database and should be run prior to using.

For XAMPP installation tips. See here:

https://www.geeksforgeeks.org/how-to-set-php-development-environment-in-windows/

Please note that the google API authentication key should be updated for the google maps, autocomplete and geocoded to work. Please enable the appropriate google APIs swell. This key can be updated in the view/header files. I have since deallocated this resources as there are minor fees attached.

## Project Reflection / Improvments  

####**UI/UX Overhaul**

Although functional, for a better UI/UX, an overall CSS overhaul is needed. A cleaner, more modern style and a heavier focus on job recomendation cards would really bring this app to the next level. 

####**RESTful architecture**

The App currently uses traditional monolithic, server-rendered PHP with session-based state and form submissions. In retrospect, a modern RESTful architecture would be more suitable, This would include significant refactoriing decoupling the API from the frontend and creating a restful API to handle database requests.

####**Was PHP the best choice?**

While PHP served the needs of the application and allowed for rapid development using familiar paradigms, it may not have been the most scalable or modern choice for a dynamic job search platform.

If I were to continue with PHP, adopting a modern framework such as Laravel would be highly beneficial. Laravel offers:
  - Built in authentication
  - Cleaner database interactions
  - improved routing and form validation
  - better integration with REST APIs

Alternatively, transitioning to a JavaScript-based stack would provide even greater flexibility and scalability. A React frontend coupled with a Node.js/Express backend would be well-suited for this type of application due to:
  - Clearer seperation between the UI and server logic
  - Dynamic rendering
  - Easier integration with 3rd party API's and modern auth methods (eg. OAuth)
  - A larger ecosystem of support tools (eg Next.js)

Overall, while PHP is capable, a more modern tech stack would better align with industry best practices and user expectations for interactivity, performance, and maintainability.

