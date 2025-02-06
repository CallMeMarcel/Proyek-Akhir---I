@extends ('layouts.main')

@section('all')


<style>
  
  .flex-container {
    display: flex;
    flex-wrap: wrap;
  }

  .column {
    flex: 50%;
    padding: 0 15px;
  }

  ul {
    list-style-type: none; 
    padding: 0; 
  }

  .video-container {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
  }

  video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
  }

  .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
         z-index: 1;
  }

	
</style>

<br>
<br>
<br>
<br>


 

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section " id="about-section">
    	<div class="container-fluid px-0">
    		<div class="row d-md-flex text-wrapper">
					<div class="one-half img" style="background-image: url('asset/images/GKPI.jpg');"></div>
					  <div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
						  <div class="text-inner pl-md-5">
                <h3 class="heading">Sejarah Gereja <span>GKPI</span> Sidikalang Kota</h3>
              <p>Gereja ini didirikan pada tanggal 15 Agustus 1965, dengan 19 Kepala Keluarga dan gereja ini diresmikan pada 1 Mei 1966. Latar belakang gereja dimulai dari Rabu tanggal 15 September 1965 dilakukanlah rapat pembentukan jemaat GKPI Jemat Khusus Sidikalang kota yang diadakan di rumah salah satu jemaat St. Saur Manullang yang berada di Sidikalang, tepatnya di jalan Pakpak. Dan yang hadir dalam rapat tersebut berjumlah 5 Kepala keluarga yaitu,</p>

                <ul class="my-4">
              	  <li><span class="ion-ios-checkmark-circle mr-2"></span> Keluarga St. J. R. Ompusunggu,</li>
              	  <li><span class="ion-ios-checkmark-circle mr-2"></span> St. Saur Manullang, </li>
              	  <li><span class="ion-ios-checkmark-circle mr-2"></span> St. K. Sianturi, </li>
                  <li><span class="ion-ios-checkmark-circle mr-2"></span> St. J.H. Simamora, </li>
                  <li><span class="ion-ios-checkmark-circle mr-2"></span> Sdr. Tuana Lumban Tobing. </li>
                </ul>
                      
              </div>
					  </div>
    		  </div>
    	  </div>

</section>
    
      <section class="ftco-counter bg-light mt-5" id="section-counter">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center ">
              		<span class="icon-users"></span>
              	</div>
                <?php $totalJemaat = 0; ?>
                    @foreach($allJemaat as $jemaat)
                        <?php $totalJemaat++ ?>   
                    @endforeach
                    <strong class="number text-warning">{{$totalJemaat}}</strong>
                <span class="text-dark">Jemaat</span>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-user"></span>
              	</div>
                <?php $totalPengurus = 0; ?>
                @foreach($allPengurus as $pengurus)
                <?php $totalPengurus++ ?>   
                @endforeach
                <strong class="number text-warning">{{$totalPengurus}}</strong>
                <span class="text-dark">Pengurus  </span>
              </div>
            </div>
          </div>

          
          
          

            </div>
          </div>
        </div>
    	</div>
]
    </section> 

    <div class="video-container" style="background-attachment: fixed;">

    <video autoplay muted loop>
    <source src="asset/video/Videos.mp4" type="video/mp4" style="filter:blur(5px);">
    Your browser does not support the video tag.
  </video>

  <div class="content">
    <section class="ftco-intro img">
    <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-6 heading-section text-left text-warning ftco-animate">
        <strong class="subheading text-warning">GKPI Sidikalang</strong>
        <h2 class="mb-4 text-light">Visi</h2>
        <p>Visi: <br> "Menjadi gereja yang memuliakan Allah, membangun komunitas yang penuh kasih, dan memberikan dampak positif bagi masyarakat Kota Sidikalang."
        </p>
      </div>

      <div class="col-md-6 heading-section text-left text-warning ftco-animate">
        <strong class="subheading text-warning">GKPI Sidikalang</strong>
        <h2 class="mb text-light">Misi</h2>
        <p>
Misi: <br>
1. Membangun hubungan yang kuat dengan Allah melalui ibadah, doa, dan pengajaran Firman-Nya. <br><br>
2. Membangun komunitas yang inklusif dan penuh kasih, di mana setiap individu merasa diterima dan dihargai. <br><br>
3. Memberdayakan anggota gereja untuk melayani sesama dan memenuhi kebutuhan masyarakat melalui program-program sosial dan kemanusiaan. <br><br>
4. Mengembangkan pemimpin-pemimpin rohani yang berintegritas dan mampu membimbing gereja dan masyarakat secara bijaksana. <br> <br>
5. Menjangkau generasi muda dengan pesan Injil yang relevan dan mempersiapkan mereka untuk menjadi pemimpin masa depan yang berdampak positif.</p>
      </div>
    </div>
  </div>
    </section>
  </div>
</div>


<section id="photo-section" class="ftco-gallery ftco-section ftco-no-pb mb-4">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
          </div>
        </div>
    		<div class="row">
			
			@foreach ($allGaleri as $galeri)
    			<div class="col-md-3 ftco-animate">
        			<div class="gallery image-popup img d-flex align-items-center">
            			<div class="img-wrap"> <!-- Menambahkan border radius di sini -->
                	<img src="{{ asset('asset/images/'.$galeri['gambar']) }}" class="card-img-top" alt="{{ $galeri->gambar }}"  style="border-radius: 10px; width: 20em; height:20em">
                	<p><b>Description :</b></p><p class="text-center"> {{ $galeri->deskripsi }}</p>
            			</div>
        			</div>
    			</div>
			@endforeach
			 </div>
			</div>
    		</section>


<section class="ftco-section ftco-event" id="events-section">
			<div class="container-fluid px-4 ">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading text-dark">GKPI Sidikalang Kota</span>
            <h4 class="mb-5 text-dark">Sejarah</h4>
			<p class="text p-3 text-justify">Pada hari Minggu tanggal 19 September 1965 dilaksanakan kebaktian pertama yang daiadakan di rumah salah satu jemaat yaitu keluarga D. Naibaho yang bertempat di jalan Nilam. Dan ibadah tersebut dipimpin oleh Bapak Ds. Waller Lumban Tobing dari kantor pusat GKPI. Dan yang hadir pada kebaktian pertama berkisar 12 Rumah Tangga. Dari sejak kebaktian pertama tanggal 19 September sampai dengan tanggal 19 Desember 1965 tempat kebaktian selalu diadakan di rumah keluarga salah satu jemaat yaitu keluarga D. Naibaho di jalan Nilam, kemudian pada tangal 24 Desember 1965 diadakanlah jamuan makan bersama yang bertempat di gereja pertama yang pada saat itu gereja tersebut masih keadaan darurat dan sekaligus disanalah dilaksanakan perayaan Pesta Natal dan sejak tangal 25 Desember 1965. Acara-acara kebaktian sudah dapat dilaksanakan di gedung gereja tersebut walaupun masih dalam tahap perbaikan. Pada hari Minggu tanggal 1 Mei 1966 diadakanlah acara peresmian GKPI Jemaat Khusus Sidikalang Kota yang bertempat di gereja lama. Dan pada pesta peresmian tersebut anggota jemaat GKPI Sidikalang kota sudah ada sebanyak 19 Rumah Tangga.</p>
  
          </div>
        </div>
  
   
  </div>

</section>



@endsection