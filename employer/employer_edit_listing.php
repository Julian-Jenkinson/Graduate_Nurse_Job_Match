<?php include '../view/employer_header.php'; ?>
<?php include('../js/script.php'); ?>



<h3>Edit Job Listing</h3><br>



<form action="." method="post" id="aligned">

    <label>Job Title:</label><br>
    <input type="text" name="jobName", value="<?php echo isset($job['jobName']) ? htmlspecialchars($job['jobName']) : ''; ?> ">
    <br><br>
    <label>Salary:</label><br>
    <input type="text" name="jobSalary" value="<?php echo isset($job['jobSalary']) ? htmlspecialchars($job['jobSalary']) : ''; ?>">
    <br><br>
    <label>Address:</label><br>
    <input type="text" name="jobAddress" id="autocomplete" onfocus="initAutocomplete()" placeholder="Enter your address" value="<?php echo isset($job['jobAddress']) ? htmlspecialchars($job['jobAddress']) : ''; ?> ">
    <br><br>
    
    
    <input type="submit" value="Save Changes">
    <input type="hidden" name="action" value="save_changes">
    <input type="hidden" name="jobID" value="<?php echo htmlspecialchars($job['jobID']); ?>">    
    <br><br>
</form>

<?php include '../view/footer.php'; ?>