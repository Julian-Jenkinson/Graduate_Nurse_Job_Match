<?php include '../view/employer_header.php'; ?>
<?php include('../js/script.php'); ?>



<h3>Edit Job Listing</h3><br>

<form action="." method="post" id="aligned">

    <label>Job Title:</label><br>
    <input type="text" name="jobName", value="<?php echo isset($job['jobName']) ? htmlspecialchars($job['jobName']) : ''; ?> ">
    <br><br>
    
    <label>Health Care Facility:</label><br>
    <input type="text" name="jobPlace" value="<?php echo isset($job['jobPlace']) ? htmlspecialchars($job['jobPlace']) : ''; ?> ">
    <br><br>

    <label>Address:</label><br>
    <input type="text" name="jobAddress" id="autocomplete" onfocus="initAutocomplete()" placeholder="Enter your address" value="<?php echo isset($job['jobAddress']) ? htmlspecialchars($job['jobAddress']) : ''; ?> ">
    <br><br>
    
    <label>Salary:</label><br>
    <input type="text" name="jobSalary" value="<?php echo isset($job['jobSalary']) ? htmlspecialchars($job['jobSalary']) : ''; ?>">
    <br><br>

    <label for="jobContractType">Contract type:</label><br>
    <select name="jobContractType">
        
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

    <label for="jobMonashRating">Rural rating (Modified Monash Model):</label><br>
    <select name="jobMonashRating">

        <?php if(isset($job['jobMonashRating'])): ?>
        <option value="<?php echo htmlspecialchars($job['jobMonashRating']); ?>"><?php echo htmlspecialchars($job['jobMonashRating']); ?></option>
        <?php else: ?>
        <option value="" disabled selected>Select a rural rating</option>
        <?php endif; ?>

        <option value="Metropolitan area">Metropolitan area</option>
        <option value="Regional centre">Regional centre</option>
        <option value="Large rural town">Large rural town</option>
        <option value="Medium rural town">Medium rural town</option>
        <option value="Small rural town">Small rural town</option>
        <option value="Remote community">Remote community</option>
        <option value="Very remote community">Very remote community</option>
    </select><br><br>
    
    <label>Job description:</label><br>
    <textarea name="jobDescription" rows="10" cols="50"><?php echo isset($job['jobDescription']) ? htmlspecialchars($job['jobDescription']) : ''; ?></textarea>
    <br><br>
    
    <label>About us:</label><br>
    <textarea name="jobAboutUs" rows="10" cols="50"><?php echo isset($job['jobAboutUs']) ? htmlspecialchars($job['jobAboutUs']) : ''; ?></textarea>
    <br><br>
    
    <label>Contact email:</label><br>
    <input type="text" name="jobContactEmail" value="<?php echo isset($job['jobContactEmail']) ? htmlspecialchars($job['jobContactEmail']) : ''; ?>">
    <br><br>
    
    <label>Company link:</label><br>
    <input type="text" name="jobLink" value="<?php echo isset($job['jobLink']) ? htmlspecialchars($job['jobLink']) : ''; ?>">
    <br><br>
    
    <input type="hidden" name="jobCity" id="jobCity" value="<?php echo isset($job['jobCity']) ? htmlspecialchars($job['jobCity']) : ''; ?>">
    <input type="hidden" name="jobState" id="jobState" value="<?php echo isset($job['jobState']) ? htmlspecialchars($job['jobState']) : ''; ?>">
    <!--<input type="hidden" name="jobListingDate" value="<?php echo date('Y-m-d'); ?>">-->
    
    <input type="submit" value="Save Changes">
    <input type="hidden" name="action" value="save_changes">
    <input type="hidden" name="jobID" value="<?php echo htmlspecialchars($job['jobID']); ?>">    
    <br><br>
</form>

<?php include '../view/footer.php'; ?>