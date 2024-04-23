@extends ('layouts.admin')

@section('tambah')
<div class="container">
    <a href="{{ url('/admin/warta') }}" class="btn btn-warning m-2">Kembali ke Warta Jemaat</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updatewarta/'.$warta->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul :</label>
                    <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukkan judul" value="{{ $warta->judul }}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">deskripsi :</label>
                    <input name="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" value="{{ $warta->deskripsi }}">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark" type="submit">Update Warta Jemaat</button>
            </form>
        </div>
    </div>
</div>
@endsection