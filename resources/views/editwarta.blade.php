@extends ('layouts.admin')

@section('tambah')
<div class="container">
    <a href="{{ url('/admin/warta') }}" class="btn btn-warning m-2">Kembali ke Warta Jemaat</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('admin/updatewarta/'.$warta->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">file :</label>
                    <input  name="file" type="file" id="file"  value="{{ $warta->file }}">
                   
                    @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" value="{{ $warta->tanggal }}">
                    @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark" type="submit">Update Warta Jemaat</button>
            </form>
        </div>
    </div>
</div>
@endsection