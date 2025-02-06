@extends('layouts.admin')
@section('tambah')

<div class="container">
    <h1 class="text-center">Tambah Pengurus</h1>
    
<form action="/admin/tambahpengurus" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3">
        <label for="nama"class="form-label">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar:</label>
        <input type="file"  id="gambar" name="gambar" required>
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role:</label>
        <input type="text" class="form-control" id="role" name="role" required>
    </div>
    <div class="mb-3">
        <label for="twiter" class="form-label">Twitter:</label>
        <input type="url" class="form-control" id="twiter" name="twiter" >
    </div>
    <div class="mb-3">
        <label for="facebook" class="form-label">Facebook:</label>
        <input type="url" class="form-control" id="facebook" name="facebook" >
    </div>
    <div class="mb-3">
        <label for="google" class="form-label">Google:</label>
        <input type="url" class="form-control" id="google" name="google">
    </div>
    <div class="mb-3">
        <label for="instagram" class="form-label">Instagram:</label>
        <input type="url" class="form-control" id="instagram" name="instagram">
    </div>
    <button type="submit" class="btn btn-warning">Tambah Pengurus</button>
</form>
</div>

@endsection