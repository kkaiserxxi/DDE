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
    <title>Deep Sea-FAQ</title>
   
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
    <link rel="stylesheet" href="css/FAQ.css">
</head>
<body>
   
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
        <li><a href="contact.php">Contact</a></li>
    </ul>
</header>


    <div class="faq-container">
        <h1>Frequently Asked Questions</h1>
        <div class="faq-item">
            <div class="faq-question">What equipment do I need to bring?</div>
            <div class="faq-answer">
                <p>All essential diving equipment is provided by the Dive Club. However, you're welcome to bring your own gear if you prefer.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Are the diving spots safe?</div>
            <div class="faq-answer">
                <p>Yes, all our diving spots are carefully selected and monitored to ensure maximum safety for all participants.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">How do I book a dive trip?</div>
            <div class="faq-answer">
                <p>You can book a dive trip through our website on the booking page, or contact us directly via phone or email.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">What equipment do I need to bring?</div>
            <div class="faq-answer">
                <p>All essential diving equipment is provided by the Dive Club. However, you're welcome to bring your own gear if you prefer.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Are the diving spots safe?</div>
            <div class="faq-answer">
                <p>Yes, all our diving spots are carefully selected and monitored to ensure maximum safety for all participants.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">How do I book a dive trip?</div>
            <div class="faq-answer">
                <p>You can book a dive trip through our website on the booking page, or contact us directly via phone or email.</p>
            </div>
        </div>
        <!-- Add more FAQ items as needed -->
    </div>

    <!-- footer -->

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
                <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="FAQ.php" class="active">FAQ </a></li>
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
        // Toggle FAQ Answer visibility
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const faqItem = item.parentElement;
                faqItem.classList.toggle('active');
            });
        });
</script>
</body>
</html>