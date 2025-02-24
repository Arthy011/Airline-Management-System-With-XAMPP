<?php 
include "createdb.php";

// ** NOTE: This file will be responsible for the content displayed on welcome page
// like about us section, team members, faq etc.  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Airline management system</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

 
  <link href="assets_welcome_page/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets_welcome_page/css/style.css" rel="stylesheet">


  <style>

#header .logo {
      font-size: 20px;
      margin: 0;
      padding: 0;
      line-height: 1;
      font-weight: 450;
      letter-spacing: 1px;
      text-transform: uppercase;
    }
    
    #header .logo img {
      max-height: 40px;
    }
    
    #hero .btn-get-started {
  font-family: "Jost", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px 11px 28px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px 0 0 0;
  color: #fff;
  background: #ee7a1b;
}
#hero .btn-get-started:hover {
  background: #db5d08;
}

    .col-sm-3 {
    width: 100%;
  }

    </style>

</head>

<body>

<!-- This part is for the top navigation bar containing link to different pages  -->

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo me-auto"></a>
      <h1 class="logo me-auto"><a href="index.php">Airline Management System</a></h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> -->
          <li><a class="nav-link scrollto" href="process_login_signup.php">Book now</a></li>
          <li><a class="nav-link   scrollto" href="search_flights.php">Search flights</a></li>
          <!-- <li><a class="nav-link scrollto" href="https://github.com/Sid-Shankar/SSL_Project" target="_blank">Github</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li> -->
          <li><a class="getstarted scrollto" href="process_login_signup.php">Login/Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <!-- This part is for the book now and search flights button along with the airplane picture -->

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">

        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>Cheap | Secure | Fast</h1>
          <h2>Book your flight tickets, now !</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="process_login_signup.php" class="btn-get-started scrollto">Book Now</a>
            <span>
              &nbsp;&nbsp;
              <a href="search_flights.php" class="btn-get-started scrollto">Search flights</a>
            </span>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets_welcome_page/img/slide3.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

  
  <footer id="footer">


    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Airline Management system | DBMS Project | 2024</span></strong>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Below are some javascripts files required for the animation and display features for this page  -->

  <script src="assets_welcome_page/vendor/aos/aos.js"></script>
  <script src="assets_welcome_page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_welcome_page/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets_welcome_page/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets_welcome_page/vendor/php-email-form/validate.js"></script>
  <script src="assets_welcome_page/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets_welcome_page/vendor/waypoints/noframework.waypoints.js"></script>

  
  <script src="assets_welcome_page/js/main.js"></script>

</body>

</html>