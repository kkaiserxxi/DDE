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
    <title>Deep Sea-gallery</title>

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
<link rel="stylesheet" href="css/gallery.css">
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
        <li><a href="index.php" >Home</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</header>


    <br><br><br>
    <!-- Gallery Section -->
    <section class="gallery">
        <img src="images\10.jpeg" alt="Gallery Image 1"
            onclick="openModal(this)">
        <img src="images\11.jpeg" alt="Gallery Image 2"
            onclick="openModal(this)">
        <img src="images\12.jpeg" alt="Gallery Image 3"
            onclick="openModal(this)">
        <img src="images\13.jpeg" alt="Gallery Image 4"
            onclick="openModal(this)">
        <img src="images\14.jpeg" alt="Gallery Image 5"
            onclick="openModal(this)">
        <img src="images\15.jpeg" alt="Gallery Image 6"
            onclick="openModal(this)">
        <img src="images\16.jpeg" alt="Gallery Image 1"
            onclick="openModal(this)">
        <img src="images\17.jpeg" alt="Gallery Image 2"
            onclick="openModal(this)">
        <img src="images\18.jpeg" alt="Gallery Image 3"
            onclick="openModal(this)">
        <img src="images\19.jpeg" alt="Gallery Image 4"
            onclick="openModal(this)">
        <img src="images\20.jpeg" alt="Gallery Image 5"
            onclick="openModal(this)">
        <img src="images\21.jpeg" alt="Gallery Image 6"
            onclick="openModal(this)">
        <img src="images\22.jpeg" alt="Gallery Image 5"
            onclick="openModal(this)">            


    </section>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="img01">
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
                    <li><a href="gallery.php" class="active">Gallery</a></li>
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
        // Select all images in the gallery
        const images = document.querySelectorAll('.gallery img');

        // Add event listener to each image
        images.forEach(image => {
            image.addEventListener('click', () => {
                // Check if this image is already active
                if (image.classList.contains('active')) {
                    // Remove 'active' class to shrink the image
                    image.classList.remove('active');
                } else {
                    // Remove 'active' class from any currently active image
                    document.querySelector('.gallery img.active')?.classList.remove('active');

                    // Add 'active' class to the clicked image
                    image.classList.add('active');
                }
            });
        });



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