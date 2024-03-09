<?php include '../view/header.php'; ?>
<?php include('../js/script.php'); ?>



<h3>User Create/Edit Profile</h3><br>



<form action="." method="post" id="aligned">

    <label>First Name:</label><br>
    <input type="text" name="userFName", value="<?php echo isset($user['userFName']) ? htmlspecialchars($user['userFName']) : ''; ?> ">
    <br><br>
    <label>Last Name:</label><br>
    <input type="text", name="userLName", value="<?php echo isset($user['userLName']) ? htmlspecialchars($user['userLName']) : ''; ?> ">
    <br><br>
    <label>Phone:</label><br>
    <input type="text", name="userPhone", value="<?php echo isset($user['userPhone']) ? htmlspecialchars($user['userPhone']) : ''; ?> ">
    <br><br>
    <label>Address:</label><br>
    <input type="text", name="userAddress", id="autocomplete", onfocus="initAutocomplete()", placeholder="Enter your address", value="<?php echo isset($user['userAddress']) ? htmlspecialchars($user['userAddress']) : ''; ?> " >
    <br><br>


    <label for="userQualifications">Qualifications:</label><br>
    <select name="userQualifications">
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

    
    <label>Experience:</label><br>
    <textarea type="text", name="userExperience", rows="4", cols="50", placeholder="Tell us about you professional experiences"><?php echo isset($user['userExperience']) ? htmlspecialchars($user['userExperience']) : ''; ?></textarea>
    <br><br>
    
    <label>Skills:</label><br>
    <textarea type="text", name="userSkills", rows="4", cols="50", placeholder="Tell us about you proffessional skills"><?php echo isset($user['userSkills']) ? htmlspecialchars($user['userSkills']) : ''; ?></textarea>
    <br><br>
    
    <label>Interests:</label><br>
    <textarea type="text", name="userInterests", rows="4", cols="50", placeholder="Tell us about you professional interest areas"><?php echo isset($user['userInterests']) ? htmlspecialchars($user['userInterests']) : ''; ?></textarea>
    <br><br>
    
    <label>Location Preferences:</label><br>
    
    <label for="mm1">Metropolitatan areas</label>
    <input type="checkbox" name="mm1" value="Y" <?php echo $user['userMM1'] == 'Y' ? 'checked' : ''; ?>><br>

    <label for="mm2">Regional centers</label>
    <input type="checkbox" name="mm2" value="Y" <?php echo $user['userMM2'] == 'Y' ? 'checked' : ''; ?>><br>

    <label for="mm3">Large rural towns</label>
    <input type="checkbox" name="mm3" value="Y" <?php echo $user['userMM3'] == 'Y' ? 'checked' : ''; ?>><br>

    <label for="mm4">Medium rural towns</label>
    <input type="checkbox" name="mm4" value="Y" <?php echo $user['userMM4'] == 'Y' ? 'checked' : ''; ?>><br>

    <label for="mm5">Small rural towns</label>
    <input type="checkbox" name="mm5" value="Y" <?php echo $user['userMM5'] == 'Y' ? 'checked' : ''; ?>><br>

    <label for="mm6">Remote communities</label>
    <input type="checkbox" name="mm6" value="Y" <?php echo $user['userMM6'] == 'Y' ? 'checked' : ''; ?>><br>

    <label for="mm7">Very remote communities</label>
    <input type="checkbox" name="mm7" value="Y" <?php echo $user['userMM7'] == 'Y' ? 'checked' : ''; ?>><br>


    <br>
    <input type="submit" value="Save Profile">
    <input type="hidden" name="action" value="save_profile">
    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user['userID']); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($user['userEmail']); ?>">
    <br><br>
</form>

<?php include '../view/footer.php'; ?>