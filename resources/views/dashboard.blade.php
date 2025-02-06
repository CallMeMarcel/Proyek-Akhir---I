@extends('layouts.admin')

@section('tambah')
<style>

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        .btn:hover {
          background-color: #ffbf00;
            
            transition: background-color 0.3s ease;
        }
        
        
        .card:hover {
    /* background-color: #ff5151; Warna merah */
    /* color: #fff; Warna teks putih */
}
.card:hover .fa-regular {
    color: #ffbf00 !important; /* Warna ikon putih saat digulirkan */
}

.card:hover .fa-solid {
    color: #ffbf00 !important; /* Warna ikon putih saat digulirkan */
}

.small-box-footer:hover{
  background-color: #ffbf00 !important;
  color:#fff !important;
}


      


    </style>
     
     
    
<div class='inner'>
    <h1>Dashboard</h1>
    <h4>Welcome Administrator</h4>
     <!-- <img src="asset/images/image-1.jpg" alt="Gambar 1" style="height: 200px; width: auto;"> -->
     </div>
    <hr>  
    <div class="row m-2">
    <div class="col-lg-2 col-md-12">
        <div class="card" style="text-align: center;">
            <i class="fa-solid fa-users-rectangle" style="margin-top:10px;font-size: 50px;color:#ff5151;"></i>
            <div class="card-body">
                <h5 class="card-title-center">Jemaat</h5>

                <?php $totalJemaat = 0; ?>
                @foreach($allJemaat as $jemaat)
                <?php $totalJemaat++ ?>  
                @endforeach 
                <p class="card-text"><b>{{$totalJemaat}}</b></p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-12">
        <div class="card" style="text-align: center;">
            <i class="fa-regular fa-newspaper" style="margin-top:10px;font-size:50px; color:#ff5151;"></i>
            <div class="card-body">
              <?php $totalWarta = 0; ?>
              @foreach($allWarta as $warta)
              <?php $totalWarta++ ?>
              @endforeach
                <h5 class="card-title-center">Warta</h5>
                <p class="card-text">{{$totalWarta}}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-12">
        <div class="card" style="text-align: center;">
            <i class="fa-solid fa-radio" style="margin-top:10px;font-size: 50px; color:#ff5151"></i>
            <div class="card-body">
                <h5 class="card-title-center">Berita</h5>
                <?php $totalBerita = 0; ?>
              @foreach($allBerita as $berita)
              <?php $totalBerita++ ?>
              @endforeach
                <p class="card-text">{{$totalBerita}}</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-2 col-md-12">
        <div class="card" style="text-align: center;">
            <i class="fa-solid fa-user-group" style="margin-top:10px;font-size: 50px; color:#ff5151"></i>
            <div class="card-body">
                <h5 class="card-title-center">Pengurus</h5>
                <?php $totalPengurus = 0; ?>
              @foreach($allPengurus as $pengurus)
              <?php $totalPengurus++ ?>
              @endforeach
                <p class="card-text">{{$totalPengurus}}</p>
            </div>
        </div>
    </div>
</div>

<hr>
    <!-- Main content -->
    
        <!-- Small boxes (Stat box) -->
        <div class="row ">
        
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>Jemaat</h3>
                <p>GKPI Sidikalang Kota</p>
              </div>
              <div class="icon" >
              <i class="fa-solid fa-people-roof" style="font-size:60px;"></i>
              </div>
              <a href="/admin/datajemaat" class="small-box-footer" style="background-color:#a0c434;">More info <i class="fas fa-arrow-circle-right"style="color:#ff5151;"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>Warta</h3>

                <p>GKPI Sidikalang Kota</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-clipboard" style="font-size:60px;"></i>
              </div>
              <a href="/admin/warta" class="small-box-footer" style="background-color:#a0c434;">More info <i class="fas fa-arrow-circle-right" style="color:#ff5151;"></i></a>
            </div>
          </div>

          
         

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>Galeri</h3>

                <p>GKPI Sidikalang Kota</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-camera-retro"style="font-size:60px;"></i>
              </div>
              <a href="/admin/galeri" class="small-box-footer" style="background-color:#a0c434;">More info <i class="fas fa-arrow-circle-right"style="color:#ff5151;"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>Pengurus</h3>

                <p>GKPI Sidikalang Kota</p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-user-group"style="font-size:60px;"></i>
              </div>
              <a href="/admin/pengurus" class="small-box-footer" style="background-color:#a0c434;">More info <i class="fas fa-arrow-circle-right"style="color:#ff5151;"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>Berita</h3>

                <p>GKPI Sidikalang Kota</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-radio"style="font-size:60px;"></i>
              </div>
              <a href="/admin/berita" class="small-box-footer"style="background-color:#a0c434;">More info <i class="fas fa-arrow-circle-right"style="color:#ff5151;"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
  
       


<!-- <div class="card-container">
    
    <div class="card text mb-3 fade-in">
        <div class="card-header"><b>Jemaat</b></div>
        <div class="card-body">
            <i class="fa-solid fa-people-roof" style="font-size:50px;"> </i>
            <p>berisi tentang Data Jemaat dari GKPI SIdikalang Kota</p>
            <a href="/admin/datajemaat" class="btn btn-warning">More Details</a>
        </div>
    </div>

    <div class="card text mb-3">
        <div class="card-header"><b>Warta Jemaat</b></div>
        <div class="card-body">
            <i class="fa-solid fa-clipboard" style="font-size:50px"></i>
            <p>berisi tentang Warta Jemaat dari GKPI SIdikalang Kota</p>
            <a href="/admin/warta" class="btn btn-warning">More Details</a>
        </div>
    </div>

    <div class="card text mb-3">
        <div class="card-header"><b>Pelayan Ibadah</b></div>
        <div class="card-body">
            <i class="fa-solid fa-calendar-check" style="font-size:50px"></i>
            <p>berisi tentang Pelayan  Ibadah dari GKPI SIdikalang Kota</p>
            <a href="/admin/pelayan" class="btn btn-warning">More Details</a>
        </div>
    </div>

    <div class="card text mb-3">
        <div class="card-header"><b>Keuangan</b></div>
        <div class="card-body">
            <i class="fa-solid fa-money-bill-1-wave" style="font-size:50px"></i>
            <p>berisi tentang Data Keuangan dari GKPI SIdikalang Kota</p>
            <a href="/admin/payment" class="btn btn-warning">More Details</a>
        </div>
    </div>

    <div class="card text mb-3">
        <div class="card-header"><b>Galeri</b></div>
        <div class="card-body">
            <i class="fa-solid fa-camera-retro" style="font-size:50px"></i>
            <p>berisi tentang Data Galeri dari GKPI SIdikalang Kota</p>
            <a href="/admin/galeri" class="btn btn-warning">More Details</a>
        </div>
    </div>

    <div class="card text mb-3">
        <div class="card-header"><b>Pengurus</b></div>
        <div class="card-body">
            <i class="fa-solid fa-radio" style="font-size:50px"></i>
            <p>berisi tentang Data Pengurus dari GKPI SIdikalang Kota</p>
            <a href="/admin/pengurus" class="btn btn-warning">More Details</a>
        </div>
    </div>

    <div class="card text mb-3">
        <div class="card-header"><b>Berita</b></div>
        <div class="card-body">
            <i class="fa-solid fa-radio" style="font-size:50px"></i>
            <p>berisi tentang Berita dari GKPI SIdikalang Kota</p>
            <a href="/admin/berita" class="btn btn-warning">Go somewhere</a>
        </div>
    </div>
</div> -->

@endsection
