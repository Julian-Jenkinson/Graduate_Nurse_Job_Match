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
    <input type="text" class="validate" name="jobTitle" placeholder="Enter a position title" value="<?php echo isset($job['jobTitle']) ? htmlspecialchars($job['jobTitle']) : ''; ?>">
    
    <h4>Professional Interests:</h4>

    <h4>Personal interests:</h4>

    <h4>Location Preferences:</h4>

    <p>will you relocate for work?</p>
    <p>what areas of australia interest you? eg. rural/regional Metropolitan</p>
    <p>do you require staff accommodation?</p>     
    
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