<?php include '../view/employer_header.php'; ?>
<?php include('../js/script.php'); ?>

<h3>Create a New Job Listing</h3><br>

<form action="." method="post" id="aligned">

    <label>Job Title:</label><br>
    <input type="text" name="jobName">
    <br><br>
    
    <label>Place:</label><br>
    <input type="text" name="jobPlace">
    <br><br>
    
    <label>Salary:</label><br>
    <input type="text" name="jobSalary" >
    <br><br>

    <label for="jobContractType">Contract type:</label><br>
    <select name="jobContractType">
        <option value="" disabled selected>Select a contract type</option>
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Casual">Casual</option>
        <option value="Contract">Contract</option>
        <option value="Temporary">Temporary</option> 
    </select> <br><br>
    
    <label>Address:</label><br>
    <input type="text" name="jobAddress" id="autocomplete" onfocus="initAutocomplete()" placeholder="Enter your address">
    <br><br>

    <label for="jobMonashRating">Rural rating (Modified Monash Model):</label><br>
    <select name="jobMonashRating">
        <option value="1">Metropolitatan area</option>
        <option value="2">Regional centre</option>
        <option value="3">Large rural town</option>
        <option value="4">Medium rural town</option>
        <option value="5">Small rural town</option>
        <option value="6">Remote communitie</option>
        <option value="7">Very remote communitie</option>
    </select><br><br>
    
    <label>Job description:</label><br>
    <textarea name="jobDescription" rows="10" cols="50"></textarea>
    <br><br>
    
    <label>About us:</label><br>
    <textarea name="jobAboutUs" rows="10" cols="50"></textarea>
    <br><br>
    
    <label>Contact email:</label><br>
    <input type="text" name="jobContactEmail">
    <br><br>
    
    <label>Company link:</label><br>
    <input type="text" name="jobLink">
    <br><br>
    

    <input type="hidden" name="jobCity" value="">
    <input type="hidden" name="jobState" value="">
    <input type="hidden" name="jobListingDate" value="">
    
    <input type="submit" value="Post Job">
    <input type="hidden" name="action" value="add_job">
    <input type="hidden" name="empID" value="<?php echo htmlspecialchars($employer['empID']); ?>">    
    <br><br>
</form>

<?php include '../view/footer.php'; ?>