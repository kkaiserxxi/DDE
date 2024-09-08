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
    <title>DeepDiveExpo-FAQ</title>
   
    <link rel="icon" href="https://i.pinimg.com/originals/88/33/f2/8833f2811794959bdcc2433a512a7bac.png" type="image/png">
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
    html, body {
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
            position: fixed; /* يجعل الهيدر ثابتًا في أعلى الصفحة */
            width: 100%; /* يجعل عرض الهيدر يمتد على عرض الصفحة بالكامل */
            z-index: 1000; /* يضمن أن يكون الهيدر فوق جميع العناصر الأخرى */
            padding: 5px 0;
            top: 0; /* يحدد المسافة من أعلى الصفحة */
            left: 0; /* يحدد المسافة من الجانب الأيسر للصفحة */
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

        /*-------------------------------------------------------------------------------------------------------------------- */
        footer {
    background: #021024;
    color: #C1E8FF;
    padding-top: 20px;
    width: 100%; /* عرض كامل للصفحة */
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

.contact ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
.menu-links ul {
    list-style: none;

}

.contact li, .menu-links li {
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
    width: 100%; /* عرض كامل لتناسب العناصر */
}

.menu-links ul {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* المسافة بين العناصر */

}

.menu-links a {
    display: block;
    padding: 10px;
    color: #C1E8FF;
    text-decoration: none;
    text-align: center; /* توسيط النص داخل الرابط */
 
}

.menu-links a:hover {
    background: #00b4d8;
}


        /*-------------------------------------------------------------------------------------------------------------------- */
       /* General Styling */


        /* Container for the FAQ section */
        .faq-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* FAQ Heading */
        .faq-container h1 {
            text-align: center;
            color: #052659;
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* Question and Answer styling */
        .faq-item {
            margin-bottom: 15px;
        }

        .faq-question {
            cursor: pointer;
            background-color: #052659;
            color: #C1E8FF;
            padding: 15px;
            border-radius: 5px;
            font-size: 18px;
            position: relative;
            transition: background-color 0.3s ease;
        }

        .faq-question:hover {
            background-color: #00b4d8;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background-color: #e6f7ff;
            border-left: 4px solid #00b4d8;
            padding: 0 15px;
            border-radius: 0 0 5px 5px;
        }

        .faq-item.active .faq-answer {
            max-height: 150px; /* Adjust according to content */
            padding: 15px;
        }

        /* Toggle icon */
        .faq-question::after {
            content: '+';
            font-size: 24px;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-question::after {
            transform: translateY(-50%) rotate(45deg);
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
                        <img src="https://i.pinimg.com/originals/88/33/f2/8833f2811794959bdcc2433a512a7bac.png" alt="Dive Club Logo">
                    </div>
                </a>          </div> 
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">
  
                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li ><a href="index.php"><span>Home</span></a></li>
                    <li> <a href="booking.php"><span>booking</span></a></li>
                    <li><a href="about.php"><span>About</span></a></li>
                    <li><a href="contact.php"><span>Contact</span></a></li>
                  </ul>
              </nav>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
            </div>
          </div>
        </div>
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
    <!-- end footer -->
    <script>
        // Toggle FAQ Answer visibility
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const faqItem = item.parentElement;
                faqItem.classList.toggle('active');
            });
        });
    </script>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>

</body>
</html>