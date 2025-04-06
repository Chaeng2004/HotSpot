<?php
    session_start();
    include("database.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstname = mysqli_real_escape_string($con, $_POST['first_name']);
        $lastname = mysqli_real_escape_string($con, $_POST['last_name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = $_POST['password'];
        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "INSERT INTO passenger (first_name, last_name, email, password) 
                      VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";

            $result = mysqli_query($con, $query);

            if($result){
                echo "<script type='text/javascript'>alert('Successfully registered')</script>";
                 header("Location: User.php");
                die;
            } else {
                echo "<script type='text/javascript'>alert('Registration failed: " . mysqli_error($con) . "')</script>";
            }
        }
        else {
            echo "<script type='text/javascript'>alert('Please enter valid information')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up HopStop</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        
        <h2>Sign Up</h2>
        <div class="profile-pic">
            <img src="images/Jennie Kim.jpg" alt="Profile Picture">
            <input type="file" accept="image/*">
        </div>
        <form method = "POST">
        <div class="input-box">
            <label>First Name</label>
            <input type="text" name= "first_name"  required>
        </div>
        <div class="input-box">
            <label>Last Name</label>
            <input type="text" name="last_name" required>
        </div>
        <div class="input-box">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="input-box">
            <label>Create Password</label>
            <input type="password" name="password" required>
    </form>

        <div class="btn">
            <input type="submit" name="" value="Sign In" class="button"> 
        </div>
        <div class="signin">
            Already have an account? <a href="LogIn.php">Sign in</a>
        </div>
    </div>
</body>
</html>