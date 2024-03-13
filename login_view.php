<!DOCTYPE html>
<?php require_once "../contoller/login.php" ?>
<html>
    <head>
        <h1>Login Page!</h1>
        <title>Login</title>
    </head>
    <body>
        <h3>Login: </h3>
        <form method="post" action="create.php" >
            Username: <input name="formForUserName"/><br/>
            Password: <input name="formForPassword"/><br/>
            <input type="submit" name="Login" value="Login" />
        </form>
    </body>
</html>
