@extends('layouts.admin')

@section('tambah')
    <div class="container">
        <h1 class="display-2 mb-5"><i class="fa-solid fa-clipboard" style="font-size:80px"></i> Form Persembahan</h1>

        <form action="/admin/tambahpayment" method="POST">
            @csrf
            <div class="mb-3">
                <label for="persembahan" class="form-label">Persembahan:</label>
                <select class="form-select" id="persembahan" name="persembahan" required>
                    <option value="weekly">Weekly</option>
                    <option value="daily">Daily</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal:</label>
                <input type="number" step="0.01" class="form-control" id="nominal" name="nominal" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="accepted">Accepted</option>
                    <option value="not accepted">Not Accepted</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning "><i class="fa-solid fa-plus"></i></button>
        </form>
    </div>
@endsection
