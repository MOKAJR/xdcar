<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TheEvent - Bootstrap Event Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->


 <!-- =======================================================-->

 
 <!-- =======================================================-->



  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
   rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet">
  <link href="{{ asset('css2/boot.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css" rel="stylesheet') }}">
  <link href="{{ asset('lib/venobox/venobox.css" rel="stylesheet') }}">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
 
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <div id="app">
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="/home" class="scrollto"><h1><img src="{{ asset('img/logo4.png') }}"><a href="/home"> X<span>D </span>C<span>a</span>r</a></h1></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="/home">Home</a></li>
          <li><a href="/show">Show Cars</a></li>
          <li><a href="/add">Add Cars</a></li>
          <li><a href="/delete">Delete Cars</a></li>
          <li><a href="/contact">Contact</a></li>
          @guest
            <li>
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li>
                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else 
            <li class="nav-item dropdown buy-tickets">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} 
                </a>

                <div class="dropdown-menu dropdown-menu-right logout " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item logout " href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          @endguest

        </ul>
    </nav><!-- #nav-menu-container -->
    </div><!-- #containaer -->
  </header><!-- #header -->


  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">The XD CAR<br><span>Marketing</span> Conference</h1>
      <p class="mb-4 pb-0">Moka JR, To New Car</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About The XD CAR</a>
    </div>
  </section>

        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
      <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{ asset('img/logo.png') }}" alt="XDCAR">
            <p>This Company Was Maked in 2016 Created by Businessman Mohamed Babiker Eisa . 
              This company is located in Umdorman and has Many extarnal partnership . All New Cars in Sudan are Shown By Them .</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="/home">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#about">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="/Contact">Contact</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="/home">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#about">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="/contact">Contact</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                Umdorman Al-Sabeel Street,
                 NY 645, SDU<br>
              SUDAN <br>
              <strong>Phone:</strong> +249 9914 28909<br>
              <strong>Email:</strong> moka1111.mmm@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://web.facebook.com/profile.php?id=100007586657767" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/moka__jr/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/moka-jr-4995a7160/" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/in/moka-jr-4995a7160/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Moka Jr</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">Mohamed Babiker Eisa</a>
      </div>
    </div>
  </footer><!-- #footer -->
<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{ asset('contactform/contactform.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- ============================================-->
<script src="{{ asset('js2/j.js') }}"></script>
<script src="{{ asset('js2/b.min.js') }}"></script>
<!-- ============================================-->


</body>

</html>
