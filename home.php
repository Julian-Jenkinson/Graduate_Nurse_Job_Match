<?php include 'view/home_header.php'; ?>

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
                        <a href="/Graduate_Nurse_Job_Match/user/user_login.php" class="button-link">Sign In</a>
                        <a href="/Graduate_Nurse_Job_Match/user/user_signup.php" class="button-link">Register</a>
                    </div>
                    <p class="text">Create an account to unlock personalised job opportunities tailored for nursing and midwifery graduates.</p>
                </div>                
        </div>
    </div>    
    
    <div class="search-container">

    <form action="." method="post">    
    <table>
        <tr>
            <td>Keyword</td>
            <td>Location</td>
        </tr>
        <tr>
            <td><input type="text" name="by_keyword" placeholder="Registered Nurse" value="<?php echo isset($_POST['by_keyword']) ? htmlspecialchars($_POST['by_keyword']) : ''; ?>"></td>
            <td><input type="text" name="by_location" placeholder="Brisbane" value="<?php echo isset($_POST['by_location']) ? htmlspecialchars($_POST['by_location']) : ''; ?>"></td>
            <td><input type="submit" value="Search jobs"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <select name="by_contract_type">
                    <option value="" selected>Any contract type</option>
                    <option value="Full-time" <?php if(isset($_POST['by_contract_type']) && $_POST['by_contract_type'] == 'Full-time') echo 'selected'; ?>>Full-time</option>
                    <option value="Part-time" <?php if(isset($_POST['by_contract_type']) && $_POST['by_contract_type'] == 'Part-time') echo 'selected'; ?>>Part-time</option>
                    <option value="Casual" <?php if(isset($_POST['by_contract_type']) && $_POST['by_contract_type'] == 'Casual') echo 'selected'; ?>>Casual</option>
                    <option value="Contract" <?php if(isset($_POST['by_contract_type']) && $_POST['by_contract_type'] == 'Contract') echo 'selected'; ?>>Contract</option>
                    <option value="Temporary" <?php if(isset($_POST['by_contract_type']) && $_POST['by_contract_type'] == 'Temporary') echo 'selected'; ?>>Temporary</option>
                </select>
            </td>
            <td>
                <select name="by_rural_type">
                    <option value="" selected>Any rural type</option>
                    <option value="Metropolitan area" <?php if(isset($_POST['by_rural_type']) && $_POST['by_rural_type'] == 'Metropolitan area') echo 'selected'; ?>>Metropolitan area</option>
                    <option value="Regional centre" <?php if(isset($_POST['by_rural_type']) && $_POST['by_rural_type'] == 'Regional centre') echo 'selected'; ?>>Regional centre</option>
                    <option value="Large rural town" <?php if(isset($_POST['by_rural_type']) && $_POST['by_rural_type'] == 'Large rural town') echo 'selected'; ?>>Large rural town</option>
                    <option value="Medium rural town" <?php if(isset($_POST['by_rural_type']) && $_POST['by_rural_type'] == 'Medium rural town') echo 'selected'; ?>>Medium rural town</option>
                    <option value="Small rural town" <?php if(isset($_POST['by_rural_type']) && $_POST['by_rural_type'] == 'Small rural town') echo 'selected'; ?>>Small rural town</option>
                    <option value="Remote community" <?php if(isset($_POST['by_rural_type']) && $_POST['by_rural_type'] == 'Remote community') echo 'selected'; ?>>Remote community</option>
                    <option value="Very remote community" <?php if(isset($_POST['by_rural_type']) && $_POST['by_rural_type'] == 'Very remote community') echo 'selected'; ?>>Very remote community</option>
                </select>
            </td>
        </tr>
    </table><br><br>
    <input type="hidden" name="action" value="search_jobs">
</form>
        
        <!--
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
      </div>-->
    </div>
    <!--
    <p class="job-listings-text">Find your next employer</p>
    <div class="job-listings">
        <div class="job">Job 1 details...</div>
        <div class="job">Job 2 details...</div>
        <div class="job">Job 3 details...</div>
        <div class="job">Job 4 details...</div>
        <div class="job">Job 5 details...</div>
        <div class="job">Job 6 details...</div>
    </div>
    -->
    

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

<?php include 'view/home_footer.php'; ?>    
