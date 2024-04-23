@extends('layouts.admin')

@section('tambah')

<div class="container">

    <h1 class="display-2 mb-5"><i class="fa-solid fa-camera-retro" style="font-size:80px"></i> Galeri</h1>


    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
            @foreach ($allGaleri as $galeri)
            
            <tr>
            <td scope="item"><?= $i ?></td>
                <td><img src="{{ asset('asset/images/'.$galeri['gambar']) }}" class="card-img-top" alt="{{ $galeri->gambar }}"  style="border-radius: 10px; width: 20em; height:20em"></td>
                <td>{{$galeri->deskripsi}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/admin/editgaleri/'.$galeri->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ url('/admin/hapusgaleri/'.$galeri->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-dark ml-2"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>

</div>

@endsection