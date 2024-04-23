@extends('layouts.main')

@section('all')

<section class="ftco-intro img" id="events-section" style="background-image: url(asset/images/bg_4.jpg);">
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
            <h2 class="mb-5">Data Jemaat</h2>
          </div>
        </div>

    <div class="container">
        <div class="table-responsive">
            <table  class="table table-bordered">
                <thead>
                    <tr style="background-color: #FFD700;">
                        <th><h2 class="text-center">No</h2></th>
                        <th><h2 class="text-center">Nama</h2></th>
                        <th><h2 class="text-center">Jenis Kelamin</h1></th>
                        <th><h2 class="text-center">Umur</h2></th>
                        <th><h2 class="text-center">Alamat</h2></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach($allJemaat as $item)
                    <tr>
                        <td scope="item" class="text-center"><h3><?= $i ?></h4></td>
                        <td><h4 class="text-center">{{ $item->nama }}</h4></td>
                        <td><h4 class="text-center">{{ $item->jenisKelamin }}</h4></td>
                        <td><h4 class="text-center">{{ $item->umur }}</h4></td>
                        <td><h4 class="text-center">{{ $item->alamat }}</h4></td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer">
    <?php
    $today = date("F j, Y"); // Menghasilkan format tanggal seperti "April 22, 2024"
    echo "Updated on $today";
    ?>
</div>
        </div>
    </div>
</section>

@endsection
