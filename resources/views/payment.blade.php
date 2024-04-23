@extends('layouts.admin')

@section('tambah')

<div class="container">

    <h1 class="display-2 mb-5"><i class="fa-solid fa-money-bill-1-wave" style="font-size:80px"></i> Keuangan</h1>


    <table class="table">
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Nominal</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allPayment as $payment)
            <tr>
                <td>{{$payment->persembahan}}</td>
                <td>{{$payment->nominal}}</td>
                <td>{{$payment->tanggal}}</td>
                <td>{{$payment->status}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/admin/editpayment/'.$payment->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ url('/admin/hapuspayment/'.$payment->id) }}" method="post">
                        @csrf
                            <button type="submit" class="btn btn-dark ml-2"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
