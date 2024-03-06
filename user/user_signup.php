<?php require('../model/database.php');?>
<?php require('../model/users_db.php');?>


<?php include '../view/header.php'; ?>

<!-- i usedjora employer site for design -->

<h3>User sign up</h3>

<br>
<label>Email:</label><br>
<input type="text" >
<br>
<br>
<label>Password:</label><br>
<input type="password" >
<br><br>

<input type="submit" value="Sign up">
<br><br>

<p>Allready have an account? <a href="user_login.php">login</a></p>
<br><br>

<?php include '../view/footer.php'; ?>