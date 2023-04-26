<?php
session_start();

if(isset($_SESSION['session_un']))
{
    $my_uname=$_SESSION['session_un'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TheShoeBoxx</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:shashankdewangan93@gmail.com">shashankdewangan93@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91-7725008610</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
<?php include 'header.php';?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" >
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <?php
                if(isset($_SESSION['session_un']))
                {
                   ?>
                   <h1>Welcome<?=$my_uname?><br>to<span><br><img src="Images/theshoeboxx1.png" height="200px" alt=""></span></h1>

                   <?php 
                }
                else{
                    ?>
                    <h1>Welcome to <span><br><img src="Images/theshoeboxx1.png" height="200px" alt=""></span></h1>
                <?php
                }
                ?>
      <h2>Shoes for every place you need to go to</h2>
      <div class="d-flex">
        <a href="login.php" class="btn-get-started scrollto">Shop Now</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" onclick="window.location.href = 'shoeboxx.php?casual'">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="shoeboxx.php?casual">Casual</a></h4>
              <p class="description">We have wide range of Casual Shoes.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" onclick="window.location.href = 'shoeboxx.php?sneakers'">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <h4 class="title"><a href="shoeboxx.php?sneakers">Sneakers</a></h4>
              <p class="description">Sneakers are all time Favourite</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" onclick="window.location.href = 'shoeboxx.php?formal'" >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="shoeboxx.php?formal">Formal</a></h4>
              <p class="description">Looking for something Official ?</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"  onclick="window.location.href = 'shoeboxx.php?sports'">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <h4 class="title"><a href="shoeboxx.php?sports">Sports</a></h4>
              <p class="description">Get Ready for the best perfomance.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>The ShoeBoxx<span>.</span></h3>
            <p>
              <strong>Phone:</strong> +91-7725008610 <br>
              <strong>Email:</strong>shashandewangan93@gmail.comk<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
             
            </ul>
          </div>


          

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>The ShoeBoxx</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>