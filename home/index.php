<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
  <title>OVP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="../partials/css/signlog.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="index.php">ovp</a></h1>
      </div>

     
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to Online Voting Portal</h1>
      <a href="#about" class="btn-get-started">Get Started</a>
      <br><br>
      <?php
        if((isset($_SESSION['enamedisplay'])) and ($_SESSION['e_stat'])==1)
        {
            echo "<b><h2 style='color:#A8E890;font-size:30px'>LIVE ELECTION: " .$_SESSION['enamedisplay']. "</h2></b>";
        }
        elseif ((isset($_SESSION['enamedisplay'])) and ($_SESSION['e_stat'])==0) {
          echo "<b><h2 style='color:red;font-size:30px'>ELECTION ENDED: " .$_SESSION['enamedisplay']. "</h2></b>";
          if($_SESSION['result_stats']){
              echo '<button style="font-size:30px"><a href="../results/viewResults.php">RESULTS</a></button>';
            }
          else{
            echo '<h3 class="text-warning" ><b>RESULTS WILL BE RELEASED SOON</b></h3>';
          }
        }
        else
        echo '<h3 class="text-danger" ><b>NO LIVE ELECTION</b></h3>';
        ?>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    </section><!--End About Section -->
    <section id="about">
    <div class = "section" >
    <div class="col align-items-md-stretch"></div>
      <div class="col-md-5" style="margin-left:27.5%;">
        <div class="h-80 p-5 text-white bg-dark rounded-3 ">
          <h2>Login</h2>

          <p>Login to cast your vote now !</p>
         
            <button class="btn btn-warning" type="button" onclick="window.location.href='../partials/login.php'" >GO😊</button>
          
        </div>
      </div>
      <br><br>
      <div class="col-md-5" style="margin-left:27.5%;">
        <div class="h-80 p-5 text-white bg-dark rounded-3">
          <h2>Register</h2>
          <p>Register in our OVP to cast your vote !</p>
            <button class="btn btn-info" type="button" onclick="window.location.href='../partials/registration.php'">GO😉</button>
        
        </div>
      </div>
    </div>

    </div>

    </section>
   <section id="about1" class="about1">
        <br><br>
      <div class="container">
        <div class="row" style="margin-left:80px">
          <div class="col-lg-4 col-md-6 d-flex align-items-center" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/pranav.PNG" alt="" height="250" width="250">
              <br>
              <center><h4 style="padding-top:20px;">Pranav C</h4></center>
              <center><h5 style="padding-top:5px;">20BLC1074</h5></center>
              <center><span>VIT Chennai</span></center>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/LK.png" alt="" height="250" width="250">
              <br>
              <center><h4 style="padding-top:20px;">H.Leela Karthikeyan</h4></center>
              <center><h5 style="padding-top:5px;">20BLC1097</h5></center>
              <center><span>VIT Chennai</span></center>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/pradyna.png" alt="" height="250" width="250">
              <br>
              <center><h4 style="padding-top:20px;">Pradnniya Shree</h4></center>
              <center><h5 style="padding-top:5px;">20BLC1046</h5></center>
              <center><span>VIT Chennai</span></center>
              
            </div>
          </div>

        </div>
          <br>
        <div class="section-title">
          <center><h2>Meet The Team</h2></center>
        </div>

      </div>
      <br><br><br>
    </section>


    
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Ovp</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
// session_destroy();
?>