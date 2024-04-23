@extends('layouts.admin')

@section('tambah')

<div class="container">
    <a href="{{ url('/admin/payment') }}" class="btn btn-warning m-2">Kembali ke Keuangan</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updatepayment/'.$payment->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="persembahan">Kategori :</label>
                    <select class="form-select" name="persembahan" type="text" class="form-control @error('persembahan') is-invalid @enderror" id="persembahan"  value="{{ $payment->persembahan }}">
                    
                    <option value="weekly">Weekly</option>
                    <option value="daily">Daily</option>
                </select>
                    @error('persembahan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal :</label>
                    <input name="nominal" type="number" class="form-control @error('nominal') is-invalid @enderror" id="nominal" value="{{ $payment->nominal }}">
                    @error('nominal')
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
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-select" name="status" class="form-control @error('status') is-invalid @enderror" id="status" rows="3" placeholder="...">{{ $payment->status }}
                     
                    <option value="accepted">Accepted</option>
                    <option value="not accepted">Not Accepted</option>
                </select>
                    @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark" type="submit">Update Keuangan</button>
            </form>
        </div>
    </div>
</div>
@endsection
