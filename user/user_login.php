<?php include '../view/header.php'; ?>

<h3>User log in</h3>
<br>

<form action="." method="post">
    <label>Email:</label><br>
    <input type="text", name="email" >
    <br><br>
    
    <label>Password:</label><br>
    <input type="password" name="password">
    <!-- forgot password button? -->
    <br><br>

    <input type="submit" value="Log in">
    <input type="hidden" name="action" value="get_user">
    <br><br>
</form>


<p>Dont have an account yet? <a href="user_signup.php">Sign up</a></p>
<br><br>

<?php include '../view/footer.php'; ?>