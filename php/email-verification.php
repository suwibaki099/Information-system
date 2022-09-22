<?php

if (isset($_POST["verify_email"]))
{
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];

    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "admin");

    // mark email as verified
    $sql = "UPDATE users SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
    $result  = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) == 0)
    {
    echo
    
        die (
        "<div class='form'>
        <h3>Invalid Code.</h3><br/>
                  </div>");

    }


    echo "<div class='form'>
    <h3>You are registered successfully.</h3><br/>
    <p class='link'>Click here to <a href='login.php'>Login</a></p>
    </div>";
    
    exit();
}


?>

<form method="POST">
    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
    <input type="text" name="verification_code" placeholder="Enter verification code" required />

    <input type="submit" name="verify_email" value="Verify Email">
</form>