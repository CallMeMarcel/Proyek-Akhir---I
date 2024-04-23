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
    
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed fade-in">

<div class="wrapper fade-in">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-warning navbar-light fade-in">
    <!-- Left navbar links -->
    <ul class="navbar-nav fade-in">
      <li class="nav-item fade-in">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item fade-in d-none d-sm-inline-block">
        <a href="/admin/dashboard" class="nav-link"><i class="fa-solid fa-gauge" style="font-size:20px"></i> Dashboard</a>
      </li>
      <li class="nav-item fade-in d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav fade-in ml-auto">
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4 fade-in">
    <!-- Brand Logo -->

    
    <!-- Sidebar -->
    <div class="sidebar bg-light fade-in">

 
      
    <div class="user-panel mt-3 pb-3 mb-3 fade-in">
    <div class="card text-bg-light mb-3 fade-in">
        <!-- Button Profile -->
        <button class="btn btn-light btn-block fade-in" type="button" data-toggle="collapse" data-target="#userProfile" aria-expanded="false" aria-controls="userProfile">
            <i class="fa-solid fa-user-tie"></i> Profile
        </button>
        <!-- Collapsible Content -->
        <div class="collapse fade-in" id="userProfile">
            <div class="card-body fade-in">
                <p class="card-text fade-in">Logged in as : {{ Auth::guard('admin')->user()->email }}</p>
           
                <div class="modal-body fade-in">
                <a href="/" class="btn btn-light btn-sm fade-in"><i class="fa-solid fa-right-from-bracket" style="font-size:20px"></i> Logout</a>`  
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
      <nav class="mt-2 fade-in">
        <ul class="nav nav-pills nav-sidebar flex-column fade-in" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item fade-in">
            <a href="#" class="nav-link fade-in">
              <p class="fade-in">
                Data Jemaat <i class="right fas fa-angle-left fade-in"></i>
              </p>
            </a>
            <ul class="nav nav-treeview fade-in">
              <li class="nav-item fade-in">
                <a href="/admin/datajemaat" class="nav-link fade-in">
                  <p class="fade-in">Jemaat</p>
                </a>
              </li>
              <li class="nav-item fade-in">
                <a href="/admin/tambahjemaat" class="nav-link fade-in">
                  <p class="fade-in"><i class="fa-solid fa-plus"></i> Tambah Jemaat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item fade-in">
            <a href="" class="nav-link fade-in">
              <p class="fade-in">
                Warta Jemaat <i class="right fas fa-angle-left fade-in"></i>
              </p>
            </a>
            <ul class="nav nav-treeview fade-in">
              <li class="nav-item fade-in">
                <a href="/admin/warta" class="nav-link fade-in">
                  <p class="fade-in">Warta Jemaat</p>
                </a>
              </li>
              <li class="nav-item fade-in">
                <a href="/admin/tambahwarta" class="nav-link fade-in">
                  <p class="fade-in"><i class="fa-solid fa-plus"></i> Tambah Warta Jemaat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item fade-in">
            <a href="#" class="nav-link fade-in">
              <p class="fade-in">
                Pelayan Ibadah <i class="right fas fa-angle-left fade-in"></i>
              </p>
            </a>
            <ul class="nav nav-treeview fade-in">
              <li class="nav-item fade-in">
                <a href="/admin/pelayan" class="nav-link fade-in">
                  <p class="fade-in">Pelayan Ibadah</p>
                </a>
              </li>
              <li class="nav-item fade-in">
                <a href="/admin/tambahpelayan" class="nav-link fade-in">
                  <p class="fade-in"><i class="fa-solid fa-plus"></i> Tambah Pelayan Ibadah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item fade-in">
            <a href="#" class="nav-link fade-in">
              <p class="fade-in">
                Keuangan <i class="right fas fa-angle-left fade-in"></i>
              </p>
            </a>
            <ul class="nav nav-treeview fade-in">
              <li class="nav-item fade-in">
                <a href="/admin/payment" class="nav-link fade-in">
                  <p class="fade-in">Keuangan</p>
                </a>
              </li>
              <li class="nav-item fade-in">
                <a href="/admin/tambahpayment" class="nav-link fade-in">
                  <p class="fade-in"><i class="fa-solid fa-plus"></i> Tambah Keuangan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item fade-in">
            <a href="#" class="nav-link fade-in">
              <p class="fade-in">
                Galeri <i class="right fas fa-angle-left fade-in"></i>
              </p>
            </a>
            <ul class="nav nav-treeview fade-in">
              <li class="nav-item fade-in">
                <a href="/admin/galeri" class="nav-link fade-in">
                  <p class="fade-in">Galeri</p>
                </a>
              </li>
              <li class="nav-item fade-in">
                <a href="/admin/tambahgaleri" class="nav-link fade-in">
                  <p class="fade-in"><i class="fa-solid fa-plus"></i> Tambah Galeri</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item fade-in">
            <a href="#" class="nav-link fade-in">
              <p class="fade-in">
                Berita <i class="right fas fa-angle-left fade-in"></i>
              </p>
            </a>
            <ul class="nav nav-treeview fade-in">
              <li class="nav-item fade-in">
                <a href="/admin/berita" class="nav-link fade-in">
                  <p class="fade-in">Berita</p>
                </a>
              </li>
              <li class="nav-item fade-in">
                <a href="/admin/tambahberita" class="nav-link fade-in">
                  <p class="fade-in"><i class="fa-solid fa-plus"></i> Tambah Berita</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper fade-in">
    <!-- Main content -->
    <section class="content fade-in">
      <div class="container fade-in">
        @yield('tambah')
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer style="background-color: #f2f2f2; padding: 20px; text-align: center; color: #555;">
   <p style="font-family: Arial, sans-serif; font-size: 14px; margin: 0;">&copy; 2024 by Kelompok 13</p>
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
<script src="{{URL::asset('asset/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('asset/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
