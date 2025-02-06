@extends('layouts.admin')

@section('tambah')
<div class="container">
  <h2 class="mb-4">Tambah Galeri</h2>
  <form action="/admin/tambahgaleri" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" class="form-control-file" id="gambar" name="gambar">
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</div>

@endsection
