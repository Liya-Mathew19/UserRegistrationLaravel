<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DEMO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/vendors/home/assets/img/favicon.png" rel="icon">
  <link href="/vendors/home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="/vendors/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendors/home/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/vendors/home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendors/home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendors/home/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/vendors/home/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/vendors/home/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/vendors/home/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v2.2.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>CodeGreen Technologies</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="{{route('index')}}">Login</a></li>
          <li><a href="{{route('register')}}">Register</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    <section id="hero" class="d-flex align-items-center">
        

    @yield('content')

    

    </section><!-- End Hero -->
   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="credits">
             Developed by <a href="https://liyamathew1908.wixsite.com/liyamathew">Liya Mathew</a>
          </div>
        </div>
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendors/home/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/vendors/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendors/home/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/vendors/home/assets/vendor/php-email-form/validate.js"></script>
  <script src="/vendors/home/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/vendors/home/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/vendors/home/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/vendors/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendors/home/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/vendors/home/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/vendors/home/assets/js/main.js"></script>

</body>

</html>