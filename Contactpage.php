<?php
    session_start();

    include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contactpage.css">
    <title>HopStop</title>
    
</head>
<body>
    <header>
        <div class="container nav-container">
            <div class="logo">
                <div class="logo-circle"></div>
                <span><B>HopStop</B></span>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="Homepage.php">Home</a></li>
                    <li><a href="Aboutpage.php">About</a></li>
                    <li><a href="Contactpage.php">Contact</a></li>
                </ul>
            </nav>
            <button class="login-btn">Log In</button>
        </div>
    </header>
      
   
    <section class="hero">
        <img src="images/Homepage_image1.png" alt="Bus interior image">
        <h1 class="hero-text">HopStop</h1>
    </section>

    <main class="contact-container">
        <div class="contact-heading">Contact</div>

        <div class="contact-grid">
            <div class="contact-section">
                <h3>Location</h3>
                <p>Unit 6Y, #75 OBS Building III,</p>
                <p>Lopez Jaena St., Brgy Doña Aurora,</p>
                <p>Zamboanga City, Philippines 1113</p>
            </div>

            <div class="contact-section">
                <h3>Hotline</h3>
                <p>Local: ( +63 ) 917 535 1501 | ( +63 ) 2 7507 857500000</p>
            </div>

            <div class="contact-section">
                <h3>Email</h3>
                <p>contact@hopstop.transit.com</p>
            </div>

            <div class="contact-section">
                <h3>Contact</h3>
                <p>1234567890-098</p>
            </div>
        </div>

        <div class="social-media">
            <h3>Social Media</h3>
            <div class="social-icons">
                <div class="social-icon">
                    <div class="icon-circle"></div>
                    <span>Facebook</span>
                </div>
                <div class="social-icon">
                    <div class="icon-circle"></div>
                    <span>Instagram</span>
                </div>
                <div class="social-icon">
                    <div class="icon-circle"></div>
                    <span>Twitter</span>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 HopStop. All rights reserved.</p>
    </footer>

  <script src="Contactpage.js"></script>

</body>
</html>