<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleNavbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>

<?php
include "action3.php";
include "../Navbar.php";
?>

    <div class="global_container">
    <form class="login_form" action="action3.php" method="post">
        <form class="login_form"">
            <div class="form-control">
                <label> Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-control">
                <label> Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-buttons">
                <input class="login_button" type="submit" value="Login">
                <div class="signup_info">
                    <p class="signup_text">Dont you have an account ?</p><a class="signup_link" href="register.php"> Register</a>
                </div>
            </div>
        </form>
    </div>

    
    
</body>


</html>