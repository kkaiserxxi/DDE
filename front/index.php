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
           <a href="booking.php" class="booking-btn">
            <i class="fas fa-calendar-alt"></i> Book Now</a>   
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
    <section class="card-section">
        <div class="card-container">
            <!-- First Card: Lion Fish -->
            <div class="card card-left">
                <div class="card-image">
                    <img src="images/lion.jpeg" alt="Lion Fish Image">
                </div>
                <div class="card-content">
                    <h3>Lion Fish</h3>
                    <p>
                        Lionfish are known for their striking appearance and venomous spines, making them both beautiful and dangerous.
                        <span class="dots" id="dots-1">...</span>
                        <span class="more-text" id="more-text-1">
                            Native to the Indo-Pacific, they were accidentally introduced into the Atlantic, where they have become a serious invasive species. Their rapid reproduction, lack of natural predators, and appetite for small reef fish have caused ecological imbalances. Various efforts to control the population include organized lionfish hunts and promoting them as a sustainable seafood option. In addition to being venomous, lionfish have been observed using their large fins to corral prey, displaying unique hunting behaviors. Despite their beauty, they pose a threat to coral reef ecosystems, making awareness and action crucial.

                            <ul>
                                <li><strong>Fun Fact:</strong> Lionfish can live up to 15 years in the wild, which gives them plenty of time to multiply in non-native waters.</li>
                                <li><strong>Interesting Behavior:</strong> Lionfish are nocturnal hunters and often hunt in groups, using their fan-like fins to herd smaller fish into tight spaces.</li>
                                <li><strong>Diet Expansion:</strong> These fish eat over 50 different species of fish and invertebrates, making them highly adaptable predators.</li>
                                <li><strong>Reproductive Powerhouse:</strong> A female lionfish can lay up to 2 million eggs per year, which accelerates their invasive spread.</li>
                                <li><strong>Edible Invader:</strong> Lionfish are safe to eat and have become a delicacy in regions where they are invasive, contributing to population control through human consumption.</li>
                            </ul>
                        </span>
                    </p>
                    <button class="read-more-btn" onclick="toggleText(1)">Read More</button>
                </div>
            </div>

            <!-- Second Card: The World of Divers -->
            <div class="card card-left">
                <div class="card-image">
                    <img src="images/68.jpeg" alt="Divers Image">
                </div>
                <div class="card-content">
                    <h3>The World of Divers: Exploring Underwater Frontiers</h3>
                    <p>
                        Diving opens up an incredible underwater world, from exploring coral reefs to discovering sunken shipwrecks.
                        <span class="dots" id="dots-2">...</span>
                        <span class="more-text" id="more-text-2">
                            There are several types of diving, including recreational, technical, and commercial. Recreational diving is mostly about leisure and exploration, while technical diving often involves deeper, more challenging dives. Commercial diving is more task-oriented, with divers working on underwater construction, repairs, or oil rig inspections. Safety is paramount, as divers must avoid risks like nitrogen narcosis and decompression sickness. Divers play an important role in marine conservation, acting as ambassadors for the underwater world, often participating in citizen science projects to monitor reef health or collect data on marine species.

                            <ul>
                                <li><strong>Fun Fact:</strong> The deepest dive ever recorded was 1,082 feet (332 meters), performed by Egyptian diver Ahmed Gabr in 2014.</li>
                                <li><strong>Equipment Trivia:</strong> Modern scuba tanks hold air compressed to 200-300 times the pressure of the atmosphere, which allows divers to stay underwater longer.</li>
                                <li><strong>Popular Dive Sites:</strong> The Great Blue Hole in Belize and the SS Yongala shipwreck off the coast of Australia are two world-famous diving spots.</li>
                                <li><strong>Diving for Science:</strong> Many divers assist in marine research, collecting data on ocean health, coral bleaching, and endangered species.</li>
                                <li><strong>Record Breaking:</strong> The largest dive expedition was held in 2019 in Florida, with 633 divers participating in an underwater cleanup.</li>
                            </ul>
                        </span>
                    </p>
                    <button class="read-more-btn" onclick="toggleText(2)">Read More</button>
                </div>
            </div>

            <!-- Third Card: Underwater Drones -->
            <div class="card card-left">
                <div class="card-image">
                    <img src="images/69.jpeg" alt="Underwater Drone Image">
                </div>
                <div class="card-content">
                    <h3>Underwater Drones</h3>
                    <p>
                        Underwater drones, also known as submersible robots, are transforming marine exploration and industry.
                        <span class="dots" id="dots-3">...</span>
                        <span class="more-text" id="more-text-3">
                            These drones can be categorized into two main types: Remotely Operated Vehicles (ROVs) and Autonomous Underwater Vehicles (AUVs). ROVs require human control, whereas AUVs operate independently. They are used in fields like oceanography, underwater archaeology, and even deep-sea mining. One of their key advantages is the ability to explore depths that would be too risky or impossible for human divers. With advancements in artificial intelligence, these drones are now capable of autonomous missions, gathering data on marine environments, mapping ocean floors, and monitoring underwater ecosystems over long periods without human intervention.

                            <ul>
                                <li><strong>Fun Fact:</strong> The deepest underwater drone dive reached over 10,900 meters (35,760 feet) in the Mariana Trench, the deepest part of the world's oceans.</li>
                                <li><strong>Sensor Galore:</strong> Underwater drones are equipped with cameras, sonar systems, and environmental sensors to capture high-quality data from the ocean floor.</li>
                                <li><strong>Military Use:</strong> Underwater drones are often used by navies for tasks like mine detection, surveillance, and submarine tracking.</li>
                                <li><strong>Environmental Guardians:</strong> These drones help monitor ocean health by tracking temperature, salinity, and pollutant levels in real time.</li>
                                <li><strong>Deep Sea Treasure Hunt:</strong> Underwater drones are used in underwater archaeology to discover sunken ships, ancient artifacts, and lost treasures deep in the ocean.</li>
                            </ul>
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
    <script>
        function toggleText(cardNumber) {
            var dots = document.getElementById("dots-" + cardNumber);
            var moreText = document.getElementById("more-text-" + cardNumber);
            var btnText = document.querySelector(".card-container .card:nth-child(" + cardNumber + ") .read-more-btn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                moreText.style.display = "none";
                btnText.textContent = "Read More";
            } else {
                dots.style.display = "none";
                moreText.style.display = "inline";
                btnText.textContent = "Read Less";
            }
        }
    </script>
</body>
</html>
