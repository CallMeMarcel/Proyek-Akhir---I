@extends('layouts.main')

@section('all')
<section class="ftco-intro img" id="events-section" style="background-image: url(asset/images/gallery-3.jpg);">
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
          	<span class="subheading">GKPI Sidikalang Kota</span>
            <h2 class="mb-5">Pelayan Ibadah</h2>
          </div>
        </div>
            <div class="container mt-5">
                <table class="table">
                    @foreach ($allPelayan as $pelayan)
                    
                        <h1 class="text-center">{{$pelayan->formattedCreatedAt}}</h1>
                    <tbody>
                        <?php $i = 1; ?>
                        <tr>
                            <td><b><?= $i ?>. Pengkhotbah :</b></td>
                            <td>{{$pelayan->khotbah}}</td>
                        </tr>
                        <tr>
                            <td><b><?= $i + 1 ?>. Liturgis :</b></td>
                            <td>{{$pelayan->liturgis}}</td>
                        </tr>
                        <tr>
                            <td><b><?= $i + 2 ?>. Warta :</b></td>
                            <td>{{$pelayan->warta}}</td>
                        </tr>
                        <tr>
                            <td><b><?= $i + 3 ?>. Persembahan :</b></td>
                            <td>{{$pelayan->persembahan}}</td>
                        </tr>
                        <tr>
                            <td><b><?= $i + 4 ?>. Organis :</b></td>
                            <td>{{$pelayan->organis}}</td>
                        </tr>
                        <tr>
                            <td><b><?= $i + 5 ?>. Song Leaders:</b></td>
                            <td>{{$pelayan->song}}</td>
                        </tr>
                        <tr>
                            <td><b><?= $i + 6 ?>. Media :</b></td>
                            <td>{{$pelayan->multimedia}}</td>
                        </tr>
                        <tr>
                            <td><b><?= $i + 7 ?>. Doa Syafaat :</b></td>
                            <td>{{$pelayan->doa}}</td>
                            
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <?php $i++; ?>
                        
                    </tbody>
                    
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
