<!DOCTYPE html>
<?php require_once "../contoller/create.php" ?>
<html>
<head>
<h1>Registration Page!<h1>
<title>Create Page</title>
</head>
<body>
<h3>Create an Account: </h3>
<form method="post" action="login.php" >
    Name: <input name="formFieldForName"/><br/>
    Username: <input name="formFieldForUserName"/><br/>
    Password: <input name="formFieldForPassword"/><br/>
    Email Address: <input name="formFieldForEmailAddress"/><br/>
    Phone Number: <input name="formFieldForPhone"/><br/>
    Address: <input name="formFieldForAddress"/><br/>
    <input type="submit" value="Create an Account" />
</form>
</body>
</html>
