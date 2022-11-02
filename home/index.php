<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <!-- <section id="about">
    <div class="section">
		<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="row full-height justify-content-center">
				<div class="col-15 text-center align-self-center py-5">
					<div class="section pb-6 pt-6 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
                
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" name="useremail_log" class="form-style" placeholder="Your Email"  required="required" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password_log" class="form-style" placeholder="Your Password" required="required" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a href="../partials/dashboard.php" class="btn mt-4">submit</a>
                        <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="pb-3" style="padding-Top:70px; margin:0">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="username" class="form-style" placeholder="Your Full Name" required="required" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="useremail" class="form-style" placeholder="Your Email"  required="required" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" required="required" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                      <div class="form-group mt-2">
												<input type="password" name="cpassword" class="form-style" placeholder="Confirm Your Password" required="required" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                      <div class="form-group mt-2">
                      <input type="file" name="voterimage" id="voterimage" style="display:none;"  required="required" accept="image/*">
                       <label class="input-group-text form-control w-40 m-auto" for="voterimage">Upload your image</label>
											</div>
                      <div class="form-group mt-2">
											
                      <button type="submit" class="btn my-2">
                      <a href="../partials/dashboard.php">submit</a>
                      </button>
                      </div>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>

</form>
			

    </section>End About Section -->
    <section id="about">
    <div class = "section" >
    <div class="col align-items-md-stretch">
      <div class="col-md-5" style="margin-left:27.5%;">
        <div class="h-80 p-5 text-white bg-dark rounded-3 ">
          <h2>Login</h2>
          <p>Login to cast your vote now !</p>
          <a href="../partials/login.php">
            <button class="btn btn-warning" type="button" >GO😊</button>
          </a>
        </div>
      </div>
      <br><br>
      <div class="col-md-5" style="margin-left:27.5%;">
        <div class="h-80 p-5 text-white bg-dark rounded-3">
          <h2>Register</h2>
          <p>Register in our OVP to cast your vote !</p>
          <a href="../partials/registration.php">
            <button class="btn btn-info" type="button">GO😉</button>
          </a>
        </div>
      </div>
    </div>

    </div>

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