<?php include '../view/header.php'; ?>

<h3>Position: <?php echo htmlspecialchars($job['jobName']); ?></h3>
<div>Place: <?php echo htmlspecialchars($job['jobPlace']); ?></div>
<div>Description: <?php echo htmlspecialchars($job['jobDescription']); ?></div>
<div>About Us: <?php echo htmlspecialchars($job['jobAboutUs']); ?></div>
<div>Salary: $<?php echo htmlspecialchars($job['jobSalary']); ?></div>
<div>Contract Type: <?php echo htmlspecialchars($job['jobContractType']); ?></div>
<div>Location: <?php echo htmlspecialchars($job['jobCity'] . ', ' . $job['jobState']); ?></div>
<div>Monash Rating: <?php echo htmlspecialchars($job['jobMonashRating']); ?></div>
<div>Date Listed: <?php echo htmlspecialchars($job['jobListingDate']); ?></div>
<div>Apply: <?php echo htmlspecialchars($job['jobContactEmail']); ?></div>
<div><a href="<?php echo htmlspecialchars($job['jobLink']); ?>">Link to Website</a></div>


        

<?php include '../view/footer.php'; ?>