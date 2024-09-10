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
        }

        /* Header */
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
            max-height: 50px;
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

        /* Booking Section */
        .booking-section {
            display: flex;
            padding: 20px;
            width: 100%;
            justify-content: space-evenly;
        }

        .booking-form {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px;
            width: 100%;
            height: 750px;

            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .form-cover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .form-cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .form-cover .form-title {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .form-cover .form-description {
            display: none;
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .form-cover:hover .form-description {
            display: block;
        }

        .booking-form.hidden .form-cover {
            transform: translateY(-100%);
            height: 0;
        }

        .booking-form.hidden form {
            display: block;
        }

        form {
            display: none;
        }

        .booking-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #052659;
        }

        .booking-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .booking-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .booking-form button {
            background: #052659;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .booking-form button:hover {
            background: #00b4d8;
        }

        /* Footer */
        footer {
            background: #021024;
            color: #C1E8FF;
            padding-top: 20px;
            width: 100%;
            /* عرض كامل للصفحة */
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
            /* عرض كامل لتناسب العناصر */
        }

        .menu-links ul {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            /* المسافة بين العناصر */

        }

        .menu-links a {
            display: block;
            padding: 10px;
            color: #C1E8FF;
            text-decoration: none;
            text-align: center;
            /* توسيط النص داخل الرابط */

        }

        .menu-links a:hover {
            background: #00b4d8;
        }

        @media (max-width: 767px) {
            .booking-section {
                display: flex;
                flex-direction: column;
                padding: 10px;
                gap: 10px;
                /* تقليل المسافة بين العناصر */
            }

            .booking-form {
                width: 100%;
                max-width: none;
                /* إزالة أقصى عرض للفورم */
                margin: 0;
                /* إزالة الهوامش حول الفورم */
            }

            .form-cover .form-title,
            .form-cover .form-description {
                font-size: 14px;
                /* تقليل حجم الخط على الهواتف */
                padding: 3px 5px;
                /* تقليل الحشوة */
            }

            .booking-form h2 {
                font-size: 20px;
                /* تقليل حجم خط العنوان */
            }

            .booking-form input {
                width: 100%;
                /* استخدام العرض الكامل للإدخالات */
                padding: 8px;
                /* تقليل الحشوة في الإدخالات */
            }

            .booking-form button {
                font-size: 14px;
                /* تقليل حجم الخط في الأزرار */
                padding: 8px;
                /* تقليل الحشوة في الأزرار */
            }
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
                </div>
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                            class="icon-menu h3"></span></a></div>
            </div>
        </div>
        </div>
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
    <script>
        function toggleForm(element) {
            const form = element.nextElementSibling.nextElementSibling;
            const formCover = element;
            const bookingForm = form.parentElement;

            if (form.style.display === 'none') {
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
