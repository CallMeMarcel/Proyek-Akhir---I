@extends('layouts.admin')

@section('tambah')

<div class="container">
    <a href="{{ url('/admin/pengurus') }}" class="btn btn-warning m-2">Kembali ke Pengurus</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updatepengurus/'.$pengurus->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" value="{{ $pengurus->nama }}">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input name="gambar"  class="form-control-file @error('gambar') is-invalid @enderror" type="file" id="gambar"  value="{{$pengurus->gambar }}">
                    @error('gambar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role">Jabatan</label>
                    <input name="role" type="text" class="form-control @error('role') is-invalid @enderror" id="role" value="{{ $pengurus->role}}">
                    @error('role')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="twiter">Twiter </label>
                    <input name="twiter" type="url" class="form-control @error('twiter') is-invalid @enderror" id="twiter" value="{{$pengurus->twiter}}">
                    @error('twiter')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook </label>
                    <input name="facebook" type="url" class="form-control @error('facebook') is-invalid @enderror" id="facebook" value="{{$pengurus->facebook}}">
                    @error('facebook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="google">Google </label>
                    <input name="google" type="url" class="form-control @error('google') is-invalid @enderror" id="google" value="{{$pengurus->google}}">
                    @error('google')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram </label>
                    <input name="instagram" type="url" class="form-control @error('instagram') is-invalid @enderror" id="instagram" value="{{$pengurus->instagram}}">
                    @error('instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark" type="submit">Update Pengurus</button>
            </form>
        </div>
    </div>
</div>
@endsection
