@extends ('layouts.main')

@section('all')


<section class="ftco-intro img" id="events-section" style="background-image: url(asset/images/GKPI.jpg);  background-attachment: fixed;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
				</div>
			</div>

			
		</section>

		<section class="ftco-section bg-light ftco-event" id="events-section">
			<div class="container-fluid px-4 ftco-to-top">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Events</span>
            <h2 class="mb-5">Upcoming Events</h2>
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
</section>


		




	


  

@endsection