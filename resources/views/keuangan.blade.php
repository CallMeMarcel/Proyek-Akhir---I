@extends('layouts.main')

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
          	<span class="subheading">GKPI Sidikalang Kota</span>
            <h2 class="mb-5">Jadwal & Keuangan</h2>
          </div>
        </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-light">
                        <th>No</th>
                        <th>File</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    
                    @foreach($allPayment as $payment)
                    <tr>
                        <td scope="item"><?= $i ?></td>
                        <td> <a href="{{ asset('asset/file/' . $payment->file) }}" target="_blank">{{ $payment->file }}</a></td>
                        <td>{{ $payment->tanggal }}</td>
                            
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
