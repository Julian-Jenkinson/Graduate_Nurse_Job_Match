<?php include '../view/header.php'; ?>

<?php include('../js/map_script.php');?>

<h3>Jobs Search</h3>

<form action="." method="get">    
    <table>
        <tr>
            <td>Keyword</td>
            <td>Location</td>
        </tr>
        <tr>
            <td><input type="text" name="by_keyword" placeholder="Registered Nurse"></td>
            <td><input type="text" name="by_location" placeholder="Brisbane"></td>
            <td><input type="submit" value="Search jobs"></td>
            <td><input type="hidden" name="action" value="search_jobs"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <select name="by_contract_type">
                    <option value="any_job_type">Any contract type</option>
                    <option value="full_time">Full-time</option>
                    <option value="part_time">Part-time</option>
                    <option value="casual">Casual</option>
                    <option value="contract">Contract</option>
                </select>
            </td>
            <td>
                <select name="by_rural_type">
                <option value="Any rural rating">Any rural rating</option>
                <option value="Metropolitan area">Metropolitan area</option>
                <option value="Regional centre">Regional centre</option>
                <option value="Large rural town">Large rural town</option>
                <option value="Medium rural town">Medium rural town</option>
                <option value="Small rural town">Small rural town</option>
                <option value="Remote community">Remote community</option>
                <option value="Very remote community">Very remote community</option>
                </select>
            </td>
        </tr>
    </table><br><br>
</form>    



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


<!-- list jobs. this displays either a full list of jobs by default
or a filtered list form search bar -->
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
