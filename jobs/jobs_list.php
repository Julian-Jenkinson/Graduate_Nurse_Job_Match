<?php include '../view/header.php'; ?>

<?php include('../js/map_script.php');?>

<h3>Jobs Search</h3>
<table>
    <tr>
        <td>Keyword</td>
        <td>Location</td>
    </tr>
    <tr>
        <td><input type="text" placeholder="Registered Nurse"></td>
        <td><input type="text" placeholder="Brisbane"></td>
        <td><input type="submit" value="Search jobs"></td>
    </tr>
</table>
<table>
    <tr>
        <td>
            <select name="job_type" id="job_type">
                <option value="any_job_type">Any job type</option>
                <option value="full_time">Full-time</option>
                <option value="part_time">Part-time</option>
                <option value="casual">Casual</option>
                <option value="contract">Contract</option>
            </select>
        </td>
        <td>
            <select name="distance" id="distance">
                <option value="any_distance">Any distance</option>
                <option value="within_5">Within 5kms</option>
                <option value="within_20">Within 20kms</option>
                <option value="within_50">Within 50kms</option>
                <option value="within_100">Within 100kms</option>
            </select>
        </td>
        <td>
            <select name="time" id="time">
                <option value="any_time">Any time</option>
                <option value="last_24h">Last 24hrs </option>
                <option value="last_7d">Last 7 days</option>
                <option value="last_14d">Last 14 days</option>
                <option value="last_30d">Last 30 days</option>
            </select>
        </td>
        <td>
            <select name="salary" id="salary">
                <option value="any_salary">Any salary</option>
                <option value="40+">$40,000+</option>
                <option value="60+">$60,000+</option>
                <option value="80+">$80,000+</option>
                <option value="120+">$120,000+</option>
            </select>
        </td>
        <td><button>Reset filters</button></td>
    </tr>
</table>
<br><br>

<!-- display a map -->
<script>
    initMap();
</script>

<div id="map"></div> <br><br>

<?php 
    if (isset($_SESSION['user'])) {
    // if user is logged in, display job matches
       echo '<h4>Recommendations</h4> 
       <div>job 1 here</div>
       <div>job 2 here</div>
       <div>job 3 here</div>';
    } 
?>


<!-- list jobs -->
<h4>Listings</h4>
<?php echo $job_count . ' jobs' ; ?>
    <?php foreach ($jobs as $job) : ?>
        <h5><?php echo htmlspecialchars($job['jobName']); ?></h5>
        <div>Posted <?php echo date('jS M Y', strtotime($job['jobListingDate'])); ?></div>

        <div><?php echo htmlspecialchars($job['jobPlace']); ?></div>
        <div><?php echo htmlspecialchars($job['jobCity'] . ', ' . $job['jobState']); ?></div>
        <div><?php echo htmlspecialchars($job['jobDescription']); ?></div>
        

        <form action="." method="post">
            <input type="submit" value="View Listing">
            <input type="hidden" name="action" value="view_listing">
            <input type="hidden" name="jobID" value="<?php echo htmlspecialchars($job['jobID']); ?>"> 
        </form>

    <?php endforeach; ?>

<?php include '../view/footer.php'; ?>
