<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Live and let live</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{url("assets/vendor/animate.css/animate.min.css")}} rel="stylesheet">
  <link href={{url("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{url("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{url("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{url("assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{url("assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href={{url("assets/css/style.css")}} rel="stylesheet">
  <style>
  
  </style>
</head>

<body>

  
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="/"><span>Live</span> and let live</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('orgprofile.viewOrg')}}">Organizations</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Our Animals</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="{{route('message.index')}}">Request Help</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link " href="{{route('home')}}"><i class="fa fa-user fa-2xl" style="font-size: 25px"></i></a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div id="template">

      @yield('temp')
  </div>
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Live</span> and let live</h2>
                </div>

                <p> Animal welfare is the well-being of non-human animals. Formal standards of animal welfare vary between contexts, but are debated mostly by animal welfare groups, legislators, and academics.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  You can contact us at the given information below
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +977-9803210606</p>
                  <p><span>Email:</span> ashwinkhadka911@gmail.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Live and let Live</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>