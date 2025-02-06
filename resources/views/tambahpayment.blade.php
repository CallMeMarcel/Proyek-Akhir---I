@extends('layouts.admin')

@section('tambah')
    <div class="container">
        <h1 class="display-2 mb-5"><i class="fa-solid fa-clipboard" style="font-size:80px"></i> Tambah Jadwal</h1>

        <form action="/admin/tambahpayment" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file" class="form-label">File :</label>
                <input type="file" class="form-control-file" id="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-plus"></i> Tambah</button>
        </form>
    </div>
@endsection
