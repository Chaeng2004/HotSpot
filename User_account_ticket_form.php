<?php
 session_start();

 include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="User_account_ticket_form.css">
    <title>HopStop - Ticket Form</title>
</head>
<body>
    <header>
        <div class="container nav-container">
              <div class="logo">
                <div class="logo-circle"></div>
                <span><b>HopStop</b></span>
              </div>
              <nav>
                  <ul class="nav-links">
                    <li><a href="User.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
              </nav>
       
              <div class="user-profile" id="profileButton">
                 <i class ="fas fa-user-circle"></i>
              </div>
       
              <div class="profile-dropdown" id="profileDropdown">
                  <div class="dropdown-item">Profile</div>
                  <div class="dropdown-item">Logout</div>
              </div>
          </div>
          <script src="Userlogout.js"></script>
    </header>

    <div class="container3">
        <!-- Image Slider -->
        <div class="slider-container">
            <div class="slider" id="imageSlider">
                <img src="images/bus1.png" alt="Bus Image 1" class="slider-img active" id="img1">
                <img src="images/ceres1.png" alt="Bus Image 2" class="slider-img" id="img2">
                <div class="slider-indicators">
                    <div class="indicator active" onclick="changeSlide(0)"></div>
                    <div class="indicator" onclick="changeSlide(1)"></div>
                </div>
            </div>
        </div>

        <!-- Ticket Form -->
        <div class="ticket-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>

            <div class="form-group">
                <label>Passenger Type:</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="regular" name="passengerType" value="regular" checked>
                        <label for="regular">Regular</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="pwd" name="passengerType" value="pwd">
                        <label for="pwd">PWD/Senior</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="student" name="passengerType" value="student">
                        <label for="student">Student</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="inline-group">
                    <label for="seatNo">Seat No.</label>
                    <button class="action-button" onclick="redirectToSeatSelection()">Find seat</button>
                    <label for="busId">Bus ID: <span class="auto-generated">NO-012-123</span></label>
                </div>
            </div>

            <div class="form-group">
                <label>From: <span class="auto-generated">Zamboanga</span></label>
            </div>

            <div class="form-group">
                <label>To: <span class="auto-generated">Manila</span></label>
            </div>

            <div class="form-group">
                <label>Departure: <span class="auto-generated">6AM</span></label>
            </div>

            <div class="form-group">
                <label>Arrival: <span class="auto-generated">10PM</span></label>
            </div>

            <div class="form-group">
                <div class="inline-group">
                    <label>ID Verification:</label>
                    <button class="action-button">Upload ID</button>
                </div>
            </div>

            <div class="form-group">
                <label>Price: <span class="auto-generated">PHP 750.00</span></label>
            </div>

            <div class="form-group">
                <label for="remarks">Remarks:</label>
                <textarea id="remarks" name="remarks"></textarea>
            </div>

            <button class="print-button">Print ticket</button>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer"></div>

    <script>
        // Image slider functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slider-img');
        const indicators = document.querySelectorAll('.indicator');
        const totalSlides = slides.length;
        let slideInterval;

        // Function to change slide
        function changeSlide(index) {
            currentSlide = index;
            updateSlider();
        }

        // Update the slider to show the current slide
        function updateSlider() {
            slides.forEach((slide, index) => {
                if (index === currentSlide) {
                    slide.classList.add('active');
                } else {
                    slide.classList.remove('active');
                }
            });

            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        // Auto-slide functionality
        function startAutoSlide() {
            slideInterval = setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            }, 5000); // Change slide every 5 seconds
        }

        // Pause auto-slide on hover
        const sliderContainer = document.querySelector('.slider-container');
        sliderContainer.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        // Resume auto-slide when mouse leaves
        sliderContainer.addEventListener('mouseleave', () => {
            startAutoSlide();
        });

        // Start the auto-slider
        startAutoSlide();

        // Manual slide change with indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                changeSlide(index);
            });
        });

        function redirectToSeatSelection() {
            window.location.href = "User_account_seatSelection.php";
        }
    </script>


</body>
</html>