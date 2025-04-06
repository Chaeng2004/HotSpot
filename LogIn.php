<?php
session_start();
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    if (!empty($Email) && !empty($Password) && !is_numeric($Email)) {

        // Use prepared statements to prevent SQL injection
        $stmt = $con->prepare("SELECT * FROM passenger WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $user_data = $result->fetch_assoc();

            // Verify password
            if (password_verify($Password, $user_data['password'])) {
                // Store user info in session
                $_SESSION['user_id'] = $user_data['id'];  // assuming you have an `id` field
                $_SESSION['email'] = $user_data['email'];
                
                header("Location: User.php");
                exit;
            }
        }

        // Alert for any login failure
        echo "<script type='text/javascript'>alert('Wrong username or password');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Please enter a valid email and password');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HopStop LogIn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="logo">HopStop</div>
        <br>
        <div class="welcome">Welcome Back!</div>
        <p>Sign in to continue</p>
        <form method="POST">
        <div class="input-box">
            <label>Email</label>
            <input type="email" name="email" required />
        </div>
        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <div class="forgot">
            <a href="#">Forgot Password?</a>
        </div>
        
        <div class="btn">
            <input type="submit" name="" value="Sign Up" class="button"> 
        </div>
        </form>
       

        <div class="signup">
            Don't have an account? <a href="SignUp.php">Sign up</a>
        </div>
    </div>
</body>
</html>