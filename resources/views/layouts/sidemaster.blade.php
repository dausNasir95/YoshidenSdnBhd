<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Yoshiden(M) Sdn. Bhd.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
  
    <!-- Favicons -->
    <link href="{{ asset('img/yoshidenlogo.png') }}" rel="icon">
    <link href="{{ asset('img/yoshidenlogo.png') }}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  
    <!-- Owl Carousel CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
  
    <!-- Main Stylesheet File -->
    {{-- @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/main.js']) --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</head>
  

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:yoshiden@yoshiden.com.my">yoshiden@yoshiden.com.my</a>
        <i class="fa fa-phone"></i> <a href="tel:+603-5882 8720">+603-5882 8720</a>
      </div>
      <div class="social-links float-right d-none">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        {{-- <h1><span><img src="{{ asset('img/yoshidenlogo.png') }}" alt="Yoshiden Logo" style="width: 40px;"></i></span><a href="/" class="scrollto">Yoshiden<span>(M)</span></a></h1> --}}
        <h1><span><img src="{{ asset('img/yoshidenlogo.png') }}" alt="Yoshiden Logo" style="width: 40px;"></i></span><a href="/" class="scrollto">Yoshiden</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/#body">Home</a></li>
          <li><a href="/#about">About Us</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/#portfolio">Portfolio</a></li>
          <li><a class="d-none" href="/#team">Team</a></li>
          <li class="menu-has-children"><a href="#">Catalog</a>
            <ul>
              <li><a href="/products">Our Product</a></li>
              <li><a href="#">Trading</a></li>
              <li><a href="#">Our Support</a></li>
              {{-- <li><a href="#">Drop Down 5</a></li> --}}
            </ul>
          </li>
          <li><a href="/#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <div class="content">
    @yield('content')
  </div>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2025.<strong> YOSHIDEN (M) SDN.BHD(497667 D)</strong>. <br/>All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <!-- Include reCAPTCHA script -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>