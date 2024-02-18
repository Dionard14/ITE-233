<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
</head>
<body>
<h1>Registration Form</h1>
<form action="process.php" method="POST">
        Username: <input type="text" name="regform_username" required><br/> 
        Email: <input type="email" name="regform_email" required><br/> 
        Password: <input type="password" name="regform_password" required><br/> 
        Confirm Password: <input type="password" name="regform_password2" required><br/> <br/>

        First Name: <input type="text" name="regform_fname" required><br/> 
        Last Name: <input type="text" name="regform_lname" required><br/> <br/>
        
        Birthday: <input type="date" name="regform_bday" required><br/> 
        Address: <br/>
        <textarea name="regform_address" required></textarea>
        <br/><br/>
        <input type="submit" name="regform_process" value="Create Account"> 
</form>
<hr>
<a href="login.php">Login here</a>



</body>
</html>