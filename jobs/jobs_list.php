<?php include "../view/header.php"; ?>
<?php include "../js/map_script.php"; ?>
<link rel="stylesheet" type="text/css" href="jobs_list.css">

<h3>Jobs Search</h3>

<form action="." method="post">    
    <table>
        <tr>
            <td>Keyword</td>
            <td>Location</td>
        </tr>
        <tr>
            <td><input type="text" name="by_keyword" placeholder="Registered Nurse" value="<?php echo isset(
                $_POST["by_keyword"]
            )
                ? htmlspecialchars($_POST["by_keyword"])
                : ""; ?>"></td>
            <td><input type="text" name="by_location" placeholder="Brisbane" value="<?php echo isset(
                $_POST["by_location"]
            )
                ? htmlspecialchars($_POST["by_location"])
                : ""; ?>"></td>
            <td><input type="submit" value="Search jobs"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <select name="by_contract_type">
                    <option value="" selected>Any contract type</option>
                    <option value="Full-time" <?php if (
                        isset($_POST["by_contract_type"]) &&
                        $_POST["by_contract_type"] == "Full-time"
                    ) {
                        echo "selected";
                    } ?>>Full-time</option>
                    <option value="Part-time" <?php if (
                        isset($_POST["by_contract_type"]) &&
                        $_POST["by_contract_type"] == "Part-time"
                    ) {
                        echo "selected";
                    } ?>>Part-time</option>
                    <option value="Casual" <?php if (
                        isset($_POST["by_contract_type"]) &&
                        $_POST["by_contract_type"] == "Casual"
                    ) {
                        echo "selected";
                    } ?>>Casual</option>
                    <option value="Contract" <?php if (
                        isset($_POST["by_contract_type"]) &&
                        $_POST["by_contract_type"] == "Contract"
                    ) {
                        echo "selected";
                    } ?>>Contract</option>
                    <option value="Temporary" <?php if (
                        isset($_POST["by_contract_type"]) &&
                        $_POST["by_contract_type"] == "Temporary"
                    ) {
                        echo "selected";
                    } ?>>Temporary</option>
                </select>
            </td>
            <td>
                <select name="by_rural_type">
                    <option value="" selected>Any rural type</option>
                    <option value="Metropolitan area" <?php if (
                        isset($_POST["by_rural_type"]) &&
                        $_POST["by_rural_type"] == "Metropolitan area"
                    ) {
                        echo "selected";
                    } ?>>Metropolitan area</option>
                    <option value="Regional centre" <?php if (
                        isset($_POST["by_rural_type"]) &&
                        $_POST["by_rural_type"] == "Regional centre"
                    ) {
                        echo "selected";
                    } ?>>Regional centre</option>
                    <option value="Large rural town" <?php if (
                        isset($_POST["by_rural_type"]) &&
                        $_POST["by_rural_type"] == "Large rural town"
                    ) {
                        echo "selected";
                    } ?>>Large rural town</option>
                    <option value="Medium rural town" <?php if (
                        isset($_POST["by_rural_type"]) &&
                        $_POST["by_rural_type"] == "Medium rural town"
                    ) {
                        echo "selected";
                    } ?>>Medium rural town</option>
                    <option value="Small rural town" <?php if (
                        isset($_POST["by_rural_type"]) &&
                        $_POST["by_rural_type"] == "Small rural town"
                    ) {
                        echo "selected";
                    } ?>>Small rural town</option>
                    <option value="Remote community" <?php if (
                        isset($_POST["by_rural_type"]) &&
                        $_POST["by_rural_type"] == "Remote community"
                    ) {
                        echo "selected";
                    } ?>>Remote community</option>
                    <option value="Very remote community" <?php if (
                        isset($_POST["by_rural_type"]) &&
                        $_POST["by_rural_type"] == "Very remote community"
                    ) {
                        echo "selected";
                    } ?>>Very remote community</option>
                </select>
            </td>
        </tr>
    </table><br><br>
    <input type="hidden" name="action" value="search_jobs">
</form>
    
<?php //retrieve data from home page search bar


if (isset($_SESSION["jobs"])) {
    $jobs      = $_SESSION["jobs"];
    $job_count = $_SESSION["job_count"]; //clear session data to avoid unintentional reuse
    //CHECK THIS IF ODD THINGS HAPPEN
    unset($_SESSION["jobs"]); //unset($_SESSION['job_count']);
}
if (isset($_SESSION["job_matches"])) {
    $job_matches = $_SESSION["job_matches"]; //uncommented - search function works
    //unset($_SESSION['job_matches']);
}
?>


<!-- display a map -->
<script>
    DBjobs = <?php echo json_encode($jobs); ?>;
    initMap(DBjobs);
</script>

<div id="map"></div> <br><br>

<?php //check if user is logged in and job match array is not empty

if (isset($_SESSION["user"]["jobTitle"])) {
    echo '<div class="job-listing">';
    echo "<h4>Job Matches:</h4>";
    foreach ($job_matches as $job): ?>
        <h5><?php echo htmlspecialchars($job["jobName"]); ?></h5>
        <div>Posted <?php echo date(
            "jS M Y",
            strtotime($job["jobListingDate"])
        ); ?></div>

        <div><?php echo htmlspecialchars($job["jobPlace"]); ?></div>
        <div><?php echo htmlspecialchars(
            $job["jobCity"] . ", " . $job["jobState"]
        ); ?></div>
        <div><?php echo htmlspecialchars($job["jobDescription"]); ?></div>
        

        <form action="." method="post">
            <input type="submit" value="View Listing">
            <input type="hidden" name="action" value="view_listing">
            <input type="hidden" name="jobID" value="<?php echo htmlspecialchars(
                $job["jobID"]
            ); ?>"> 
        </form>

<?php endforeach;
    echo "</div>";
} else {
    echo '<div class="job-listing">';
    echo "<h3>Create a profile and get job matches tailored to you.</h3>";
    echo '<div style="text-align: center; font-size: 18px;">';
    echo '<a href="/Graduate_Nurse_Job_Match/user/user_signup.php">Get started here</a>';
    echo "</div>";
    echo "</div>";
} ?>

<!-- list jobs. this displays either a full list of jobs by default
or a filtered list form search bar -->
<br><br>
<div class="job-listing">
<h4>Job Listings</h4>

<?php echo $job_count . " jobs"; ?>
    <?php foreach ($jobs as $job): ?>
        <h5><?php echo htmlspecialchars($job["jobName"]); ?></h5>
        <div>Posted <?php echo date(
            "jS M Y",
            strtotime($job["jobListingDate"])
        ); ?></div>

        <div><?php echo htmlspecialchars($job["jobPlace"]); ?></div>
        <div><?php echo htmlspecialchars(
            $job["jobCity"] . ", " . $job["jobState"]
        ); ?></div>
        <div><?php echo htmlspecialchars($job["jobDescription"]); ?></div>
        

        <form action="." method="post">
            <input type="submit" value="View Listing">
            <input type="hidden" name="action" value="view_listing">
            <input type="hidden" name="jobID" value="<?php echo htmlspecialchars(
                $job["jobID"]
            ); ?>"> 
        </form>

    <?php endforeach; ?>
</div>

<?php include "../view/footer.php"; ?>
