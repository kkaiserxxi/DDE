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
    <title>DeepDiveExpo-contact</title>

    <link rel="icon" href="https://i.pinimg.com/originals/88/33/f2/8833f2811794959bdcc2433a512a7bac.png"
        type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #C1E8FF;
            color: #333;
            flex-wrap: wrap;
        }

        /* Header */
        header {
            background: #052659;
            position: fixed;
            /* يجعل الهيدر ثابتًا في أعلى الصفحة */
            width: 100%;
            /* يجعل عرض الهيدر يمتد على عرض الصفحة بالكامل */
            z-index: 1000;
            /* يضمن أن يكون الهيدر فوق جميع العناصر الأخرى */
            padding: 5px 0;
            top: 0;
            /* يحدد المسافة من أعلى الصفحة */
            left: 0;
            /* يحدد المسافة من الجانب الأيسر للصفحة */
        }


        .logo img {
            max-width: 50px;
            height: auto;
            margin-right: 0px;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 95%;
            margin: auto;
        }

        .nav-links {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }

        .nav-links li {
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: #C1E8FF;
            font-size: 20px;
            padding: 10px 40px;
            margin-right: 30px;
            transition: background 0.3s ease;
        }

        .nav-links a:hover {
            background: #00b4d8;
            border-radius: 30px;
        }

        /*-------------------------------------------------------------------------------------------------------------------- */

        /* Contact Section */
        .contact-section {
            background-color: #C1E8FF;
        }

        .contact-wrapper {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin: 0 auto 60px auto;
            flex-direction: column;
        }

        .map-container {
            width: 100%;
            margin-bottom: 20px;
        }

        .map-container h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-container,
        .contact-details {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: 5px;
        }

        .contact-container h2,
        .contact-details h3 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-container label {
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .contact-container input,
        .contact-container textarea,
        .contact-container button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        .contact-container input,
        .contact-container textarea {
            background-color: #fff;
            color: #333;
        }

        .contact-container input:focus,
        .contact-container textarea:focus {
            outline: none;
            border-color: #00b4d8;
        }

        .contact-container button {
            background-color: #052659;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
            border: none;
        }

        .contact-container button:hover {
            background-color: #5483b3;
        }

        .contact-details ul {
            list-style: none;
            padding: 0;
        }

        .contact-details li {
            color: #333;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .contact-details a {
            color: #00b4d8;
            text-decoration: none;
        }

        .contact-details a:hover {
            text-decoration: underline;
        }

        /*-------------------------------------------------------------------------------------------------------------------- */
        footer {
            background: #021024;
            color: #C1E8FF;
            padding: 20px 0;
        }

        footer .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            width: 80%;
            margin: auto;
            gap: 20px;
        }

        footer h3 {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .contact ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-links ul {
            list-style: none;
        }

        .contact li,
        .menu-links li {
            margin-bottom: 10px;
            font-size: 12px;
        }

        .contact a {
            color: #fff;
            text-decoration: none;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        .menu-links {
            width: 100%;
        }

        .menu-links ul {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .menu-links a {
            display: block;
            padding: 10px;
            color: #C1E8FF;
            text-decoration: none;
            text-align: center;
        }

        .menu-links a:hover {
            background: #00b4d8;
        }

        /*-------------------------------------------------------------------------------------------------------------------- */
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

    <header class="site-navbar position-sticky" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-11 col-xl-2">
                    <a href="index.php">
                        <div class="logo">
                            <img src="https://i.pinimg.com/originals/88/33/f2/8833f2811794959bdcc2433a512a7bac.png"
                                alt="Dive Club Logo">
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="index.php"><span>Home</span></a></li>
                            <li> <a href="booking.php"><span>booking</span></a></li>
                            <li><a href="about.php"><span>About</span></a></li>
                            <li><a href="contact.php"><span>Contact</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                            class="icon-menu h3"></span></a></div>
            </div>
        </div>
        </div>
    </header>

    <br><br>

    <section class="contact-section">
        <div class="contact-wrapper">
            <div class="contact-container">
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
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address: 123 Dive Street, Ocean City</li>
                    <li><i class="fa fa-mobile" aria-hidden="true"></i> Phone: +962 0787139731</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i> Email: <a
                            href="mailto:celestialsailors9@gmail.com">celestialsailors9@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </section>
    <br>
    <footer>
        <div class="container">
            <div class="contact">
                <h3>Contact Us</h3>
                <ul class="contact-list">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                    <li><i class="fa fa-mobile" aria-hidden="true"></i> +962 0787139731</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>
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
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
