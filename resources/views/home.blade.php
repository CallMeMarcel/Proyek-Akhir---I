@extends ('layouts.main')

@section('all')

<section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(asset/images/GKPI.jpg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 text-center ftco-animate mt-5">
	          	<div class="text">
	          		<div class="subheading">
	          			<span>GKPI Sidikalang kota</span>
	          		</div>
		            <h1 class="mb-4">Following <span>Jesus</span> wherever we are</h1>
		            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
		            <p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">About us</a></p>
	            </div>
	          </div>
	        </div>
        </div>
      </div> 

      <div class="slider-item js-fullheight" style="background-image:url(asset/images/GKPII.jpg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 text-center ftco-animate mt-5">
	          	<div class="text">
	          		<div class="subheading">
	          			<span>GKPI Sidikalang Kota</span>
	          		</div>
		            <h1 class="mb-4">Following <span>Jesus</span> wherever we are</h1>
		            <p>Following Jesus wherever we are.</p>
		            <p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a><a href="about" class="btn btn-primary btn-outline-primary py-2 px-4 home-slider">About us</a></p>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </section>
	<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special News</h5>
    <p class="card-text">GKPI Sidikalang kota</p>
    <a href="events" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-body-secondary">
    News
  </div>
</div>

<div class="row flex-wrap">
		@foreach ($allBerita as $berita)
    <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="event-wrap d-flex ftco-animate">
            <div class="img"><img src="{{ asset('asset/images/'.$berita['gambar']) }}" class="card-img-top" alt="{{ $berita->gambar }}"> </div>
            <div class="text p-4 d-flex flex-column">
                <div>
                    <span class="time">{{ $berita->tanggal}}</span>
                    <h3><a href="#">{{ $berita->judul }}</a></h3>
                    <div class="meta">
                        <p><span class="icon-user mr-1"></span> by : <a href="#">{{ $berita->aktor }}</a></p>
                        <p><span class="icon-location"></span> {{ $berita->deskripsi }}</p>
                    </div>
                </div>
                <div class="mt-auto"><a href="{{ $berita->link }}" class="btn btn-primary">Visit Now!</a></div>
            </div>
        </div>
    </div>
	@endforeach
</div>
@endsection