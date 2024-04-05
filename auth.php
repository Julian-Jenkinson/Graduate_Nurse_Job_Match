<!DOCTYPE html>
<link rel="stylesheet" href="./user/user_login.css" type="text/css"/>

<style>
    body {
    font-family: 'Anek Devanagari', sans-serif;
    }
</style>

<html>
    <body>
        <div class="form-container">
            <h3><br><br>Authentication<br><br></h3>
            <form action="." method="post">
                <label>User:</label><br>
                <input type="text", name="email">
                <br><br>
                <label>Password:</label><br>
                <input type="password", name="password" >
                <br><br>
                <input type="submit" value="Login">
                <input type="hidden" name="action" value="login">
                <br><br>
            </form>
        </div>        
    </body>
</html>


