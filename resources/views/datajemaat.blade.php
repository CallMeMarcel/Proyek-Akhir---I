@extends('layouts.admin')

@section('tambah')

<div class="container">

        <h1 class="display-2 mb-5"><i class="fa-solid fa-people-roof" style="font-size:80px;"> </i> Data Jemaat</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allJemaat as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenisKelamin }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ url('/admin/editjemaat/'.$item->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ url('/admin/hapusjemaat/'.$item->nama) }}" method="post">
                             @csrf
                            <button type="submit" class="btn btn-dark ml-2"><i class="fa-solid fa-trash"></i></button>
                        </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection



      