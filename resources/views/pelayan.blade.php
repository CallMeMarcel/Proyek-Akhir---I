@extends('layouts.admin')

@section('tambah')
<div class="container">
    <h1 class="display-2 mb-5"><i class="fa-solid fa-clipboard" style="font-size:80px"></i> Pelayan Ibadah</h1>
    @foreach ($allPelayan as $pelayan)   
    <table class="table">
        <thead>
            
            <tr>
                <td><b>Pengkhotbah :</b></td>
                
   
                <td>{{$pelayan->khotbah}}</td>
   
                
            </tr>
            
            <tr>
            <td><b>Liturgis :</b></td>
                <td>{{$pelayan->liturgis}}</td>
            </tr>
        
            <tr>
            <td><b>Warta :</b></td>
                <td>{{$pelayan->warta}}</td>
            </tr>
            <tr>
            <td><b>Persembahan :</b></td>
                <td>{{$pelayan->persembahan}}</td>
            </tr>
            <tr>
            <td><b>Organis :</b></td>
                <td>{{$pelayan->organis}}</td>
            </tr>
            <tr>
            <td><b>Song Leaders:</b></td>
                <td>{{$pelayan->song}}</td>
            </tr>
            <tr>
            <td><b>Media :</b></td>
                <td>{{$pelayan->multimedia}}</td>
            </tr>
            <tr>
            <td><b>Doa Syafaat :</b></td>
                <td>{{$pelayan->doa}}</td>
            </tr>
            <tr>
                <th>Action</th>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/admin/editpelayan/'.$pelayan->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ url('/admin/hapuspelayan/'.$pelayan->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-dark ml-2"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        </thead>
        @endforeach
    </table>
</div>
@endsection
