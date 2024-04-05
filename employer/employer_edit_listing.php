<?php include '../view/employer_header.php'; ?>
<link rel="stylesheet" href="employer_edit_listing.css" type="text/css"/>

<h3>Edit Job Listing</h3>

<form action="." method="post">
    <p class='form_message'></p>
    <h4>Position Information:</h4>
    <label>Job Title:</label><br>
    <input type="text" name="jobName" class="validate" value="<?php echo isset($job['jobName']) ? htmlspecialchars($job['jobName']) : ''; ?> ">
    <br><br>
    
    <label>Health Care Facility:</label><br>
    <input type="text" name="jobPlace" class="validate" value="<?php echo isset($job['jobPlace']) ? htmlspecialchars($job['jobPlace']) : ''; ?> ">
    <br><br>

    <label>Address:</label><br>
    <input type="text" name="jobAddress" class="validate" id="autocomplete" onfocus="initAutocomplete()" placeholder="Start typing your address" value="<?php echo isset($job['jobAddress']) ? htmlspecialchars($job['jobAddress']) : ''; ?> ">
    <br><br>
    
    <label>Remuneration:</label><br>
    <input type="text" name="jobSalary" class="validate" value="<?php echo isset($job['jobSalary']) ? htmlspecialchars($job['jobSalary']) : ''; ?>">
    <br><br>

    <label for="jobContractType">Contract type:</label><br>
    <select name="jobContractType" class="validate">
        <?php if(isset($job['jobContractType'])): ?>
        <option value="<?php echo htmlspecialchars($job['jobContractType']); ?>"><?php echo htmlspecialchars($job['jobContractType']); ?></option>
        <?php else: ?>
        <option value="" disabled selected>Select a contract type</option>
        <?php endif; ?>
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Casual">Casual</option>
        <option value="Contract">Contract</option>
        <option value="Temporary">Temporary</option> 
    </select> <br><br>
    
    <label>Job description:</label><br>
    <textarea name="jobDescription" class="validate" rows="10" cols="50" placeholder="Please provide a description of the job opportunity"><?php echo isset($job['jobDescription']) ? htmlspecialchars($job['jobDescription']) : ''; ?></textarea>
    <br><br>

    <h4>Organisation Information:</h4>
    
    <label>About us:</label><br>
    <textarea name="jobAboutUs" class="validate" rows="10" cols="50" placeholder="Please provide some information about your organisation"><?php echo isset($job['jobAboutUs']) ? htmlspecialchars($job['jobAboutUs']) : ''; ?></textarea>
    <br><br>

    <label for="jobFacilityType">Type of health care facility:</label><br>
    <select name="jobFacilityType" class="validate">
        <option value="" disabled selected>Select a facility type</option>
        <option value="Hospital"<?php echo isset($job['jobFacilityType']) && $job['jobFacilityType'] == 'Hospital' ? 'selected' : ''; ?>>Hospital</option>
        <option value="Medical centre"<?php echo isset($job['jobFacilityType']) && $job['jobFacilityType'] == 'Medical Centre' ? 'selected' : ''; ?>>Medical centre</option>
        <option value="Local health service"<?php echo isset($job['jobFacilityType']) && $job['jobFacilityType'] == 'Local Health Service' ? 'selected' : ''; ?>>Local health service</option>
        <option value="Clinic"<?php echo isset($job['jobFacilityType']) && $job['jobFacilityType'] == 'Clinic' ? 'selected' : ''; ?>>Clinic</option>
    </select><br><br>

    <label for="jobSectorsServices">Sectors serviced</label><br>
    <select name="jobSectorsServices" class="validate">
        <option value="" disabled selected>Select a sector type</option>
        <option value="Public"<?php echo isset($job['jobSectorsServices']) && $job['jobSectorsServices'] == 'Public' ? 'selected' : ''; ?>>Public</option>
        <option value="Private"<?php echo isset($job['jobSectorsServices']) && $job['jobSectorsServices'] == 'Private' ? 'selected' : ''; ?>>Private</option>
        <option value="Public and private"<?php echo isset($job['jobSectorsServices']) && $job['jobSectorsServices'] == 'Public and private' ? 'selected' : ''; ?>>Public and private</option>
    </select><br><br>

    <label for="jobBeds">Number of beds:</label><br>
    <input type="text" name="jobBeds" class="validate" placeholder="Enter the number of beds" value="<?php echo isset($job['jobBeds']) ? htmlspecialchars($job['jobBeds']) : ''; ?>">
    <br><br>

    <label for="jobMedicalPracs">Medical practitioners utilised:</label><br>
    <select name="jobMedicalPracs" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes"<?php echo isset($job['jobMedicalPracs']) && $job['jobMedicalPracs'] == 'Yes' ? 'selected' : ''; ?>>Yes</option>
        <option value="No"<?php echo isset($job['jobMedicalPracs']) && $job['jobMedicalPracs'] == 'No' ? 'selected' : ''; ?>>No</option>    
    </select><br><br>
    
    <label for="jobAlliedHealth">Allied health care professionals:</label><br>
    <select name="jobAlliedHealth" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes"<?php echo isset($job['jobAlliedHealth']) && $job['jobAlliedHealth'] == 'Yes' ? 'selected' : ''; ?>>Yes</option>
        <option value="No"<?php echo isset($job['jobAlliedHealth']) && $job['jobAlliedHealth'] == 'No' ? 'selected' : ''; ?>>No</option>    
    </select><br><br>

    <label for="jobVisitingFacilities">Visiting health care facilities:</label><br>
    <select name="jobVisitingFacilities" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes"<?php echo isset($job['jobVisitingFacilities']) && $job['jobVisitingFacilities'] == 'Yes' ? 'selected' : ''; ?>>Yes</option>
        <option value="No<?php echo isset($job['jobVisitingFacilities']) && $job['jobVisitingFacilities'] == 'No' ? 'selected' : ''; ?>">No</option>    
    </select><br><br>

    <label>Investigative Services:</label><br>
    <label for="jobServPathology">Pathology:</label>
    <input type="checkbox" name="jobServPathology" value="Y" <?php echo $job['jobServPathology'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobServXray">X-ray:</label>
    <input type="checkbox" name="jobServXray" value="Y" <?php echo $job['jobServXray'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobServCT">CT:</label>
    <input type="checkbox" name="jobServCT" value="Y" <?php echo $job['jobServCT'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobServMRI">MRI:</label>
    <input type="checkbox" name="jobServMRI" value="Y" <?php echo $job['jobServMRI'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobServUltra">Ultrasound:</label>
    <input type="checkbox" name="jobServUltra" value="Y" <?php echo $job['jobServUltra'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobServNuclear">Nuclear Medicine:</label>
    <input type="checkbox" name="jobServNuclear" value="Y" <?php echo $job['jobServNuclear'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobServImmunology">Immunology:</label>
    <input type="checkbox" name="jobServImmunology" value="Y" <?php echo $job['jobServImmunology'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobServNeurological">Neurology:</label>
    <input type="checkbox" name="jobServNeurological" value="Y" <?php echo $job['jobServNeurological'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobServLab">Laboratory:</label>
    <input type="checkbox" name="jobServLab" value="Y" <?php echo $job['jobServLab'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Clinical areas of Health care:</label><br>
    <label>Acute care:</label><br>
    <label for="jobED":>Emergency Department:</label>
    <input type="checkbox" name="jobED" value="Y" <?php echo $job['jobED'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobPeriop":>Perioperative</label>
    <input type="checkbox" name="jobPeriop" value="Y" <?php echo $job['jobPeriop'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobICU":>Intensive care unit</label>
    <input type="checkbox" name="jobICU" value="Y" <?php echo $job['jobICU'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobSurgical":>Surgical:</label>
    <input type="checkbox" name="jobSurgical" value="Y" <?php echo $job['jobSurgical'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Chronic care:</label><br>
    <label for="jobMedical":>Medical</label>
    <input type="checkbox" name="jobMedical" value="Y" <?php echo $job['jobMedical'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobRehab":>Rehabilitation:</label>
    <input type="checkbox" name="jobRehab" value="Y" <?php echo $job['jobRehab'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobAgedCare":>Aged care:</label>
    <input type="checkbox" name="jobAgedCare" value="Y" <?php echo $job['jobAgedCare'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label for="jobAccoms">Employee Accommodation Available:</label><br>
    <select name="jobAccoms" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes"<?php echo isset($job['jobAccoms']) && $job['jobAccoms'] == 'Yes' ? 'selected' : ''; ?>>Yes</option>
        <option value="No"<?php echo isset($job['jobAccoms']) && $job['jobAccoms'] == 'No' ? 'selected' : ''; ?>>No</option>    
    </select><br><br>

    <h4>Locality Information:</h4>

    <label for="jobMonashRating">Locality rural rating (Modified Monash Model):</label><br>
    <select name="jobMonashRating" class="validate">
        <option value="" disabled selected>Select a rural rating</option>
        <option value="Metropolitan area"<?php echo isset($job['jobMonashRating']) && $job['jobMonashRating'] == 'Metropolitan area' ? 'selected' : ''; ?>>Metropolitan area</option>
        <option value="Regional centre"<?php echo isset($job['jobMonashRating']) && $job['jobMonashRating'] == 'Regional centre' ? 'selected' : ''; ?>>Regional centre</option>
        <option value="Large rural town"<?php echo isset($job['jobMonashRating']) && $job['jobMonashRating'] == 'Large rural town' ? 'selected' : ''; ?>>Large rural town</option>
        <option value="Medium rural town"<?php echo isset($job['jobMonashRating']) && $job['jobMonashRating'] == 'Medium rural town' ? 'selected' : ''; ?>>Medium rural town</option>
        <option value="Small rural town"<?php echo isset($job['jobMonashRating']) && $job['jobMonashRating'] == 'Small rural town' ? 'selected' : ''; ?>>Small rural town</option>
        <option value="Remote community"<?php echo isset($job['jobMonashRating']) && $job['jobMonashRating'] == 'Remote community' ? 'selected' : ''; ?>>Remote community</option>
        <option value="Very remote community"<?php echo isset($job['jobMonashRating']) && $job['jobMonashRating'] == 'Very remote community' ? 'selected' : ''; ?>>Very remote community</option>
    </select><br><br>
    
    <label>Education facilities:</label><br>
    <label for="jobChildCare":>Childcare:</label>
    <input type="checkbox" name="jobChildCare" value="Y" <?php echo $job['jobChildCare'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobPrimarySchool":>Primary school:</label>
    <input type="checkbox" name="jobPrimarySchool" value="Y" <?php echo $job['jobPrimarySchool'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobHighSchool":>High school:</label>
    <input type="checkbox" name="jobHighSchool" value="Y" <?php echo $job['jobHighSchool'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobUniversity":>University:</label>
    <input type="checkbox" name="jobUniversity" value="Y" <?php echo $job['jobUniversity'] == 'Y' ? 'checked' : ''; ?>><br><br>

    <label>Entertainment:</label><br>
    <label for="jobCinema":>Cinema:</label>
    <input type="checkbox" name="jobCinema" value="Y" <?php echo $job['jobCinema'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobLiveMusic":>Live music:</label>
    <input type="checkbox" name="jobLiveMusic" value="Y" <?php echo $job['jobLiveMusic'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobSportsClub":>Sporting clubs:</label>
    <input type="checkbox" name="jobSportsClub" value="Y" <?php echo $job['jobSportsClub'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobTheatre":>Live theatre:</label>
    <input type="checkbox" name="jobTheatre" value="Y" <?php echo $job['jobTheatre'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobCraftClub":>Craft clubs:</label>
    <input type="checkbox" name="jobCraftClub" value="Y" <?php echo $job['jobCraftClub'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobGym":>Gymnasium:</label>
    <input type="checkbox" name="jobGym" value="Y" <?php echo $job['jobGym'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobLibrary":>Public library:</label>
    <input type="checkbox" name="jobLibrary" value="Y" <?php echo $job['jobLibrary'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Shopping:</label><br>
    <label for="jobSupermarket":>Supermarkets:</label>
    <input type="checkbox" name="jobSupermarket" value="Y" <?php echo $job['jobSupermarket'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobFarmMarket":>Farmers market:</label>
    <input type="checkbox" name="jobFarmMarket" value="Y" <?php echo $job['jobFarmMarket'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobMechanic":>Mechanics:</label>
    <input type="checkbox" name="jobMechanic" value="Y" <?php echo $job['jobMechanic'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobRetail":>Retail shops:</label>
    <input type="checkbox" name="jobRetail" value="Y" <?php echo $job['jobRetail'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobRestaurants":>Restaurants:</label>
    <input type="checkbox" name="jobRestaurants" value="Y" <?php echo $job['jobRestaurants'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobPubs":>Public hotels:</label>
    <input type="checkbox" name="jobPubs" value="Y" <?php echo $job['jobPubs'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Network coverage:</label><br>
    <label for="jobInternet":>Internet coverage:</label>
    <input type="checkbox" name="jobInternet" value="Y" <?php echo $job['jobInternet'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobMobileCov":>Mobile phone coverage:</label>
    <input type="checkbox" name="jobMobileCov" value="Y" <?php echo $job['jobMobileCov'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Transport:</label><br>
    <label for="jobBus":>Public bus service:</label>
    <input type="checkbox" name="jobBus" value="Y" <?php echo $job['jobBus'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobTrain":>Railway network:</label>
    <input type="checkbox" name="jobTrain" value="Y" <?php echo $job['jobTrain'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobAirport.":>Airport:</label>
    <input type="checkbox" name="jobAirport" value="Y" <?php echo $job['jobAirport'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobTaxi":>Taxi service:</label>
    <input type="checkbox" name="jobTaxi" value="Y" <?php echo $job['jobTaxi'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="jobEV":>EV charging stations:</label>
    <input type="checkbox" name="jobEV" value="Y" <?php echo $job['jobEV'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <h4>Contact Details:</h4>
    <label>Contact email:</label><br>
    <input type="text" name="jobContactEmail" class="validate" value="<?php echo isset($job['jobContactEmail']) ? htmlspecialchars($job['jobContactEmail']) : ''; ?>">
    <br><br>
    
    <label>Company link:</label><br>
    <input type="text" name="jobLink" class="validate" placeholder="eg. https://www." value="<?php echo isset($job['jobLink']) ? htmlspecialchars($job['jobLink']) : ''; ?>">
    <br><br>
    
    <input type="hidden" name="jobCity" id="City" value="<?php echo isset($job['jobCity']) ? htmlspecialchars($job['jobCity']) : ''; ?>">
    <input type="hidden" name="jobState" id="State" value="<?php echo isset($job['jobState']) ? htmlspecialchars($job['jobState']) : ''; ?>">
    <input type="hidden" name="jobListingDate" value="<?php echo htmlspecialchars($job['jobListingDate']); ?>">
    
    <p class='form_message'></p>

    <input type="submit" class="submitForm" value="Save Changes">
    <input type="hidden" name="action" value="save_changes">
    <input type="hidden" name="jobID" value="<?php echo htmlspecialchars($job['jobID']); ?>">    
    <br><br>
</form>

<?php include('../js/script.php'); //script to validate fields and form ?>
<?php include '../view/employer_footer.php'; ?>