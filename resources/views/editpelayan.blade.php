@extends('layouts.admin')

@section('tambah')
<div class="container">
    <a href="{{ url('/admin/pelayan') }}" class="btn btn-warning m-2">Kembali ke Pelayan Ibadah</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updatepelayan/'.$pelayan->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="khotbah">Pengkhotbah :</label>
                    <input name="khotbah" type="text" class="form-control @error('khotbah') is-invalid @enderror" id="khotbah" placeholder="Masukkan Nama ..." value="{{ $pelayan->khotbah }}">
                    @error('khotbah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="liturgis">Liturgis :</label>
                    <input name="liturgis" type="text" class="form-control @error('liturgis') is-invalid @enderror" id="liturgis" placeholder="liturgis" value="{{ $pelayan->liturgis }}">
                    @error('liturgis')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="warta">Warta :</label>
                    <input name="warta" type="text" class="form-control @error('warta') is-invalid @enderror" id="warta" placeholder="warta" value="{{ $pelayan->warta }}">
                    @error('warta')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="persembahan">Persembahan</label>
                    <input name="persembahan" type="text" class="form-control @error('persembahan') is-invalid @enderror" id="persembahan" placeholder="persembahan" value="{{ $pelayan->persembahan }}">
                    @error('persembahan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="organis">Organis :</label>
                    <input name="organis" type="text" class="form-control @error('organis') is-invalid @enderror" id="organis" placeholder="organis" value="{{ $pelayan->organis }}">
                    @error('organis')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="song">Song Leaders:</label>
                    <input name="song" type="text" class="form-control @error('song') is-invalid @enderror" id="song" placeholder="song" value="{{ $pelayan->song }}">
                    @error('song')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="multimedia">Media </label>
                    <input name="multimedia" type="text" class="form-control @error('multimedia') is-invalid @enderror" id="multimedia" placeholder="multimedia" value="{{ $pelayan->multimedia }}">
                    @error('multimedia')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="doa">Doa Syafaat</label>
                    <input name="doa" type="text" class="form-control @error('doa') is-invalid @enderror" id="doa" placeholder="doa" value="{{ $pelayan->doa }}">
                    @error('doa')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark" type="submit">Update Jemaat</button>
            </form>
        </div>
    </div>
</div>
@endsection