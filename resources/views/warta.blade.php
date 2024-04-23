@extends('layouts.admin')

@section('tambah')

<div class="container">

    <h1 class="display-2 mb-5"><i class="fa-solid fa-clipboard" style="font-size:80px"></i> Warta Jemaat</h1>


    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allWarta as $warta)
            <tr>
                <td>{{$warta->judul}}</td>
                <td>{{$warta->deskripsi}}</td>
                <td>{{$warta->formattedCreatedAt}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/admin/editwarta/'.$warta->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ url('/admin/hapuswarta/'.$warta->id) }}" method="post">
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
