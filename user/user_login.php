<?php require('../model/database.php');?>
<?php require('../model/users_db.php');?>


<?php include '../view/header.php'; ?>

<!-- i usedjora employer site for design -->

<h3>User log in</h3>

<br>
<label>Email:</label><br>
<input type="text" >
<br>
<br>
<label>Password:</label><br>
<input type="password" >
<!-- forgot password button? -->
<br><br>

<input type="submit" value="Log in">
<br><br>

<p>Dont have an account yet? <a href="user_signup.php">Sign up</a></p>
<br><br>

<?php include '../view/footer.php'; ?>