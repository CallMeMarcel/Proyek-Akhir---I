@extends('layouts.admin')

@section('tambah')

<div class="container">
    <a href="{{ url('/admin/payment') }}" class="btn btn-warning m-2">Kembali ke Jadwal</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updatepayment/'.$payment->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="file">file :</label>
                    <input  name="file" type="file" id="file"  value="{{ $payment->file }}">
                   
                    @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" value="{{ $payment->tanggal }}">
                    @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <button class="btn btn-dark" type="submit">Update Jadwal</button>
            </form>
        </div>
    </div>
</div>
@endsection
