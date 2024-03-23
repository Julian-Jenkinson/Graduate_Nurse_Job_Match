<?php include 'view/header.php'; ?>

<div class="slideshow-container">
        <!-- Slides -->
        <div class="mySlides fade">
          <img src="./Images/ruralnursing.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="./Images/Nursing2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="./Images/Nursing3.jpg" style="width:100%">
          </div>
        <div class="mySlides fade">
            <img src="./Images/ruralnursing2.jpg" style="width:100%">
        </div>  
        
        <!-- Rectangle bar with dots -->
        <div class="rectangle-bar">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
    </div> 
    <div class="wave-background">
        <div class="text-content">
            <h1>Matching <span class="highlight-header">Dreams</span>, Crafting Careers: Where <span class="highlight-header">Precision</span> Meets Opportunity in Healthcare.</h1>
            <p>Explore tailored job searches for nursing and midwifery graduates on the Graduate Nurse/Midwife Job Match platform. Craft your portfolio, discover precise opportunities 
                aligned with your skills, and step into a new era of healthcare employment. Your dream job awaits, let’s get started!</p>
                <div class="rectangle-container">
                    <div class="buttons-wrapper">
                        <!--<button class="sign-in-button">Sign In</button> -->
                        <!-- i like the button but you might need to style the sign in link to look like a buton
                      because i couldnt get the button to redirect to the sign in page very well..-->
                        <a href="/CSC3600-T1-2024_TheITCrew/user/user_login.php" class="button-link">Sign In</a>
                        <a href="/CSC3600-T1-2024_TheITCrew/user/user_signup.php" class="button-link">Register</a>
                    </div>
                    <p class="text">Create an account to unlock personalised job opportunities tailored for nursing and midwifery graduates.</p>
                </div>                
        </div>
    </div>    
    <div class="search-container">
        <div class="input-search-wrapper">
        <div class="input-location-wrapper">
        <img src="./Images/searchicon.png" alt="Search">
        <input type="text" placeholder="Search" />
        <input type="text" placeholder="Location" />
        <select>
          <option value="">Classification</option>
          <option value="class1">Class 1</option>
          <option value="class2">Class 2</option>
        </select>
        <button>Search</button>
      </div>          
      </div>
      <div class="filter-container">
        <a href="#" class="filter-options">More Options</a>
        <img src="./Images/filtericon.png" alt="Filter" class="filter-icon">
    </div>
    </div>
    <p class="job-listings-text">Find your next employer</p>
    <div class="job-listings">
        <div class="job">Job 1 details...</div>
        <div class="job">Job 2 details...</div>
        <div class="job">Job 3 details...</div>
        <div class="job">Job 4 details...</div>
        <div class="job">Job 5 details...</div>
        <div class="job">Job 6 details...</div>
    </div>
    
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
            intent="WELCOME"
            chat-title="FAQ"
            agent-id="b07d004b-20f9-4193-83ad-b23028c19c17"
            language-code="en"
>   </df-messenger>

    <!-- 
    <div class="endwave-svg">
        <div class="info-boxes">
            <h2>Why Choose Us?</h2>
            <div class="info-box">
              <img src="./Images/GISIntegrationMap.png" alt="GIS Integration">
              <h3>GIS Integration</h3>
              <p>GIS integration enhances your job search by providing accurate spatial data, ensuring you find opportunities in locations that align with your preferences and needs.</p>
            </div>
            <div class="info-box">
              <img src="./Images/ModifiedMonashModel.png" alt="Modified Monash Model">
              <h3>Modified Monash Model</h3>
              <p>The Modified Monash Model criteria tailors your job matches based on regional and rural considerations, ensuring you discover healthcare opportunities in locations that match your professional goals.</p>
            </div>
            <div class="info-box">
              <img src="./Images/TravelTimeConsideration.png" alt="Travel Time Consideration">
              <h3>Travel Time Consideration</h3>
              <p>Prioritize convenience with our platform's travel time considerations, ensuring you find healthcare positions that align with your preferences and reduce commuting stress.</p>
            </div>

            <h4>GIS Map</h4>
            i tried but had trouble displaying a map here.. - julian
        
        </div>
    </div> 
-->

<?php include 'view/footer.php'; ?>    
