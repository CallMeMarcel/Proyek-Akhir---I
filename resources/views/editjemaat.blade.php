@extends('layouts.admin')

@section('tambah')

<div class="container">
    <a href="{{ url('/admin/datajemaat') }}" class="btn btn-warning m-2">Kembali ke Data Jemaat</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updatejemaat/'.$jemaat->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Tesla" value="{{ $jemaat->nama }}">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="umur">Umur :</label>
                    <input name="umur" type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" value="{{ $jemaat->umur }}">
                    @error('umur')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenisKelamin">Jenis Kelamin :</label>
                    <input name="jenisKelamin" type="text" class="form-control @error('jenisKelamin') is-invalid @enderror" id="jenisKelamin" value="{{ $jemaat->jenisKelamin }}">
                    @error('jenisKelamin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" placeholder="...">{{ $jemaat->alamat }}</textarea>
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark" type="submit">Update Jemaat</button>
            </form>
        </div>
    </div>
</div>
@endsection
