<?php include '../view/employer_header.php'; ?>

<h3>Employer My Jobs</h3>

<p>you are logged in as <?php echo $employer['empEmail']; ?></p>

<p>view my job listings</p>

<p>create job listing</p>

<p>edit job listing</p>

<p>delete job listing</p>

<form action="." method="post">
    <input type="submit" value="Logout"/>
    <input type="hidden" name="action" value="logout">
</form>

<?php include '../view/footer.php'; ?>