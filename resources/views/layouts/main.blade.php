<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GKPI SIDIKALANG KOTA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('asset/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('asset/css/animate.css') }}">

    <link rel="stylesheet" href="{{URL::asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::asset('asset/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::asset('asset/css/ionicons.min.css')}}">
  
    <link rel="stylesheet" href="{{URL::asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  </head>
  <body>
    

<header>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-dark site-navbar-target bg-dark" id="ftco-navbar" style="opacity:80%">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="{{URL::asset('asset/images/favicon.ico')}}" class="start-100" alt="Akun" style="width: 60px; height: auto;"></span> Gkpi Sidikalang</a>
    <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li>
        <li class="nav-item"><a href="about" class="nav-link"><span>About</span></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="datajemaats"> Data Jemaat</a></li>
              <li><a class="dropdown-item" href="wartajemaat">Warta Jemaat</a></li>
              <li><a class="dropdown-item" href="pelayanibadah">Pelayan Ibadah</a></li>
              <li><a class="dropdown-item" href="keuangan">Keuangan</a></li>
            </ul>
        </li>
        
        <li class="nav-item"><a href="events" class="nav-link"><span>Events</span></a></li>
        <li class="nav-item"><a href="leaders" class="nav-link"><span>Pengurus</span></a></li>
        <li class="nav-item"><a href="contact" class="nav-link"><span>Contact</span></a></li>
        <li><a href="/admin/login" class="nav-link ml-5 "><img src="{{URL::asset('asset/images/akun.png')}}" class="start-100" alt="Akun" style="width: 30px; height: auto;"></a></li>
      </ul>
    </div>
  </div>
    
</nav>
</header>

	@yield('all')

	<footer class="ftco-footer ftco-bg-dark ftco-section bg-dark">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><img src="{{URL::asset('asset/images/favicon.ico')}}" class="start-100" alt="Akun" style="width: 60px; height: auto;"><span>Gkpi </span> Sidikalang</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">About</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Staff</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Beliefs</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>History</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Mission</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Wedding &amp; Funerals</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Jobs &amp; Internship</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fellowships</a></li>

              </ul>
            </div> 
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Connect</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home Groups</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Recovery Groups</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Memberships</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Children &amp; Students</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Volunteer</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Counseling</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Assistance</a></li>
              </ul>
            </div> 
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Service Hours</h2>
              <div class="opening-hours">
              	<p>Saturday Prayer Meeting: <span class="mb-3">10:00 am to 11:30 am</span></p> 
              	<p>Sunday Service: <span class="mb-3">10:30 am to 11:30 am</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i><a> by Kelompok 13</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{URL::asset('asset/js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{URL::asset('asset/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/aos.js')}}"></script>
  <script src="{{URL::asset('asset/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{URL::asset('asset/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{URL::asset('asset/js/google-map.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL::asset('asset/js/main.js')}}"></script>

  </body>
</html>