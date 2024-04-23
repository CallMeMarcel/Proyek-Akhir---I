@extends('layouts.main')

@section('all')
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">GKPI Sidikalang Kota</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

		
        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

	<div class="card text-center">
  <div class="card-header">
    Location
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
	
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.07503988868945!2d98.30660522838632!3d2.756861714115693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303047fce064c5eb%3A0x30aa08b0eff05200!2sGKPI%20Sidikalang!5e0!3m2!1sid!2sid!4v1710120894819!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta GKPI Sidikalang"></iframe>

    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="https://www.google.com/maps?ll=2.756699,98.306613&z=20&t=m&hl=id&gl=ID&mapclient=embed&cid=3506624815894123008" class="btn btn-primary">Visit Here!</a>
  </div>
  <div class="card-footer text-body-secondary">
    <?php
    $today = date("F j, Y"); // Menghasilkan format tanggal seperti "April 22, 2024"
    echo "Updated on $today";
    ?>
</div>

</div>


		<section id="photo-section" class="ftco-gallery ftco-section ftco-no-pb mb-4">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">GKPI Sidikalang Kota<br>Photos</h2>
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

    @endsection