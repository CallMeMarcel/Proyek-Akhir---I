@extends ('layouts.main')

@section('all')


<section class="ftco-intro img" id="events-section" style="background-image: url(asset/images/bg_3.jpg);">
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
                <div class="mt-auto"><a href="#" class="btn btn-primary">Join Us</a></div>
            </div>
        </div>
    </div>
	@endforeach
</div>


		


        	
		</section>


		<section class="ftco-section ftco-causes ftco-no-pb" id="causes-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Donate Charity</span>
            <h2 class="mb-5">Causes Needs Our Help</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(asset/images/cause-1.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html">Health care, Food</a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="40"
								  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
								    <span>40%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
								<p>A small river named Duden flows by their place and supplies it with the necessary.</p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(asset/images/cause-2.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html">Restored the Old City Church</a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="50"
								  	aria-valuemin="0" aria-valuemax="100" style="width:50%">
								    <span>50%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
								<p>A small river named Duden flows by their place and supplies it with the necessary.</p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(asset/images/cause-3.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html">Save Childern For Hunger</a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
								<p>A small river named Duden flows by their place and supplies it with the necessary.</p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="cause-entry ftco-animate">
							<a href="#" class="img" style="background-image: url(asset/images/cause-4.jpg);"></a>
							<div class="text p-3">
								<h3><a href="cause.html">Save Childern For Hunger</a></h3>
								<div class="progress mb-4">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
								<p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
								<p>A small river named Duden flows by their place and supplies it with the necessary.</p>
								<p><a href="#" class="btn btn-primary">Donate Now!</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-4 justify-content-end">
					<div class="col-lg-10">
						<div class="donated-intro bg-darken p-4 p-md-5">
							<h2>Donation so far <span>$</span><strong class="number" data-number="9891000">0</strong></h2>
    					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
    					<p><a href="#" class="btn btn-black px-4 py-3">Donate now!</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
        
		<section class="ftco-daily-verse img" style="background-image: url(asset/images/bg_4.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row justify-content-center align-items-center">
		    			<div class="col-md-2 ftco-animate">
		    				<div class="icon">
		    					<span class="flaticon-church"></span>
		    				</div>
		    			</div>
		    			<div class="col-md-10 daily-verse pl-md-5 ftco-animate">
		    				<span class="subheading">Jesus Christ Said:</span>
		    				<h3>"16 For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life."</h3>
		    				<h4 class="h5 mt-4 font-weight-bold"><span></span> John 3:16 KJV</h4>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Read the Latest Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('asset/images/image_1.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">June</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('asset/images/image_2.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">June</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('asset/images/image_3.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">June</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

@endsection