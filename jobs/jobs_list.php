<?php include '../view/header.php'; ?>

<?php include('../js/map_script.php');?>

<h3>Jobs List</h3>
<tr>
    <th>Filters:</th>
    <th><select name="" id=""></select>
    </th>
</tr><br><br>

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
