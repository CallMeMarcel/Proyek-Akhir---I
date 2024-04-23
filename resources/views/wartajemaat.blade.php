@extends('layouts.main')

@section('all')

<section class="ftco-intro img" id="events-section" style="background-image: url(asset/images/cause-3.jpg);">
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
            <h2 class="mb-5">Warta Jemaat</h2>
          </div>
        </div>


    <div class="container">
        
                    <?php $i=1 ?>
                    @foreach($allWarta as $warta)
                    <div class="card mb-5" style="color:black;">
                        <h4 class="card-header" style="background-color: #FFD700;"><?= $i ?>. {{ $warta->judul }}</h4>
                    <div class="card-body">
                    <h5 class="card-title">{{ $warta->deskripsi }}</h5>
                        <p class="card-text" style="color: #FFD700;">{{$warta->formattedCreatedAt}}</p>
                    </div>    
                    </div>
                    
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection