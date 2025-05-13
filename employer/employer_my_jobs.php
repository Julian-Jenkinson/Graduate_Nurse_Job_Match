<?php include "../view/employer_header.php"; ?>
<link rel="stylesheet" href="employer_my_jobs.css" type="text/css"/>

<div class="main-container">
    <h3>Employer Dashboard</h3>
    <!--
    <div class="logged-in-notice">
        you are logged in as <?php echo $employer["empEmail"]; ?>
    </div>
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
        <?php foreach ($my_jobs as $job): ?>
            <div class="job-listing">
                <div class="job-details">
                    <div><?php echo htmlspecialchars($job["jobName"]); ?></div>
                    <div>Posted <?php echo date(
                        "jS M Y",
                        strtotime($job["jobListingDate"])
                    ); ?></div>
                    <div><?php echo htmlspecialchars($job["jobPlace"]); ?></div>
                    <div><?php echo htmlspecialchars(
                        $job["jobCity"] . ", " . $job["jobState"]
                    ); ?></div>
                    <div><?php echo htmlspecialchars(
                        $job["jobSalary"]
                    ); ?></div>
                </div>
                
                <div class="job-actions">        
                    <table style="text-align: center; margin: 0 auto;">
                        <tr>
                            <td>
                                <form action="." method="post">
                                    <input type="submit" value="View Listing"/>
                                    <input type="hidden" name="action" value="view_listing">
                                    <input type="hidden" name="jobID" value="<?php echo htmlspecialchars(
                                        $job["jobID"]
                                    ); ?>">
                                </form>
                            </td>
                            <td>
                                <form action="." method="post">
                                    <input type="submit" value="Edit"/>
                                    <input type="hidden" name="action" value="edit_listing">
                                    <input type="hidden" name="jobID" value="<?php echo htmlspecialchars(
                                        $job["jobID"]
                                    ); ?>">
                                </form>
                            </td>
                            <td>
                                <form action="." method="post">
                                    <input type="submit" value="Delete"/>
                                    <input type="hidden" name="action" value="delete_listing">
                                    <input type="hidden" name="jobID" value="<?php echo htmlspecialchars(
                                        $job["jobID"]
                                    ); ?>">
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "../view/employer_footer.php"; ?>
