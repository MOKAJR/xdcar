@extends('layouts.app')

@section('content')

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Company</h2>
            <p>This Company Was Maked in 2016 Created by Businessman Mohamed Babiker Eisa . 
              This company is located in Umdorman and has Many extarnal partnership . All New Cars in Sudan are Shown By Them . </p>
          </div>
          <div class="col-lg-6">
            <h3>Where</h3>
            <p>Umdorman</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Developer Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>The Developer</h2>
          <p>Here are The Developer</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/developer/1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Mohamed Babiker Eisa</a></h3>
                <p>Web designer</p>
                <div class="social">
                  <a href="https://www.instagram.com/moka__jr/"><i class="fa fa-instagram"></i></a>
                  <a href="https://web.facebook.com/profile.php?id=100007586657767"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/moka-jr-4995a7160/"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.linkedin.com/in/moka-jr-4995a7160/"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/developer/2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Moka jr</a></h3>
                <p>FullStack Developer</p>
                <div class="social">
                  <a href="https://www.instagram.com/moka__jr/"><i class="fa fa-instagram"></i></a>
                  <a href="https://web.facebook.com/profile.php?id=100007586657767"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/moka-jr-4995a7160/"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.linkedin.com/in/moka-jr-4995a7160/"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/developer/3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Mohamed Babiker Eisa</a></h3>
                <p>Web Developer</p>
                <div class="social">
                  <a href="https://www.instagram.com/moka__jr/"><i class="fa fa-instagram"></i></a>
                  <a href="https://web.facebook.com/profile.php?id=100007586657767"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.linkedin.com/in/moka-jr-4995a7160/"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.linkedin.com/in/moka-jr-4995a7160/"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>
    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section>



  </main>

  @endsection