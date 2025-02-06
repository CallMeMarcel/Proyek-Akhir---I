@extends('layouts.admin')

@section('tambah')

<div class="container">
    <a href="{{ url('/admin/berita') }}" class="btn btn-warning m-2">Kembali ke Berita</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updateberita/'.$berita->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="judul" value="{{ $berita->judul }}">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="aktor">Aktor</label>
                    <input name="aktor" type="text" class="form-control @error('aktor') is-invalid @enderror" id="aktor" value="{{ $berita->aktor}}">
                    @error('aktor')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="link">link</label>
                    <input name="link" type="url" class="form-control @error('link') is-invalid @enderror" id="link" value="{{ $berita->link}}">
                    @error('link')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi </label>
                    <textarea name="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi">{{$berita->deskripsi}}</textarea>
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input name="gambar"  class="form-control-file @error('gambar') is-invalid @enderror" type="file" id="gambar"  value="{{$berita->gambar }}">
                    @error('gambar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" value="{{ $berita->tanggal }}">
                    @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark" type="submit">Update Berita</button>
            </form>
        </div>
    </div>
</div>
@endsection
