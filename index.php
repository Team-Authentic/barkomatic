<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Barkomatic - Online Ticketing</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/default-assets/main.css?version=barkomatic">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>barkomatic2021@gmail.com</span></a>
                        </div>
                    </div>
                    <div class="col-6 pr-0">
                        <div class="top-header-content">
                            <a href="#" class="invisible"><i class="icon_mail"></i> <span>barkomatic2021@gmail.com</span></a>
                            <?php 
                                session_start();
                                if(isset($_SESSION['shipping_name']) && isset($_SESSION['profile_image']) && isset($_SESSION['username'])) { ?>
                                    <button type="button" class="btn btn-success ml-auto" id="btn-su">
                                        <a href="login.php" class="text-white" id="login-link">Go to Dashboard</a>
                                    </button>
                              <?php } else { ?>
                                    <button type="button" class="btn btn-success ml-auto" id="btn-su">
                                        <a href="login.php" class="text-white" id="login-link">Login</a>&nbsp; <span>|</span> &nbsp;<a href="signup.php" class="text-white" id="signup-link">Signup</a>
                                    </button>
                              <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">
                        <!-- Logo -->
                        <a class="nav-brand mr-0" href="index.php">
                            <img src="./img/core-img/logo.png" alt="BarkoMatic">
                        </a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                            <span></span>
                            <span></span>
                            </span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="cn-dropdown-item has-down">
                                        <a href="#">How to Book</a>
                                        <ul class="dropdown" style="background-color: #09527F;">
                                            <li>
                                                <a href="passenger.html">- Passenger</a>
                                            </li>
                                            <li>
                                                <a href="rollings-cargo.html">- Rollings Cargo</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact Us</a>
                                    </li>
                                    <li class="cn-dropdown-item has-down">
                                        <a href="#">About Us</a>
                                        <ul class="dropdown" style="background-color: #09527F;">
                                            <li>
                                                <a href="faq.html">- FAQ</a>
                                            </li>
                                            <li>
                                                <a href="about.html">- About Us</a>
                                            </li>
                                            <li>
                                                <a href="ticket-agent.html">- Ticket Agent</a>
                                            </li>
                                            <li>
                                                <a href="blog.html">- Blog</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- Book Now -->
                                <!-- <div class="book-now-btn">
                                    <a href="book.php">
                                        Book Now
                                        <i class="bi bi-arrow-right-circle-fill"></i>
                                    </a>
                                </div> -->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
   <!-- Welcome Area Start -->
    <section class="welcome-section">
        <div class="banner-content">
            <div class="intro text-center container">
                <h1 class="text-white display-3">Welcome to Barkomatic!</h1>
                <p class="subtext-header lead text-white pt-3 pb-5">
                    Online Ticketing bookings are now made easier with Barkomatic multiple shipping lines in one booking site! Check ferry schedules and rates today!
                </p>
                <button type="button" class="btn btn-primary btn-lg pushable mt-3">
                    <a href="search-trip.php"><span class="front">
                        <i class="bi bi-book-half"></i>
                        BOOK NOW!
                    </span></a>
                </button>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <section class="destinations-two">
        <div class="container">
            <div class="block-title text-center">
                <h3>Top Destinations</h3>
            </div>
            <!-- /.block-title -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="img/bacolod.jpg" alt="">
                        <h3><a href="destinations-details.html">Bacolod</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/bohol.jfif" alt="">
                        <h3><a href="destinations-details.html">Bohol</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/cagayandeoro.jfif" alt="">
                        <h3><a href="destinations-details.html">Cagayan de ero</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="destinations-two__single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <img src="img/cebu.jpg" alt="">
                        <h3><a href="destinations-details.html">Cebu</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="img/coron.jpg" alt="">
                        <h3><a href="destinations-details.html">Coron</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/dumaguete.jpg" alt="">
                        <h3><a href="destinations-details.html">Dumaguete</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/dipolog.jpg" alt="">
                        <h3><a href="destinations-details.html">Dipolog</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="destinations-two__single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <img src="img/elnido.jpeg" alt="">
                        <h3><a href="destinations-details.html">El Nido</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="img/iligan.jpg" alt="">
                        <h3><a href="destinations-details.html">Iligan</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/iloilo.jpg" alt="">
                        <h3><a href="destinations-details.html">Ilo-Ilo</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/leyte.jpg" alt="">
                        <h3><a href="destinations-details.html">Leyte</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="destinations-two__single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <img src="img/siargao.jfif" alt="">
                        <h3><a href="destinations-details.html">Surigao</a></h3>
                    </div>
                    <!-- /.destinations-two__single -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.destinations-two -->

    <!-- Blog Area Start -->
    <section class="barkomatic-question-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Are you a shipping company?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <center><img src="img/Online Booking System.png" alt="onlinebookingsystempic"></center>
                        <!-- Post Title -->
                        <p class="post-title">Online Booking System</p>
                        <p class="post-parg">We provide you all the resources essential to have a painless online booking experience.</p>
                        <P class="post-parg">Additionally, passengers may purchase tickets via our nationwide network of partner ticket sellers. We handle everything of your marketing.</p>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <center><img src="img/Passage System.png" alt="passagesystempic"></center>
                        <!-- Post Title -->
                        <p class="post-title">Passage System</p>
                        <p class="post-parg">There will be no more duplicate bookings or capacity issues. Our passage system will provide you with the convenience of an automated ticketing system.</p>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <center><img src="img/Cargo System.png" alt="cargossytempic"></center>
                        <!-- Post Title -->
                        <p class="post-title">Cargo System</p>
                        <p class="post-parg">Utilize our simple-to-use Cargo System to manage Bill of Lading transactions. Easily maintain track of transactions and freight accounts.</p>
                        <P class="post-parg">Vehicles and loose freight items should be monitored. Keep track of sales volume and get reports at your convenience.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <div class="container mt-100">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                    <h2>Want To Be A Ticket Agent?</h2>
                </div>
                <div class="about-us-content mb-100">
                    <p class="wow fadeInUp" data-wow-delay="300ms">Are you a travel agency or ticket outlet? Would you like to increase your income? Sell shipping tickets using our system. We aim to increase our number of partner shipping companies, giving you one portal to book tickets for multiple
                        shipping companies. All you need is an internet connection.</p>

                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="img/Picture1.png" alt="">
                            </div>
                            <div class="single-thumb">
                                <img src="img/Picture2.png" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single-thumb-margin">
                                <img src="img/Picture3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- About Us Area End -->
    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
            <!-- Main Footer Area -->
            <div class="main-footer-area">
                <div class="container">
                    <div class="row align-items-baseline ">
                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-80">
                                <!-- Footer Logo -->
                                <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>
                                <p class="footprag">Call Us</p>
                                <h4>+12 345-678-9999</h4>
                                <p>Email Us</p>
                                <h4>barkomatic2021@gmail.com
                                    <h4>

                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-2 col-lg-4">
                            <div class="single-footer-widget mb-80">
                                <!-- Widget Title -->
                                <h5 class="widget-title">MANUALS</h5>

                                <!-- Single Blog Area -->
                                <div class="latest-blog-area">
                                    <a href="#" class="post-title">Boarding Guidelines</a>
                                    <a href="#" class="post-title">Payment Option</a>
                                    <a href="#" class="post-title">Passenger Ticket Booking Manual</a>
                                    <a href="#" class="post-title">Rolling Cargo Booking Manual</a>
                                </div>

                                <!-- Single Blog Area -->
                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-2 col-lg-4">
                            <div class="single-footer-widget mb-80">
                                <!-- Widget Title -->
                                <h5 class="widget-title">POLICY</h5>

                                <!-- Single Blog Area -->
                                <div class="latest-blog-area">
                                    <a href="#" class="post-title">Refund Policy</a>
                                    <a href="#" class="post-title">Rebooking Policy</a>
                                    <a href="#" class="post-title">Barkomatic Terms & Conditions</a>
                                    <a href="#" class="post-title">Privacy Policy</a>
                                </div>
                                <!-- Single Blog Area -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copywrite Area -->
            <div class="container">
                <div class="copywrite-content">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-8">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Barkomatic</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/roberto.bundle.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>
</body>
</html>
    <!-- Footer Area End -->

