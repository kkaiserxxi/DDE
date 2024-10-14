<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deep Sea</title>

    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <link rel="stylesheet" href="css/index.css">
    

</head>


<body>
    <!-- Header -->
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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </header>

    <!-- Hero Section -->
    <div class="hero">
    <div class="image-background">
        <img src="images/home1.jpg" alt="Dive Club Background">
    </div>

    <div class="hero-content">
        <h1>Deeb Sea<br></h1>
        <p>Your journey to the depths of the ocean begins here.
           Discover the mysteries and beauty that await below the surface.</p>
    </div>
</div>

    <!-- Icon Links Section -->
    <section class="icon-links">
    <div class="icon-container">
        <a href="gallery.php" class="icon-link">
            <img src="https://i.pinimg.com/originals/94/b8/42/94b84214e16e860d271164979a885af4.png" alt="gallery" class="icon-img">
            <span class="icon-name">Gallery</span>
        </a>
    </div>
    <div class="icon-container">
        <a href="FAQ.php" class="icon-link">
            <img src="https://i.pinimg.com/originals/94/81/a1/9481a1c52a656383028335f1e901b007.png" alt="FAQ" class="icon-img">
            <span class="icon-name">FAQ</span>
        </a>
    </div>
    <div class="icon-container">
        <a href="booking.php" class="icon-link">
            <img src="https://i.pinimg.com/originals/79/07/b2/7907b26d0a90c70f8bf97061eb67e3db.png" alt="booking" class="icon-img">
            <span class="icon-name">Booking</span>
        </a>
    </div>
</section>

    
<!-- Card Section -->
<section class="card-section">
    <div class="card-container">
        <!-- First Card -->
        <div class="card card-left">
            <div class="card-image">
                <img src="images/lion.jpeg" alt="Card 1 Image">
            </div>
            <div class="card-content">
                <h3>Lion Fish</h3>
                <p>
                    Lionfish are known for their venomous spines, which they use for defense against predators.
                    <span class="more-text" id="more-text-1">
                        Originally from the Indo-Pacific, lionfish have become invasive in the Atlantic, where they impact ecosystems by preying on smaller fish. 
                        Female lionfish can lay up to 30,000 eggs every few days, causing population surges. 
                        Efforts are underway to control their population, including promoting lionfish hunting.
                    </span>
                </p>
                <button class="read-more-btn" onclick="toggleText(1)">Read More</button>
            </div>
        </div>

        <!-- Second Card -->
        <div class="card card-left">
            <div class="card-image">
                <img src="images/68.jpeg" alt="Card 2 Image">
            </div>
            <div class="card-content">
                <h3>The World of Divers: Exploring Underwater Frontiers</h3>
                <p>
                    Divers explore underwater environments for recreation or professional tasks like underwater construction.
                    <span class="more-text" id="more-text-2">
                        Scuba gear and computers help divers navigate safely. They face risks such as decompression sickness.
                        Diving certifications ensure skill and safety, and divers play a role in marine conservation through citizen science.
                    </span>
                </p>
                <button class="read-more-btn" onclick="toggleText(2)">Read More</button>
            </div>
        </div>

        <!-- Third Card -->
        <div class="card card-left">
            <div class="card-image">
                <img src="images/69.jpeg" alt="Card 3 Image">
            </div>
            <div class="card-content">
                <h3>Underwater Drones</h3>
                <p>
                    Underwater drones, such as ROVs and AUVs, are revolutionizing underwater exploration.
                    <span class="more-text" id="more-text-3">
                        They are equipped with cameras, sonar, and sensors, and can operate at extreme depths. 
                        These drones reduce the need for human divers in dangerous environments and are essential for scientific research.
                    </span>
                </p>
                <button class="read-more-btn" onclick="toggleText(3)">Read More</button>
            </div>
        </div>
    </div>
</section>
<!-- Video Section -->
<section class="video-section">
    <div class="video-container">
        <!-- First Video -->
        <iframe class="video" src="https://www.youtube.com/embed/G52dUQLxPzg?start=600&autoplay=1&mute=1&controls=0" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>

        <!-- Second Video -->
        <iframe class="video" src="https://www.youtube.com/embed/l40nk18GUzk?start=600&autoplay=1&mute=1&controls=0" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
    </div>
</section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="contact">
                <h3>Contact Us</h3>
                <ul class="contact-list">
                    <li><i class="bi bi-geo-alt"></i> Address: 123 Street, City</li>
                    <li><i class="bi bi-telephone"></i> +962 0787139731</li>
                    <li><i class="bi bi-envelope"></i> <a href="mailto:celestialsailors9@gmail.com">celestialsailors9@gmail.com</a></li>
                </ul>
            </div>
            <div class="menu-links">
                <h3>Menu Links</h3>
                <ul class="link-menu">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.getElementById('hamburger');
            const navLinks = document.getElementById('nav-links');

            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        });
        
        function toggleText(cardNumber) {
        var moreText = document.getElementById("more-text-" + cardNumber);
        var btnText = document.querySelector(".card:nth-child(" + cardNumber + ") .read-more-btn");
        
        if (moreText.style.display === "none" || moreText.style.display === "") {
            moreText.style.display = "inline";
            btnText.textContent = "Read Less";
        } else {
            moreText.style.display = "none";
            btnText.textContent = "Read More";
        }
    }
    </script>
</body>
</html>
