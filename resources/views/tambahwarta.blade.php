@extends('layouts.admin')

@section('tambah')
<div class="container ">
    <h1>Warta Jemaat</h1>
    <form action="/admin/tambahwarta" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" required>
      </div>
      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-warning"><i class="fa-solid fa-plus"></i></button>
    </form>
  </div>
@endsection