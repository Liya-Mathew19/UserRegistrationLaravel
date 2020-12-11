<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{Auth::user()->username}} - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/vendors/dashboard/assets/img/favicon.png" rel="icon">
  <link href="/vendors/dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendors/dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendors/dashboard/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/vendors/dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendors/dashboard/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/vendors/dashboard/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/vendors/dashboard/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/vendors/dashboard/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.4.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="/vendor/dashboard/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="{{route('dashboard')}}">{{Auth::user()->username}}</a></h1>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="{{route('dashboard')}}"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{route('logout')}}"><i class="bx bx-exit"></i> <span>Logout</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome, {{Auth::user()->username}}</h1>
       </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>{{Auth::user()->username}}</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <div class="row">
            <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Username:</strong> {{Auth::user()->username}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$users->email}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Date of Birth:</strong> {{$users->dob}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$users->city}}</li>
                </ul>
            </div>
        </div>
    </div>
    
    </div>
    <button type="button" style="float:right" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal1-{{ Auth::user()->id }}"><i class="bx bx-edit"></i>Edit</button>
                <!-- Modal Content-->
                <form class="forms-sample" action="{{route('editprofile',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal fade" id="myModal1-{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <input type="hidden" class="form-control" id="id" name ="id" value="{{ Auth::user()->id}}" required  >             
                                            <label for="text" class="col-4 col-form-label">UserName</label> 
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div> 
                                                        <input id="text" name="username" placeholder="Enter the username.." type="text" value="{{Auth::user()->username}}" class="form-control" required="required">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-4 col-form-label">Email</label> 
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-mail-reply-all"></i>
                                                        </div>
                                                    </div> 
                                                    <input id="email" name="email" value="{{$users->email}}" placeholder="Enter the Email ID.." type="email" required="required" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dob" class="col-4 col-form-label">Date Of Birth</label> 
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div> 
                                                    <input id="dob" name="dob" value="{{$users->dob}}" placeholder="Date of Birth.." type="date" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="city" class="col-4 col-form-label">City</label> 
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-location-arrow"></i>
                                                            </div>
                                                        </div> 
                                                        <input id="city" name="city" value="{{$users->city}}"placeholder="Enter the City.." type="text" class="form-control">
                                                    </div>
                                                </div>
                                        </div> 
                                    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>  
</div>
</section><!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
     
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Developed by <a href="https://liyamathew1908.wixsite.com/liyamathew">Liya Mathew</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendors/dashboard/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/php-email-form/validate.js"></script>
  <script src="/vendors/dashboard/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/vendors/dashboard/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/vendors/dashboard/assets/js/main.js"></script>

</body>

</html>