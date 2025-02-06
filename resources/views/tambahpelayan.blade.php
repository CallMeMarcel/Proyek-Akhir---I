@extends('layouts.admin')

@section('tambah')

<div class="container">
    <h2 class="mb-4">Pelayan Ibadah</h2>
    <form action="/admin/tambahpelayan" method="POST">
      @csrf
      <div class="mb-3">
        <label for="tanggal"class="form-label">Tanggal :</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>
      <div class="mb-3">
        <label for="pengkhotbah" class="form-label">Pengkhotbah:</label>
        <input type="text" class="form-control" id="pengkhotbah" name="khotbah" required>
      </div>
      <div class="mb-3">
        <label for="liturgis" class="form-label">Liturgis:</label>
        <input type="text" class="form-control" id="liturgis" name="liturgis" required>
      </div>
      <div class="mb-3">
        <label for="warta" class="form-label">Warta :</label>
        <input type="text" class="form-control" id="warta" name="warta" required>
      </div>
      <div class="mb-3">
    <label for="persembahan" class="form-label">Persembahan :</label>
    <textarea class="form-control" id="persembahan" name="persembahan"></textarea>
</div>
      <div class="mb-3">
        <label for="organis" class="form-label">Organis:</label>
        <input type="text" class="form-control" id="organis" name="organis" required>
      </div>
      <div class="mb-3">
        <label for="song_leader" class="form-label">Song Leader:</label>
        <input type="text" class="form-control" id="song" name="song" required>
      </div>
      <div class="mb-3">
        <label for="multimedia" class="form-label">Media:</label>
        <input type="text" class="form-control" id="multimedia" name="multimedia" required>
      </div>
      <div class="mb-3">
        <label for="doa_syafaat" class="form-label">Doa Syafaat:</label>
        <input type="text" class="form-control" id="doa" name="doa" required>
      </div>
      <button type="submit" class="btn btn-warning"><i class="fa-solid fa-plus"></i> Tambah</button>
    </form>
  </div>
@endsection