<?php include '../view/employer_header.php'; ?>
<link rel="stylesheet" href="employer_my_jobs.css" type="text/css"/>

<div class="main-container">
    <h3>Employer Dashboard</h3>

    <div class="logged-in-notice">
        you are logged in as <?php echo $employer['empEmail']; ?>
    </div>
    <!-- log out now in header
    <form action="." method="post">
        <input type="submit" value="Logout"/>
        <input type="hidden" name="action" value="logout">
    </form><br>
    -->

    <h4>Post a job</h4>
    <form action="." method="post">
        <input type="submit" value="Create new listing"/>
        <input type="hidden" name="action" value="create_job">
    </form><br>

    <h4>Active listings</h4>
    <p>You currently have <?php echo $job_count; ?> active job listings</p>

    <!-- Display employer's jobs -->
    <div class="jobs-container">
        <?php foreach ($my_jobs as $job) : ?>
            <div class="job-listing">
                <div class="job-details">
                    <div><?php echo htmlspecialchars($job['jobName']); ?></div>
                    <div>Posted <?php echo date('jS M Y', strtotime($job['jobListingDate'])); ?></div>
                    <div><?php echo htmlspecialchars($job['jobPlace']); ?></div>
                    <div><?php echo htmlspecialchars($job['jobCity'] . ', ' . $job['jobState']); ?></div>
                    <div><?php echo htmlspecialchars($job['jobSalary']); ?></div>
                </div>
                
                <div class="job-actions">
                    <form action="." method="post">
                        <input type="submit" value="View Listing"/>
                        <input type="hidden" name="action" value="view_listing">
                        <input type="hidden" name="jobID" value="<?php echo htmlspecialchars($job['jobID']); ?>">
                    </form>
                    <form action="." method="post">
                        <input type="submit" value="Edit"/>
                        <input type="hidden" name="action" value="edit_listing">
                        <input type="hidden" name="jobID" value="<?php echo htmlspecialchars($job['jobID']); ?>">
                    </form>
                    <form action="." method="post">
                        <input type="submit" value="Delete"/>
                        <input type="hidden" name="action" value="delete_listing">
                        <input type="hidden" name="jobID" value="<?php echo htmlspecialchars($job['jobID']); ?>">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- logout now in header
<form action="." method="post">
    <input type="submit" value="Logout"/>
    <input type="hidden" name="action" value="logout">
</form>
-->

<?php include '../view/employer_footer.php'; ?>
