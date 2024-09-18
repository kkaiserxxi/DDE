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
    <title>DeepDiveExpo-booking</title>

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
    <link rel="stylesheet" href="css/booking.css">

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
        <li><a href="booking.php" class="active">Booking</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</header>


    <section class="booking-section">
        <div class="booking-form">
            <div class="form-cover" onclick="toggleForm(this)">
                <img src="https://i.pinimg.com/236x/36/f9/c6/36f9c6e9b15c1104375ee7aef7c5ec81.jpg"
                    alt="Click to reveal form">
                <div class="form-title">VR Experience</div>
                <div class="form-description">تجربة واقع افتراضي مذهلة تحت الماء.</div>
            </div>
            <h2>VR Experience</h2>
            <h6>VR ExperienceVR ExperienceVR Experience</h6>

            <form  id="booking_VR_Form" action="connect3.php" method="post">
                <label for="FullName">Full Name:</label>
                <input type="text" id="FullName" name="FullName" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="booking_date">Preferred Dive Date:</label>
                <input type="date" id="booking_date" name="booking_date" required>

                <label for="start_time">Start Time:</label>
                <input type="time" id="start_time" name="start_time" required>

                <label for="end_time">End Time:</label>
                <input type="time" id="end_time" name="end_time" required>

                <label for="Additional_Requests">Additional_Requests</label>
                <input type="text" id="Additional_Requests" name="Additional_Requests">

                <button type="submit">Book Now</button>
            </form>
        </div>

        <div class="booking-form">
            <div class="form-cover" onclick="toggleForm(this)">
                <img src="https://i.pinimg.com/236x/c8/7a/29/c87a297d5b039263d9e9bbd783e66474.jpg"
                    alt="Click to reveal form">
                <div class="form-title">Underwater Photography</div>
                <div class="form-description">التصوير تحت الماء مع أفضل المعدات.</div>
            </div>
            <h2>Underwater Photography</h2>
            <h6>Underwater PhotographyUnderwater PhotographyUnderwater </h6>
           
            <form id="booking_Form" action="connect.php" method="post" action="bill.php" >
                <label for="FullName">Full Name:</label>
                <input type="text" id="FullName" name="FullName" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="booking_date">Preferred Dive Date:</label>
                <input type="date" id="booking_date" name="booking_date" required>

                <label for="start_time">Start Time:</label>
                <input type="time" id="start_time" name="start_time" required>

                <label for="end_time">End Time:</label>
                <input type="time" id="end_time" name="end_time" required>

                <label for="Additional_Requests">Additional_Requests</label>
                <input type="text" id="Additional_Requests" name="Additional_Requests">

                <button type="submit">Book Now</button>
            </form>
        </div>
    </section>
    <br><br><br><br><br>
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
                    <li><a href="booking.php" class="active">Booking</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <ul class="link-menu">
                <li><a href="contact.php">Contact Us</a></li>
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
function toggleForm(element) {
    const form = element.nextElementSibling.nextElementSibling;
    const formCover = element;
    const bookingForm = form.parentElement;
    
    const formDisplay = window.getComputedStyle(form).display;

    if (formDisplay === 'none') {
        form.style.display = 'block';
        formCover.style.transform = 'translateY(-100%)';
        formCover.style.height = '0';
        setTimeout(() => {
            formCover.style.display = 'none';
        }, 500); // Delay hiding the cover for the animation
        bookingForm.classList.add('hidden');
    } else {
        form.style.display = 'none';
        formCover.style.display = 'block';
        formCover.style.transform = 'translateY(0)';
        formCover.style.height = '100%';
        bookingForm.classList.remove('hidden');
    }
}

</script>
</body>
</html>