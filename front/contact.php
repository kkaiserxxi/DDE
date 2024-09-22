<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Deep Sea-contact</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contact.css">
    <style>
body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #C1E8FF;
  height: 100vh;
  position: relative;
}

    </style>

</head>

<body>
    <?php
    // Check if the 'success' parameter is set in the URL
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        $successMessage = "Your message has been sent successfully!";
    }
    ?>
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header>
        <a href="index.php" class="logo">
            <img src="images/logo.png" alt="Logo">
        </a>
        <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
    </header>

    <br><br>

    <section class="contact-section">
        <div class="contact-wrapper">
            <div class="contact-container" style="margin-top: 50px;">
                <div class="map-container">
                    <h2>Find Us Here</h2>
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13065.539329847186!2d35.00146821472833!3d29.5236220185268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f15.1!5e1!3m2!1sar!2sjo!4v1725099045506!5m2!1sar!2sjo" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="contact-container">
                <h2>Contact Us</h2>
                
                <?php if (isset($successMessage)): ?>
                <div class="success-message">
                    <?php echo $successMessage; ?>
                </div>
                <?php endif; ?>
                
                <form action="connect2.php" method="POST">
                    <label for="FullName">Full Name:</label>
                    <input type="text" id="FullName" name="FullName" required>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>

            <div class="contact-details">
                <h3>Our Contact Information</h3>
                <ul>
                    <li><i class="bi bi-geo-alt"></i> Address: 123 Street, City</li>
                    <li><i class="bi bi-telephone"></i> +962 0787139731</li>
                    <li><i class="bi bi-envelope"></i> 
                        <a href="mailto:celestialsailors9@gmail.com">celestialsailors9@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <br>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="contact">
                <h3>Contact Us</h3>
                <ul class="contact-list">
                    <li><i class="bi bi-geo-alt"></i> Address: 123 Street, City</li>
                    <li><i class="bi bi-telephone"></i> +962 0787139731</li>
                    <li><i class="bi bi-envelope"></i> 
                        <a href="mailto:celestialsailors9@gmail.com">celestialsailors9@gmail.com</a>
                    </li>
                </ul>
            </div>
            <div class="menu-links">
                <h3>Menu Links</h3>
                <ul class="link-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <ul class="link-menu">
                    <li><a href="contact.php" class="active">Contact Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="FAQ.php">FAQ </a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    });
    </script>
</body>
</html>
