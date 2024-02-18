<?php

include "conn.php";
session_start();


//this is for registration
if(isset($_POST['regform_process'])){
    $process_username = $_POST['regform_username']; 
    $process_email = $_POST['regform_email']; 
    $process_password = $_POST['regform_password']; 
    $process_password2 = $_POST['regform_password2']; 
    $process_fname = $_POST['regform_fname'];
    $process_lname = $_POST['regform_lname'];
    $process_bday = $_POST['regform_bday'];
    $process_address = $_POST['regform_address'];

$checkUsernameStatement = "SELECT * FROM `users` WHERE `username` = '$process_username'";
$checkUsernameQuery = mysqli_query($conn, $checkUsernameStatement);
$countUsername = mysqli_num_rows($checkUsernameQuery); //0 or 1

$checkEmailStatement = "SELECT * FROM `users` WHERE `email`='$process_email'"; 
$checkEmailQuery = mysqli_query($conn, $checkEmailStatement);
$countEmail = mysqli_num_rows($checkEmailQuery); //0 or 1

        if($countUsername == 0){ 
            if($countEmail == 0){
                if($process_password == $process_password2){ 
                    $insertUserStatement = "INSERT INTO `users`
                                            (`username`, `email`, `password`,
                                            `name_first`, `name_last`, 
                                            `bday`, `address`)
                                            VALUES
                                            ('$process_username', '$process_email', 
                                            '$process_password', 
                                            '$process_fname', '$process_lname',
                                            '$process_bday', '$process_address')";
                mysqli_query($conn, $insertUserStatement);

    echo "ACCOUNT CREATION SUCCESS!";
        }else{
            echo "Password did not matched. Please try again.";
        }
    }else{
        echo "Email is already used.";
    }
}else{
    echo "Username is already taken.";
}
}


/* 
// Login Validation Level: Basic
if(isset($_POST['loginform_process'])){
    $process_username = $_POST['loginform_username'];
    $process_password = $_POST['loginform_password'];

    $checkAccountStatement = "SELECT * FROM `users` WHERE `username`='$process_username' AND `password`='$process_password'"; 
    $checkAccountQuery = mysqli_query($conn, $checkAccountStatement);
    $countAccount = mysqli_num_rows($checkAccountQuery);

            if($countAccount == 1) {
                echo "This will process to the authenticated page";
            }else{
                echo "Login Failed";
            }
            }
*/


// Login Validation Level: Advanced 
    if(isset($_POST['loginform_process'])){
    $process_username = $_POST['loginform_username'];
    $process_password = $_POST['loginform_password'];
    
    $checkAccountStatement = "SELECT * FROM `users` WHERE `username`='$process_username'"; $checkAccountQuery = mysqli_query($conn, $checkAccountStatement);
    $countAccount = mysqli_num_rows($checkAccountQuery);
        if($countAccount == 1) {
            $rowData = mysqli_fetch_assoc($checkAccountQuery); 
            $databasePassword = $rowData['password'];
            if($databasePassword == $process_password){
                 echo "This will proceed to the authenticated page";
            }else{
                echo "Incorrect Password";
            }
        }else{
        echo "Please create an account";
        }
    }


?>