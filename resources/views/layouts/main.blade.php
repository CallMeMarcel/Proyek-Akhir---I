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
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar-nav h5 li {
            font-family: 'Poppins', sans-serif;
        }
    </style>
  </head>
  <body>
    

  <header>
  <nav class="navbar navbar-expand-lg  ftco_navbar site-navbar-target" style="background-color:black; opacity: 80%;" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/"><i class="fa-solid fa-church" class="start-100" alt="Akun" style="width: 60px; height: auto; color:white;"></i> Gkpi Sidikalang</a>
    <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <h5><li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li></h5>
        <h5><li class="nav-item"><a href="about" class="nav-link"><span>About</span></a></li></h5>
        <li class="nav-item dropdown">
        <h5><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a></h5>
            <ul class="dropdown-menu">  
              <li><a class="dropdown-item" href="wartajemaat">Warta Jemaat</a></li>
              
            </ul>
        </li>
        
        <h5><li class="nav-item"><a href="events" class="nav-link"><span>Events</span></a></li></h5>
        <h5> <li class="nav-item"><a href="leaders" class="nav-link"><span>Pengurus</span></a></li></h5>
        <h5> <li class="nav-item"><a href="contact" class="nav-link"><span>Contact</span></a></li></h5>
        <h5> <li><a href="/admin/login" class="nav-link ml-5 "><i class="fa-solid fa-user-tie" style="color:white;"></i></a></li>
      </ul>
    </div>
  </div>
    
</nav>
</header>

	@yield('all')

	<footer class="ftco-footer ftco-bg-dark ftco-section" style="background-color:black;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><i class="fa-solid fa-church" class="start-100" alt="Akun" style="width: 60px; height: auto; color:white;"></i><span>Gkpi </span> Sidikalang</h2>
              <p>Whatever we may be walking into, God has already stepped into it and prepared a way for us.
</p>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">About</h2>
              <ul class="list-unstyled">
                <li><a href="leaders" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Pengurus</a></li>
                <li><a href="events" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Events</a></li>
                <li><a href="about" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>History</a></li>
              </ul>
            </div> 
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Service Hours</h2>
              <div class="opening-hours">
              	<p>Ibadah Pagi: <span class="mb-3">08:30 am to 10:00 am</span></p> 
              	<p>Ibadah Siang: <span class="mb-3">10:30 am to 12:30 am</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa-regular fa-heart"></i><a> by GKPI Sidikalang Kota</a>
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
  <script src="https://smtpjs.com/v3/smpt.js"></script>
  @stack("js")

  </body>
</html>