<?php include '../view/employer_header.php'; ?>
<link rel="stylesheet" href="employer_create_listing.css" type="text/css"/>

<h3>Create a New Job Listing</h3>

<form action="." method="post">
    <p class='form_message'></p>
    <h4>Position Information:</h4>
    <label>Job Title:</label><br>
    <input type="text" name="jobName" class="validate">
    <br><br>
    
    <label>Health Care Facility:</label><br>
    <input type="text" name="jobPlace" class="validate">
    <br><br>

    <label>Address:</label><br>
    <input type="text" name="jobAddress" id="autocomplete" onfocus="initAutocomplete()" placeholder="Start typing your address" class="validate">
    <br><br>
    
    <label>Remuneration:</label><br>
    <input type="text" name="jobSalary" placeholder="eg. $37 - $42 per hour" class="validate">
    <br><br>

    <label for="jobContractType">Contract type:</label><br>
    <select name="jobContractType" class="validate">
        <option value="" disabled selected>Select a contract type</option>
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Casual">Casual</option>
        <option value="Contract">Contract</option>
        <option value="Temporary">Temporary</option> 
    </select> <br><br>
    
    <label>Job description:</label><br>
    <textarea name="jobDescription" rows="10" cols="50" placeholder="Please provide a description of the job opportunity" class="validate"></textarea>
    <br><br>
    
    <h4>Organisation Information:</h4>
    
    <label>About us:</label><br>
    <textarea name="jobAboutUs" rows="10" cols="50" placeholder="Please provide some information about your organisation" class="validate"></textarea>
    <br><br>

    <label for="jobFacilityType">Type of health care facility:</label><br>
    <select name="jobFacilityType" class="validate">
        <option value="" disabled selected>Select a facility type</option>
        <option value="Hospital">Hospital</option>
        <option value="Medical centre">Medical centre</option>
        <option value="Local health service">Local health service</option>
        <option value="Clinic">Clinic</option>
    </select><br><br>

    <label for="jobSectorsServices">Sectors serviced</label><br>
    <select name="jobSectorsServices" class="validate">
        <option value="" disabled selected>Select a sector type</option>
        <option value="Public">Public</option>
        <option value="Private">Private</option>
        <option value="Public and private">Public and private</option>
    </select><br><br>

    <label for="jobBeds">Number of beds:</label><br>
    <input type="text" name="jobBeds" placeholder="Enter the number of beds" class="validate">
    <br><br>

    <label for="jobMedicalPracs">Medical practitioners utilised:</label><br>
    <select name="jobMedicalPracs" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>    
    </select><br><br>
    
    <label for="jobAlliedHealth">Allied health care professionals:</label><br>
    <select name="jobAlliedHealth" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>    
    </select><br><br>

    <label for="jobVisitingFacilities">Visiting health care facilities:</label><br>
    <select name="jobVisitingFacilities" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>    
    </select><br><br>

    <label>Investigative Services:</label><br>
    <label for="jobServPathology">Pathology:</label>
    <input type="checkbox" name="jobServPathology" value="Y"><br>
    <label for="jobServXray">X-ray:</label>
    <input type="checkbox" name="jobServXray" value="Y"><br>
    <label for="jobServCT">CT:</label>
    <input type="checkbox" name="jobServCT" value="Y"><br>
    <label for="jobServMRI">MRI:</label>
    <input type="checkbox" name="jobServMRI" value="Y"><br>
    <label for="jobServUltra">Ultrasound:</label>
    <input type="checkbox" name="jobServUltra" value="Y"><br>
    <label for="jobServNuclear">Nuclear Medicine:</label>
    <input type="checkbox" name="jobServNuclear" value="Y"><br>
    <label for="jobServImmunology">Immunology:</label>
    <input type="checkbox" name="jobServImmunology" value="Y"><br>
    <label for="jobServNeurological">Neurology:</label>
    <input type="checkbox" name="jobServNeurological" value="Y"><br>
    <label for="jobServLab">Laboratory:</label>
    <input type="checkbox" name="jobServLab" value="Y"><br><br>
    
    <label>Clinical areas of Health care:</label><br>
    <label>Acute care:</label><br>
    <label for="jobED":>Emergency Department:</label>
    <input type="checkbox" name="jobED" value="Y"><br>
    <label for="jobPeriop":>Perioperative</label>
    <input type="checkbox" name="jobPeriop" value="Y"><br>
    <label for="jobICU":>Intensive care unit</label>
    <input type="checkbox" name="jobICU" value="Y"><br>
    <label for="jobSurgical":>Surgical:</label>
    <input type="checkbox" name="jobSurgical" value="Y"><br><br>
    
    <label>Chronic care:</label><br>
    <label for="jobMedical":>Medical</label>
    <input type="checkbox" name="jobMedical" value="Y"><br>
    <label for="jobRehab":>Rehabilitation:</label>
    <input type="checkbox" name="jobRehab" value="Y"><br>
    <label for="jobAgedCare":>Aged care:</label>
    <input type="checkbox" name="jobAgedCare" value="Y"><br><br>
    
    <label for="jobAccoms">Employee Accommodation Available:</label><br>
    <select name="jobAccoms" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>    
    </select><br><br>

    <h4>Locality Information:</h4>

    <label for="jobMonashRating">Locality rural rating (Modified Monash Model):</label><br>
    <select name="jobMonashRating" class="validate">
        <option value="" disabled selected>Select a rural rating</option>
        <option value="Metropolitan area">Metropolitan area</option>
        <option value="Regional centre">Regional centre</option>
        <option value="Large rural town">Large rural town</option>
        <option value="Medium rural town">Medium rural town</option>
        <option value="Small rural town">Small rural town</option>
        <option value="Remote community">Remote community</option>
        <option value="Very remote community">Very remote community</option>
    </select><br><br>
    
    <label>Education facilities:</label><br>
    <label for="jobChildCare":>Childcare:</label>
    <input type="checkbox" name="jobChildCare" value="Y"><br>
    <label for="jobPrimarySchool":>Primary school:</label>
    <input type="checkbox" name="jobPrimarySchool" value="Y"><br>
    <label for="jobHighSchool":>High school:</label>
    <input type="checkbox" name="jobHighSchool" value="Y"><br>
    <label for="jobUniversity":>University:</label>
    <input type="checkbox" name="jobUniversity" value="Y"><br><br>

    <label>Entertainment:</label><br>
    <label for="jobCinema":>Cinema:</label>
    <input type="checkbox" name="jobCinema" value="Y"><br>
    <label for="jobLiveMusic":>Live music:</label>
    <input type="checkbox" name="jobLiveMusic" value="Y"><br>
    <label for="jobSportsClub":>Sporting clubs:</label>
    <input type="checkbox" name="jobSportsClub" value="Y"><br>
    <label for="jobTheatre":>Live theatre:</label>
    <input type="checkbox" name="jobTheatre" value="Y"><br>
    <label for="jobCraftClub":>Craft clubs:</label>
    <input type="checkbox" name="jobCraftClub" value="Y"><br>
    <label for="jobGym":>Gymnasium:</label>
    <input type="checkbox" name="jobGym" value="Y"><br>
    <label for="jobLibrary":>Public library:</label>
    <input type="checkbox" name="jobLibrary" value="Y"><br><br>
    
    <label>Shopping:</label><br>
    <label for="jobSupermarket":>Supermarkets:</label>
    <input type="checkbox" name="jobSupermarket" value="Y"><br>
    <label for="jobFarmMarket":>Farmers market:</label>
    <input type="checkbox" name="jobFarmMarket" value="Y"><br>
    <label for="jobMechanic":>Mechanics:</label>
    <input type="checkbox" name="jobMechanic" value="Y"><br>
    <label for="jobRetail":>Retail shops:</label>
    <input type="checkbox" name="jobRetail" value="Y"><br>
    <label for="jobRestaurants":>Restaurants:</label>
    <input type="checkbox" name="jobRestaurants" value="Y"><br>
    <label for="jobPubs":>Public hotels:</label>
    <input type="checkbox" name="jobPubs" value="Y"><br><br>
    
    <label>Network coverage:</label><br>
    <label for="jobInternet":>Internet coverage:</label>
    <input type="checkbox" name="jobInternet" value="Y"><br>
    <label for="jobMobileCov":>Mobile phone coverage:</label>
    <input type="checkbox" name="jobMobileCov" value="Y"><br><br>
    
    <label>Transport:</label><br>
    <label for="jobBus":>Public bus service:</label>
    <input type="checkbox" name="jobBus" value="Y"><br>
    <label for="jobTrain":>Railway network:</label>
    <input type="checkbox" name="jobTrain" value="Y"><br>
    <label for="jobAirport.":>Airport:</label>
    <input type="checkbox" name="jobAirport" value="Y"><br>
    <label for="jobTaxi":>Taxi service:</label>
    <input type="checkbox" name="jobTaxi" value="Y"><br>
    <label for="jobEV":>EV charging stations:</label>
    <input type="checkbox" name="jobEV" value="Y"><br><br>
    
    <h4>Contact Details:</h4>

    <label>Contact email:</label><br>
    <input type="text" name="jobContactEmail" class="validate">
    <br><br>
    <label>Company link:</label><br>
    <input type="text" name="jobLink" placeholder="eg. https://www." class="validate">
    <br><br>

    <input type="hidden" name="jobCity" id="City" value="">
    <input type="hidden" name="jobState" id="State"value="">
    <input type="hidden" name="jobListingDate" value="<?php echo date('Y-m-d'); ?>">
    
    <p class='form_message'></p>

    <input type="submit" class="submitForm" value="Post Job">
    <input type="hidden" name="action" value="add_job">
    <input type="hidden" name="empID" value="<?php echo htmlspecialchars($employer['empID']); ?>">    
    <br><br>
</form>

<?php include('../js/script.php'); //script to validate fields and form ?>
<?php include '../view/employer_footer.php'; ?>