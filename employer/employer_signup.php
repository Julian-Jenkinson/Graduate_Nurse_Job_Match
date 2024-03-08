<?php include '../view/employer_header.php'; ?>

<!-- i usedjora employer site for design -->

<h3>Employer sign up</h3>
<br>

<form action="." method="post" id="aligned">    
    <label>Email:</label><br>
    <input type="text" name="email">
    <br><br>
    <label>Password:</label><br>
    <input type="password" name= "password1" >
    <br><br>
    <label>Confirm password:</label><br>
    <input type="password" name="password2" >
    <br><br>
    <input type="submit" value="Sign up as Employer">
    <input type="hidden" name="action" value="add_employer">
    <br><br>
</form>

<p>Already have an employer account?</p>
<p><a href="employer_login.php"> Employer log in</a></p>
<br><br>

<p>Are you looking for jobs?</p>
<p><a href="../user/user_login.php">Log in</a> or <a href="../user/user_signup.php">sign up</a> as a job seeker</p>
<br><br>

<?php include '../view/footer.php'; ?>