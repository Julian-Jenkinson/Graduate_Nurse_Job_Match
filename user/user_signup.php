<?php require('../model/database.php');?>
<?php require('../model/users_db.php');?>


<?php include '../view/header.php'; ?>
<link rel="stylesheet" href="user_signup.css" type="text/css"/>

<div class="form-container">
    <h3>User sign up</h3>

    <br>
    <form action="." method="post">
        <label>Email:</label><br>
        <input type="text" name="email">
        <br><br>
        <label>Password:</label><br>
        <input type="password" name="password1">
        <br><br>
        <label>Confirm Password:</label><br>
        <input type="password" name="password2">
        <br><br>

        <input type="submit" value="Sign up">
        <input type="hidden" name="action" value="add_user">
        <br><br>
    </form>

    <p>Already have an account? <a href="user_login.php">login</a></p>
    <br><br>
</div>

<?php include '../view/footer.php'; ?>