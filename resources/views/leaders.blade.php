@extends('layouts.main')

@section('all')
    <!-- Add Bootstrap CSS -->
	<style>
.carousel-item {
    transition: transform 0.5s ease, opacity 0.5s ease;
}

.carousel-item img {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease;
}

.carousel-item img:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: black;
    background-size: 100%, 100%;
    border-radius: 50%;
}

.carousel-control-prev-icon:after,
.carousel-control-next-icon:after {
    font-size: 30px;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}

.carousel-control-prev-icon:after {
    content: '<';
}

.carousel-control-next-icon:after {
    content: '>';
}
</style>

<section class="ftco-section ftco-no-pb" id="pastor-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-6 heading-section text-center ftco-animate">
                <span class="subheading">GKPI Sidikalang Kota</span>
                <h2 class="mb-4">Badan Pengurus Harian</h2>
                <p style="color:black; font-size:20px;"><b>Pengurus GKPI Sidikalang Kota</b></p>
            </div>
        </div>
        <div id="pengurusCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($allPengurus as $index => $pengurus)
                    <div class="carousel-item @if($index == 0) active @endif">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch mb-4">
                                <div class="staff w-100">
                                    <div class="img-wrap d-flex align-items-stretch">
                                        <div class="img align-self-stretch">
                                            <img src="{{ asset('asset/images/'.$pengurus['gambar']) }}" class="card-img-top" alt="{{ $pengurus->gambar }}" style="border-radius: 10px; width: 100%; height: 20em; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="text d-flex align-items-center pt-3 text-center">
                                        <div>
                                            <h3 class="mb-2">{{$pengurus->nama}}</h3>
                                            <span class="position mb-4">{{$pengurus->role}}</span>
                                            <div class="faded">
                                                <ul class="ftco-social text-center">
                                                    <li class="ftco-animate"><a href="{{$pengurus->twiter}}"><span class="icon-twitter"></span></a></li>
                                                    <li class="ftco-animate"><a href="{{$pengurus->facebook}}"><span class="icon-facebook"></span></a></li>
                                                    <li class="ftco-animate"><a href="{{$pengurus->google}}"><span class="icon-google-plus"></span></a></li>
                                                    <li class="ftco-animate"><a href="{{$pengurus->instagram}}"><span class="icon-instagram"></span></a></li>
                                                </ul>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#pengurusCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#pengurusCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

@endsection
