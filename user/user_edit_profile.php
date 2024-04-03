<?php include '../view/header.php'; ?>
<h3>User Create/Edit Profile</h3><br>
<form action="." method="post">
    <p class='form_message'></p>
    <label>First Name:</label><br>
    <input type="text" class="validate" name="userFName", value="<?php echo isset($user['userFName']) ? htmlspecialchars($user['userFName']) : ''; ?>">
    <br><br>
    <label>Last Name:</label><br>
    <input type="text" class="validate" name="userLName", value="<?php echo isset($user['userLName']) ? htmlspecialchars($user['userLName']) : ''; ?>">
    <br><br>
    <label>Address:</label><br>
    <input type="text" class="validate" name="userAddress", id="autocomplete", onfocus="initAutocomplete()", placeholder="Enter your address", value="<?php echo isset($user['userAddress']) ? htmlspecialchars($user['userAddress']) : ''; ?>" >
    <br><br>

    <label for="userQualifications">Qualifications:</label><br>
    <select name="userQualifications" class="validate">
        <option value="" disabled selected>Select your qualification</option>
        <option value="Bachelor of Midwifery" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Bachelor of Midwifery' ? 'selected' : ''; ?>>Bachelor of Midwifery</option>    
        <option value="Diploma of Nursing" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Diploma of Nursing' ? 'selected' : ''; ?>>Diploma of Nursing</option>
        <option value="Bachelor of Nursing" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Bachelor of Nursing' ? 'selected' : ''; ?>>Bachelor of Nursing</option>
        <option value="Bachelor of Nursing Science" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Bachelor of Nursing Science' ? 'selected' : ''; ?>>Bachelor of Nursing Science</option>
        <option value="Master of Nursing" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Master of Nursing' ? 'selected' : ''; ?>>Master of Nursing</option>
        <option value="Master of Nursing Practice (Pre-Registration)" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Master of Nursing Practice (Pre-Registration)' ? 'selected' : ''; ?>>Master of Nursing Practice (Pre-Registration)</option>
        <option value="Graduate Certificate of Nursing" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Graduate Certificate of Nursing' ? 'selected' : ''; ?>>Graduate Certificate of Nursing</option>
        <option value="Graduate Certificate in Clinical Nursing" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Graduate Certificate in Clinical Nursing' ? 'selected' : ''; ?>>Graduate Certificate in Clinical Nursing</option>
        <option value="Graduate Diploma of Mental Health Nursing" <?php echo isset($user['userQualifications']) && $user['userQualifications'] == 'Graduate Diploma of Mental Health Nursing' ? 'selected' : ''; ?>>Graduate Diploma of Mental Health Nursing</option>
    </select> <br><br>






    <label for="jobTitle">What position are you loking for?</label><br>
    <input type="text" class="validate" name="jobTitle" placeholder="eg. Registered Nurse" value="<?php echo isset($job['jobTitle']) ? htmlspecialchars($job['jobTitle']) : ''; ?>">
    
    <h4>Professional Interests:</h4>

    <label for="sectorPref">Prefered Sector:</label><br>
    <select name="sectorPref" class="validate">
        <option value="" disabled selected>Select a sector type</option>
        <option value="Public"<?php echo isset($user['sectorPref']) && $user['sectorPref'] == 'Public' ? 'selected' : ''; ?>>Public</option>
        <option value="Private"<?php echo isset($user['sectorPref']) && $user['sectorPref'] == 'Private' ? 'selected' : ''; ?>>Private</option>
        <option value="Public and private"<?php echo isset($user['sectorPref']) && $user['sectorPref'] == 'Public and private' ? 'selected' : ''; ?>>Public and private</option>
    </select><br><br>

    <label>Investigative Services:</label><br>
    <label for="userServPathology">Pathology:</label>
    <input type="checkbox" name="userServPathology" value="Y" <?php echo $user['userServPathology'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userServXray">X-ray:</label>
    <input type="checkbox" name="userServXray" value="Y" <?php echo $user['userServXray'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userServCT">CT:</label>
    <input type="checkbox" name="userServCT" value="Y" <?php echo $user['userServCT'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userServMRI">MRI:</label>
    <input type="checkbox" name="userServMRI" value="Y" <?php echo $user['userServMRI'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userServUltra">Ultrasound:</label>
    <input type="checkbox" name="userServUltra" value="Y" <?php echo $user['userServUltra'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userServNuclear">Nuclear Medicine:</label>
    <input type="checkbox" name="userServNuclear" value="Y" <?php echo $user['userServNuclear'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userServImmunology">Immunology:</label>
    <input type="checkbox" name="userServImmunology" value="Y" <?php echo $user['userServImmunology'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userServNeurological">Neurology:</label>
    <input type="checkbox" name="userServNeurological" value="Y" <?php echo $user['userServNeurological'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userServLab">Laboratory:</label>
    <input type="checkbox" name="userServLab" value="Y" <?php echo $user['userServLab'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Clinical areas of Health care:</label><br>
    <label>Acute care:</label><br>
    <label for="userED":>Emergency Department:</label>
    <input type="checkbox" name="userED" value="Y" <?php echo $user['userED'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userPeriop":>Perioperative</label>
    <input type="checkbox" name="userPeriop" value="Y" <?php echo $user['userPeriop'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userICU":>Intensive care unit</label>
    <input type="checkbox" name="userICU" value="Y" <?php echo $user['userICU'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userSurgical":>Surgical:</label>
    <input type="checkbox" name="userSurgical" value="Y" <?php echo $user['userSurgical'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Chronic care:</label><br>
    <label for="userMedical":>Medical</label>
    <input type="checkbox" name="userMedical" value="Y" <?php echo $user['userMedical'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userRehab":>Rehabilitation:</label>
    <input type="checkbox" name="userRehab" value="Y" <?php echo $user['userRehab'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userAgedCare":>Aged care:</label>
    <input type="checkbox" name="userAgedCare" value="Y" <?php echo $user['userAgedCare'] == 'Y' ? 'checked' : ''; ?>><br><br>

    <h4>Locality Preferences:</h4>

    
    <label for="userRelocate">Would you relocate for work?</label><br>
    <select name="userRelocate" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes"<?php echo isset($user['userRelocate']) && $user['userRelocate'] == 'Yes' ? 'selected' : ''; ?>>Yes</option>
        <option value="No"<?php echo isset($user['userRelocate']) && $user['userRelocate'] == 'No' ? 'selected' : ''; ?>>No</option>    
        <option value="Unsure"<?php echo isset($user['userRelocate']) && $user['userRelocate'] == 'Unsure' ? 'selected' : ''; ?>>Unsure</option>
    </select><br><br>

    <label>What areas of Australia interest you for work?:</label><br>
    <label for="userRuralPrefMetro":>Metropolitan</label>
    <input type="checkbox" name="userMedical" value="Y" <?php echo $user['userRuralPrefMetro'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userRuralPrefRegional":>Regional:</label>
    <input type="checkbox" name="userRehab" value="Y" <?php echo $user['userRuralPrefRegional'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userRuralPrefRural":>Rural:</label>
    <input type="checkbox" name="userAgedCare" value="Y" <?php echo $user['userRuralPrefRural'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userRuralPrefRemote":>Remote:</label>
    <input type="checkbox" name="userAgedCare" value="Y" <?php echo $user['userRuralPrefRemote'] == 'Y' ? 'checked' : ''; ?>><br><br>

    



    <label for="userStaffAccoms">Do you seek staff accommodation?:</label><br>
    <select name="userStaffAccoms" class="validate">
        <option value="" disabled selected>Select</option>
        <option value="Yes"<?php echo isset($user['jobAccoms']) && $user['jobAccoms'] == 'Yes' ? 'selected' : ''; ?>>Yes</option>
        <option value="No"<?php echo isset($user['jobAccoms']) && $user['jobAccoms'] == 'No' ? 'selected' : ''; ?>>No</option>    
        <option value="Unsure"<?php echo isset($user['jobAccoms']) && $user['jobAccoms'] == 'Unsure' ? 'selected' : ''; ?>>Unsure</option>    
    </select><br><br>


    
    <label>Entertainment:</label><br>
    <label for="userCinema":>Cinema:</label>
    <input type="checkbox" name="userCinema" value="Y" <?php echo $user['userCinema'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userLiveMusic":>Live music:</label>
    <input type="checkbox" name="userLiveMusic" value="Y" <?php echo $user['userLiveMusic'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userSportsClub":>Sporting clubs:</label>
    <input type="checkbox" name="userSportsClub" value="Y" <?php echo $user['userSportsClub'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userTheatre":>Live theatre:</label>
    <input type="checkbox" name="userTheatre" value="Y" <?php echo $user['userTheatre'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userCraftClub":>Craft clubs:</label>
    <input type="checkbox" name="userCraftClub" value="Y" <?php echo $user['userCraftClub'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userGym":>Gymnasium:</label>
    <input type="checkbox" name="userGym" value="Y" <?php echo $user['userGym'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userLibrary":>Public library:</label>
    <input type="checkbox" name="userLibrary" value="Y" <?php echo $user['userLibrary'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Shopping:</label><br>
    <label for="userSupermarket":>Supermarkets:</label>
    <input type="checkbox" name="userSupermarket" value="Y" <?php echo $user['userSupermarket'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userFarmMarket":>Farmers market:</label>
    <input type="checkbox" name="userFarmMarket" value="Y" <?php echo $user['userFarmMarket'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userMechanic":>Mechanics:</label>
    <input type="checkbox" name="userMechanic" value="Y" <?php echo $user['userMechanic'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userRetail":>Retail shops:</label>
    <input type="checkbox" name="userRetail" value="Y" <?php echo $user['userRetail'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userRestaurants":>Restaurants:</label>
    <input type="checkbox" name="userRestaurants" value="Y" <?php echo $user['userRestaurants'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userPubs":>Public hotels:</label>
    <input type="checkbox" name="userPubs" value="Y" <?php echo $user['userPubs'] == 'Y' ? 'checked' : ''; ?>><br><br>

    <label>Network coverage:</label><br>
    <label for="userInternet":>Internet coverage:</label>
    <input type="checkbox" name="userInternet" value="Y" <?php echo $user['userInternet'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userMobileCov":>Mobile phone coverage:</label>
    <input type="checkbox" name="userMobileCov" value="Y" <?php echo $user['userMobileCov'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <label>Transport:</label><br>
    <label for="userBus":>Public bus service:</label>
    <input type="checkbox" name="userBus" value="Y" <?php echo $user['userBus'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userTrain":>Railway network:</label>
    <input type="checkbox" name="userTrain" value="Y" <?php echo $user['userTrain'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userAirport.":>Airport:</label>
    <input type="checkbox" name="userAirport" value="Y" <?php echo $user['userAirport'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userTaxi":>Taxi service:</label>
    <input type="checkbox" name="userTaxi" value="Y" <?php echo $user['userTaxi'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userEV":>EV charging stations:</label>
    <input type="checkbox" name="userEV" value="Y" <?php echo $user['userEV'] == 'Y' ? 'checked' : ''; ?>><br><br>

    <label>Education facilities:</label><br>
    <label for="userChildCare":>Childcare:</label>
    <input type="checkbox" name="userChildCare" value="Y" <?php echo $user['userChildCare'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userPrimarySchool":>Primary school:</label>
    <input type="checkbox" name="userPrimarySchool" value="Y" <?php echo $user['userPrimarySchool'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userHighSchool":>High school:</label>
    <input type="checkbox" name="userHighSchool" value="Y" <?php echo $user['userHighSchool'] == 'Y' ? 'checked' : ''; ?>><br>
    <label for="userUniversity":>University:</label>
    <input type="checkbox" name="userUniversity" value="Y" <?php echo $user['userUniversity'] == 'Y' ? 'checked' : ''; ?>><br><br>
    
    <br>
    <p class='form_message'></p>
    <input type="submit" class="submitForm" value="Save Profile">
    <input type="hidden" name="action" value="save_profile">
    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user['userID']); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($user['userEmail']); ?>">
    
    <input type="hidden" name="userCity" id="jobCity" value="<?php echo isset($job['userCity']) ? htmlspecialchars($job['userCity']) : ''; ?>">
    <input type="hidden" name="userState" id="jobState" value="<?php echo isset($job['userState']) ? htmlspecialchars($job['userState']) : ''; ?>">

    <br><br>
</form>


<?php include('../js/script.php'); ////script to validate fields and form ?>
<?php include '../view/footer.php'; ?>