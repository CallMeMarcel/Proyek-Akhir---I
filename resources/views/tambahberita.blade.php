
@extends('layouts.admin')

@section('tambah')
<div class="container">
  <h2 class="mb-4">Tambah Berita</h2>
  <form action="/admin/tambahberita" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="mb-3">
      <label for="aktor" class="form-label">Aktor</label>
      <input type="text" class="form-control" id="aktor" name="aktor" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" class="form-control-file" id="gambar" name="gambar">
    </div>
    <div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</div>

@endsection
