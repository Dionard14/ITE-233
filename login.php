<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login Form</h1>
    <form action="process.php" method="POST">
    Username: <input type="text" name="loginform_username" required><br/> 
    Password: <input type="password" name="loginform_password" required><br/> 
    <input type="submit" name="loginform_process" value="Login to Website"> 
</form>
<hr>
<a href="registration.php">Create an account</a>
</body>
</html>