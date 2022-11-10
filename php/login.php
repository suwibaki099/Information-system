<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style-login.css"/>
</head>
<body >
<?php

require 'password.php';
if (isset($_POST["login"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "admin");

    // check if credentials are okay, and email is verified
    $sql = "SELECT * FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0)
    {
        die("Email not found.");
    }

    $user = mysqli_fetch_object($result);

    if (!password_verify($password, $user->password))
    {
        echo
        die (
        "<div class='form'>
        <h3>Incorrect Email/Password.</h3><br/>
        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>");

    }

    if ($user->email_verified_at == null)
    {
        die("Please verify your email <a href='email-verification.php?email=" . $email . "'>from here</a>");
    }

   
    header("location: home.php");

    exit();
    
}



?>
<div class="container">
<form class="form" method="post" name="login">
    <h1 class="login-title">Sign in</h1>
    <input type="email" class="login-input" name="email" placeholder="Enter email" autofocus="true" require/>
    <input type="password" class="login-input" name="password" placeholder="Enter password" required />
    <input type="submit" name="login" value="Sign in" class="login-button"/>&nbsp;
    <button type="submit" onclick= "document.location ='register.php'"  value="Register" class="login-button">Register</button>

</form>
</div>

