<?php include '../view/header.php'; ?>



<h3>user profile</h3>
<p>you are logged in as <?php echo $user['userEmail']; ?></p>

<p>create profile</p>

<p>view profile</p>

<p>edit profile</p>

<p>show recommended jobs</p>

<form action="." method="post">
    <input type="submit" value="Logout"/>
    <input type="hidden" name="action" value="logout">
</form>

<?php include '../view/footer.php'; ?>