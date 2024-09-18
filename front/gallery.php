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
    <title>DeepDiveExpo</title>

    <link rel="icon" href="https://i.pinimg.com/originals/88/33/f2/8833f2811794959bdcc2433a512a7bac.png"
        type="image/png">
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
        <img src="https://i.pinimg.com/564x/a7/5f/86/a75f8694d45f48d5535ec52c08794d35.jpg" alt="Gallery Image 1"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/57/c5/cf/57c5cfe9e13e3dff4ef9ac0fbe980929.jpg" alt="Gallery Image 2"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/736x/56/c7/7d/56c77d0abe3365a2e45afca056fa622e.jpg" alt="Gallery Image 3"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/dd/74/86/dd7486973c58325107bed97165d1fab8.jpg" alt="Gallery Image 4"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/d9/94/96/d994963a233557996fe081ec0fd8a9ca.jpg" alt="Gallery Image 5"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/ca/c6/f8/cac6f8a6a4e492fe37653f385f0e11cb.jpg" alt="Gallery Image 6"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/a7/5f/86/a75f8694d45f48d5535ec52c08794d35.jpg" alt="Gallery Image 1"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/57/c5/cf/57c5cfe9e13e3dff4ef9ac0fbe980929.jpg" alt="Gallery Image 2"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/736x/56/c7/7d/56c77d0abe3365a2e45afca056fa622e.jpg" alt="Gallery Image 3"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/dd/74/86/dd7486973c58325107bed97165d1fab8.jpg" alt="Gallery Image 4"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/d9/94/96/d994963a233557996fe081ec0fd8a9ca.jpg" alt="Gallery Image 5"
            onclick="openModal(this)">
        <img src="https://i.pinimg.com/564x/ca/c6/f8/cac6f8a6a4e492fe37653f385f0e11cb.jpg" alt="Gallery Image 6"
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