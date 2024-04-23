@extends('layouts.admin')

@section('tambah')

<div class="container">

        <h1 class="display-2 mb-5"><i class="fa-solid fa-radio" style="font-size:50px"></i> Berita</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Aktor</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allBerita as $berita)
                <tr>
                    <td>{{ $berita->aktor }}</td>
                    <td>{{ $berita->judul }}</td>
                    <td>{{ $berita->deskripsi }}</td>
                    <td><img src="{{ asset('asset/images/'.$berita['gambar']) }}" class="card-img-top" alt="{{ $berita->gambar }}"  style="border-radius: 10px; width: 10em; height:10em"></td>
                    <td>{{ $berita->tanggal}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ url('/admin/editberita/'.$berita->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ url('/admin/hapusberita/'.$berita->id) }}" method="post">
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



      