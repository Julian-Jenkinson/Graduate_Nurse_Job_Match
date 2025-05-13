<?php include "../view/employer_header.php"; ?>
<link rel="stylesheet" href="employer_login.css" type="text/css"/>

<div class="form-container">
    
    <h3><br>Employer log in<br><br></h3>
    
    <form action="." method="post">
        <label>Email:</label><br>
        <input type="text", name="email">
        <br><br>
        <label>Password:</label><br>
        <input type="password", name="password" >
        <br><br>
        <input type="submit" value="Log in as Employer">
        <input type="hidden" name="action" value="get_employer">
        <br><br>
    </form>

    <p>Dont have an employer account yet? <a href="employer_signup.php">Sign up</a></p>
    <p><br>Are you looking for jobs?</p>
    <p><a href="../user/">Log in</a> or <a href="../user/user_signup.php">sign up</a> as a job seeker</p>
    <br><br>
</div>

<?php include "../view/employer_footer.php"; ?>


