@extends('layouts.admin')

@section('tambah')
<div class="container">

    <div class="card mt-3">
        <div class="card-header">
            <h1>Data Keluarga {{ $jemaat->namakeluarga }}</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Nama Ayah</th>
                        <td>{{ $keluarga->first()->namaayah }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Ibu</th>
                        <td>{{ $keluarga->first()->namaibu }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Anak</th>
                        <td>
                            <ul class="list-unstyled mb-0">
                                @foreach($keluarga as $item)
                                    <li>{{ $item->namaanak }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
