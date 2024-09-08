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
    <title>DeepDiveExpo-about</title>
   
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
    
  /* Page-specific Styles */  /* Page-specific Styles */  /* Page-specific Styles */  /* Page-specific Styles */  /* Page-specific Styles */
        /* Page-specific Styles */
        .about-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            flex: 1;
        }

        .about-container h1 {
            text-align: center;
            color: #052659;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about-content {
            margin-top: 20px;
        }

        .about-content img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #000;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .team-member {
            text-align: center;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        .team-member-info h3 {
            margin-bottom: 10px;
            font-size: 22px;
            color: #052659;
        }

        .team-member-info p {
            font-size: 16px;
            line-height: 1.6;
        }

        /* Footer Styling */
        footer {
    background: #021024;
    color: #C1E8FF;
    padding: 20px 0; /* زيادة الحشو لجعل الـfooter أطول قليلاً */
}

footer .container {
    display: flex;
    justify-content: space-between; /* توزيع العناصر بشكل متساوي */
    flex-wrap: wrap;
    width: 80%; /* تعديل العرض ليتناسب مع التصميم */
    margin: auto;
    gap: 20px; /* تعيين مسافة بين العناصر داخل الـfooter */
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

    <!-- About Us Section -->
    <div class="about-container">
        <h1>Who we are</h1>
        <div class="about-content">
            <img src="https://i.pinimg.com/originals/0c/cd/a8/0ccda8c7eeb68a39af4c6631eeed1733.png" alt="About Dive Club">
            <p>Welcome to Dive Club, where we provide the best diving experiences around the world. Our team of certified professionals is dedicated to ensuring that every dive is safe, enjoyable, and unforgettable. Whether you're a beginner or an experienced diver, we have something for everyone. Explore our range of services and join us for your next adventure.</p>
            <br><br><br><br>
            <h2>Meet Our Team</h2>
            <br><br>
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://i.pinimg.com/736x/0e/f9/e2/0ef9e21474a86ee26cc7060c54ca3c5a.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>Yaman Anis</h3>
                        <p>Yaman is our lead instructor with over 15 years of experience in diving. His passion for the ocean and commitment to safety make him an invaluable part of our team.</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/736x/d7/c8/09/d7c809be41cc18eac0ba5d9a0ebf30d7.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>Mahdi Misk</h3>
                        <p>Mahdi is a certified dive master and marine biologist. His knowledge of marine life and expertise in underwater photography make every dive educational and exciting.</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/originals/f0/63/bc/f063bc37316768eb078e0b4910c5736d.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>Majid Barham</h3>
                        <p>Majid is a certified dive master who specializes in underwater photography. He loves sharing his knowledge and helping divers capture their memories.</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/originals/7d/ac/f3/7dacf310abca76a8c60b529747235142.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>Zaid Aldasht</h3>
                        <p>Zaid is a professional diver with a deep understanding of marine ecosystems. He enjoys guiding divers through the most beautiful underwater landscapes.</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/originals/fc/b2/6f/fcb26f66090ab7b8fe7c15175076849c.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>Hossam AL adham</h3>
                        <p>Hossam is a certified dive master who specializes in underwater photography. She loves sharing her knowledge and helping divers capture their memories.</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/originals/67/2a/e7/672ae758cc21504693d33817769b8f79.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>Ahmad Abu-Libdeh</h3>
                        <p>Ahmad is a certified dive master who specializes in underwater photography. She loves sharing her knowledge and helping divers capture their memories.</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/736x/f2/3f/db/f23fdbb9c55e51400528b0a9912af261.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>zakaria aladem</h3>
                        <p>zakaria is a certified dive master who specializes in underwater photography. She loves sharing her knowledge and helping divers capture their memories.</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/originals/a4/e7/ff/a4e7ffacf7aaa09893c317b43730dc4d.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>hisham al saif</h3>
                        <p>hisham is a certified dive master who specializes in underwater photography. She loves sharing her knowledge and helping divers capture their memories.</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/originals/31/df/83/31df83391a09332e77f5cab7bd926de7.jpg" alt="Team Member">
                    <div class="team-member-info">
                        <h3>moamen erebeh</h3>
                        <p>moamen is a certified dive master who specializes in underwater photography. She loves sharing her knowledge and helping divers capture their memories.</p>
                    </div>
                </div>
                
            </div>
        </div>
    
            </div>
        </div>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
