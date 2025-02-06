@extends('layouts.admin')

@section('tambah')

<div class="container">
    <a href="{{ url('/admin/galeri'. $galeri->id) }}" class="btn btn-warning m-2">Kembali ke galeri</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updategaleri/'.$galeri->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input name="gambar" type="file" class="form-control-file  @error('gambar') is-invalid @enderror" id="gambar" value="{{ $galeri->gambar }}">
                    @error('gambar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Aktor</label>
                    <input name="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" value="{{ $galeri->deskripsi}}">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark" type="submit">Update galeri</button>
            </form>
        </div>
    </div>
</div>
@endsection
