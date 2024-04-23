@extends('layouts.admin')

@section('tambah')
<div class="container">
  <h2 class="mb-4">Tambah Data Jemaat Gereja</h2>
  <form action="/admin/tambahjemaat" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama:</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Umur:</label>
      <input type="text" class="form-control" id="umur" name="umur" required>
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Jenis Kelamin:</label>
      <select class="form-select" id="jenisKelamin" name="jenisKelamin" required>
        <option value="laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Alamat:</label>
      <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-warning"><i class="fa-solid fa-plus"></i></button>
  </form>
</div>

@endsection
