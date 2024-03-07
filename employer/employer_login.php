<?php include '../view/employer_header.php'; ?>

<h3>Employer log in</h3>
<br>

<form action="." method="post" id="aligned">
    <label>Email:</label><br>
    <input type="text", name="email">
    <br><br>
    
    <label>Password:</label><br>
    <input type="password", name="password" >
    <!-- forgot password button? -->
    <br><br>

    <input type="submit" value="Log in as Employer">
    <input type="hidden" name="action" value="get_employer">
    <br><br>
</form>

<p>Dont have an employer account yet? <a href="employer_signup.php">Sign up</a></p>
<br><br>

<p>Are you looking for jobs?</p>
<p><a href="../user/">Log in</a> or <a href="../user/user_signup.php">sign up</a> as a job seeker</p>
<br><br>



<?php include '../view/footer.php'; ?>


