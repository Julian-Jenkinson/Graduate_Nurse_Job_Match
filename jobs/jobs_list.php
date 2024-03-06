<?php include '../view/header.php'; ?>

<?php include('../js/map_script.php');?>

<h3>Jobs Search</h3>
<table>
    <tr>
        <td><input type="text" placeholder="Keyword"></td>
        <td><input type="text" placeholder="City, State, Postcode"></td>
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

<!-- display a table of products -->
<table>
    <tr>
        <th>Job ID</th>
        <th>Job Name</th>
        <th>Salary</th>
        <th>Place</th>
        <th>Address</th>
        <th>Link</th>
    </tr>
    <?php foreach ($jobs as $job) : ?>
    <tr>
        <td><?php echo htmlspecialchars($job['jobID']); ?></td>
        <td><?php echo htmlspecialchars($job['jobName']); ?></td>
        <td>$<?php echo htmlspecialchars($job['jobSalary']); ?></td>
        <td><?php echo htmlspecialchars($job['jobPlace']); ?></td>
        <td><?php echo htmlspecialchars($job['jobAddress']); ?></td>
        <td>Link to job page</td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include '../view/footer.php'; ?>
