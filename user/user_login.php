<?php include '../view/header.php'; ?>
<link rel="stylesheet" href="user_login.css" type="text/css"/>

<div class="form-container">
    <h3><br>Graduate log in <br><br></h3>
    <br>

    <form action="." method="post">
        <label>Email:</label><br>
        <input type="text", name="email" >
        <br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password">
        <br><br>

        <input type="submit" value="Log in">
        <input type="hidden" name="action" value="get_user">
        <br><br>
    </form>

    <p>Dont have an account yet? <a href="user_signup.php">Sign up</a><br></p>
    <br><br>
</div>


<?php include '../view/footer.php'; ?>