@extends('layouts.main')

@section('all')

<section class="ftco-section bg-light" id="sermons-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">GKPI Sidikalang Kota</span>
                <h2 class="mb-4">Keuangan</h2>
                <h1><i class="fa-solid fa-money-bill-1-wave" style="font-size:50px"></i></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    <?php $totalNominal = 0; ?>
                    @foreach($allPayment as $payment)
                    <tr>
                        <td scope="item"><?= $i ?></td>
                        <td>{{ $payment->persembahan }}</td>
                        <td>{{ $payment->tanggal }}</td>
                        <td>{{ $payment->status }}</td>
                        <td>RP.{{ $payment->nominal }}</td>
                        <?php $totalNominal += $payment->nominal; ?>      
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                    <tr>
                        <th colspan="4" class="text-center">Jumlah Total</th>
                        <td>RP.{{ $totalNominal }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
