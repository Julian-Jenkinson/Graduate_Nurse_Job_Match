<?php include '../view/header.php'; ?>
<main>
    <h1>Jobs List</h1>
    <!-- display a table of products -->
    
    <table>
        <tr>
            <th>Job ID</th>
            <th>Job Name</th>
            <th>Salary</th>
        </tr>
        <?php foreach ($jobs as $job) : ?>
        <tr>
            <td><?php echo htmlspecialchars($job['jobID']); ?></td>
            <td><?php echo htmlspecialchars($job['jobName']); ?></td>
            <td><?php echo htmlspecialchars($job['jobSalary']); ?></td>        
        </tr>
        <?php endforeach; ?>
    </table>

    

</main>
<?php include '../view/footer.php'; ?>