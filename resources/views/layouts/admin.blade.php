<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{URL::asset('asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL::asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{URL::asset('asset/plugins/jqvmap/jqvmap.min.css')}}">

  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('asset/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL::asset('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL::asset('asset/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{URL::asset('asset/plugins/summernote/summernote-bs4.min.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .fade-in {
      animation: fadeInAnimation ease 1s;
      animation-iteration-count: 1;
      animation-fill-mode: forwards;
    }

    @keyframes fadeInAnimation {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }

    }

    .nav-link:hover {
    background-color: #ffbf00!important;
}

.nav-link:hover .fa-solid {
    color: #fff !important; /*Warna ikon putih saat digulirkan */
}

.nav-link:hover .fa-regular{
  color: #fff !important;
}
/* Efek hover untuk input */
.input-group input[type="search"]:hover {
    border-color: #ffc107; /* Warna border saat digulirkan */
}

/* Efek hover untuk tombol pencarian */
.input-group button.btn-sidebar:hover {
    background-color: #ffbf00; /* Warna latar belakang saat digulirkan */
    border-color: #ffc107; /* Warna border saat digulirkan */
    color: #fff; /* Warna teks putih saat digulirkan */
}
footer {
  background: linear-gradient(to right, #ffbf00,#ff5151 ); /* Gradient dari kuning ke hijau */
}

nav.main-header{
  background: linear-gradient(to right, #ff5151, #ffbf00);
}

.modal-confirm {
    color: #636363;
    width: 400px;
}
.modal-confirm .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
    text-align: center;
    font-size: 14px;
}
.modal-confirm .modal-header {
    border-bottom: none;
    position: relative;
}
.modal-confirm h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -10px;
}
.modal-confirm .icon-box {
    color: #fff;
    width: 95px;
    height: 95px;
    display: inline-block;
    border-radius: 50%;
    z-index: 9;
    border: 5px solid #f15e5e;
    padding: 15px;
    text-align: center;
}
.modal-confirm .icon-box i {
    font-size: 58px;
    margin: -2px 0 0 -2px;
}
.modal-confirm .modal-dialog {
    margin-top: 80px;
}
.modal-confirm .btn {
    color: #fff;
    border-radius: 4px;
    background: #60c7c1;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    border: none;
}
.modal-confirm .btn-danger {
    background: #f15e5e;
}
.modal-confirm .btn-secondary {
    background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
    background: #a8a8a8;
}

 
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed fade-in">

<div class="wrapper fade-in">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light fade-in">
    <!-- Left navbar links -->
    <ul class="navbar-nav fade-in">
      <li class="nav-item fade-in">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item fade-in  d-sm-inline-block">
        <a href="/admin/dashboard" class="nav-link"><i class="fa-solid fa-gauge" style="font-size:20px"></i> Dashboard</a>
      </li>
      <li class="nav-item fade-in ">
        <a href="/admin/register" class="nav-link">Register</a>
      </li>
      
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4 fade-in">
    <!-- Brand Logo -->

    
    <!-- Sidebar -->
    <div class="sidebar bg-light fade-in">

 
      
    <div class="user-panel fade-in">
    <div class=" text-bg-light mb-3 fade-in">
        <!-- Button Profile -->
        <button class="btn  btn-block fade-in" type="button" data-toggle="collapse" data-target="#userProfile" aria-expanded="false" aria-controls="userProfile">
        <h2><i class="fa-solid fa-user-tie"></i> Admin</h2>
        </button>
      
        <!-- Collapsible Content -->
        <div class="collapse fade-in" id="userProfile">
            <div class="card-body fade-in">
                
           <hr>
                <div class="modal-body fade-in">
                  
                    <div class="card bg-secondary">
                <h3>{{ Auth::guard('admin')->user()->username}}</h3>
                </div>
                
                <a href="/" class="btn btn-light btn-sm fade-in mt-2"><i class="fa-solid fa-right-from-bracket" style="font-size:20px"></i> Logout</a>`  
</div>
           
            </div>
        </div>
    </div>
</div>


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group fade-in" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar fade-in" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append fade-in">
            <button class="btn btn-sidebar bg-warning">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> 

      <!-- Sidebar Menu -->
      <hr>
        <nav class=" fade-in" >

          <ul class="nav nav-pills nav-sidebar flex-column fade-in" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            
            <li class="nav-item fade-in">
            <a href="#" class="nav-link fade-in" style="text-align: center;">
      <p class="fade-in">
          <i class="fa-solid fa-users" style="font-size:30px;color:#ff5151;" ></i>
          <br>Data Jemaat
      </p>
  </a>

              
              <ul class="nav nav-treeview fade-in">
                <li class="nav-item fade-in">
                  <a href="/admin/datajemaat" class="nav-link fade-in">
                    <p class="fade-in">Jemaat</p><i class="fa-solid fa-eye" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
                <li class="nav-item fade-in">
                  <a href="/admin/tambahjemaat" class="nav-link fade-in">
                    <p class="fade-in">Tambah Jemaat</p><i class="fa-solid fa-plus" style="float:right; color:#a0c434;"></i> 
                  </a>
                </li>
              </ul>
            </li>
            <hr>
            
            <li class="nav-item fade-in">
              <a href="" class="nav-link fade-in"  style="text-align: center;">
                <p class="fade-in">
                <i class="fa-regular fa-newspaper" style="font-size:30px;color:#ff5151;"></i><br>  
                Warta Jemaat 
                  
                </p>
              </a>
              <ul class="nav nav-treeview fade-in">
                <li class="nav-item fade-in">
                  <a href="/admin/warta" class="nav-link fade-in">
                    <p class="fade-in">Warta Jemaat</p><i class="fa-solid fa-eye" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
                <li class="nav-item fade-in">
                  <a href="/admin/tambahwarta" class="nav-link fade-in">
                    <p class="fade-in"></i> Tambah Warta Jemaat</p><i class="fa-solid fa-plus" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
              </ul>
            </li>
            <hr>
            
          
            
            <li class="nav-item fade-in">
              <a href="#" class="nav-link fade-in" style="text-align: center;">
                <p class="fade-in">
                <i class="fa-solid fa-camera-retro"style="font-size:30px;color:#ff5151;"></i><br>  
                Galeri 
                </p>
              </a>
              <ul class="nav nav-treeview fade-in">
                <li class="nav-item fade-in">
                  <a href="/admin/galeri" class="nav-link fade-in">
                    <p class="fade-in">Galeri</p><i class="fa-solid fa-eye" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
                <li class="nav-item fade-in">
                  <a href="/admin/tambahgaleri" class="nav-link fade-in">
                    <p class="fade-in"> Tambah Galeri</p><i class="fa-solid fa-plus" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
              </ul>
            </li>
            <hr>
            
            <li class="nav-item fade-in">
              <a href="#" class="nav-link fade-in" style="text-align: center;">
                <p class="fade-in">
                  
                <i class="fa-solid fa-radio"style="font-size:30px;color:#ff5151;"></i><br>
                Berita 
                </p>
              </a>
              <ul class="nav nav-treeview fade-in">
                <li class="nav-item fade-in">
                  <a href="/admin/berita" class="nav-link fade-in">
                    <p class="fade-in">Berita</p><i class="fa-solid fa-eye" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
                <li class="nav-item fade-in">
                  <a href="/admin/tambahberita" class="nav-link fade-in">
                    <p class="fade-in"> Tambah Berita</p><i class="fa-solid fa-plus" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
              </ul>
            </li>
            <hr>
            
            <li class="nav-item fade-in">
              <a href="#" class="nav-link fade-in" style="text-align: center;">
                <p class="fade-in">
                <i class="fa-solid fa-user-group"style="font-size:30px;color:#ff5151;"></i><br> 
                Pengurus 
                </p>
              </a>
              <ul class="nav nav-treeview fade-in">
                <li class="nav-item fade-in">
                  <a href="/admin/pengurus" class="nav-link fade-in">
                    <p class="fade-in">Pengurus</p><i class="fa-solid fa-eye" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
                <li class="nav-item fade-in">
                  <a href="/admin/tambahpengurus" class="nav-link fade-in">
                    <p class="fade-in"> Tambah Pengurus</p><i class="fa-solid fa-plus" style="float:right; color:#a0c434;"></i>
                  </a>
                </li>
              </ul>
            </li>
            <hr>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Main content -->
    
    
    <div class="container">
        @yield('tambah')
    </div>
      <br>
      <br>
      <br>
      <br>
      
    
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  <footer class="main-footer fixed-bottom">
  <div class="container text-center">
    <h4 class="text-light">GKPI Sidikalang Kota</h4>
    <p class="text-light">&copy; 2024 by Admin of GKPI Sidikalang Kota</p>
  </div>
</footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark fade-in">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL::asset('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::asset('asset/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("sidebar-search-input");
        const searchButton = document.getElementById("sidebar-search-button");

        searchButton.addEventListener("click", function() {
            const searchTerm = searchInput.value.toLowerCase();
            const navItems = document.querySelectorAll(".nav-sidebar .nav-link");

            navItems.forEach(function(navItem) {
                const text = navItem.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    navItem.closest(".nav-item").style.display = "block";
                } else {
                    navItem.closest(".nav-item").style.display = "none";
                }
            });
        });
    });


</script>


<!-- Bootstrap 4 -->
<script src="{{URL::asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{URL::asset('asset/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('asset/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{URL::asset('asset/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('asset/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('asset/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{URL::asset('asset/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('asset/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::asset('asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{URL::asset('asset/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{URL::asset('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('asset/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('asset/dist/js/pages/dashboard.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>


@stack('script')
</body>
</html>
