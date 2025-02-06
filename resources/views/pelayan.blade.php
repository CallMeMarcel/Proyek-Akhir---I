@extends('layouts.admin')

@section('tambah')


@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
$(document).on('click', '.delete', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var tanggal = $(this).data('tanggal');
    Swal.fire({
        title: 'Hapus Pelayan Pada Tanggal ' + tanggal + '?',
        text: "Anda tidak akan dapat mengembalikan ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
        showLoaderOnConfirm: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/admin/hapuspelayan/" + id,
                type: "POST",
                data: {
                    _method: 'DELETE',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire(
                        'Terhapus!',
                        tanggal + ' telah terhapus.',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat menghapus ' + tanggal,
                        'error'
                    );
                    console.log(xhr.responseText); // Debugging: Log error response
                }
            });
        }
    });
});
</script>
@endpush
<div class="container">
    <h1 class="display-2 mb-5"><i class="fa-solid fa-clipboard" style="font-size:80px"></i> Pelayan Ibadah</h1>
    @foreach ($allPelayan as $pelayan)   
    <table class="table">
        <thead>
            <tr>
                <td>Tanggal :</td>
                <td>{{$pelayan->tanggal}}</td>
            </tr>
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
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-dark ml-2 delete" data-tanggal="{{ $pelayan->tanggal }}" data-id="{{ $pelayan->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
        
        @endforeach
        <td colspan="2">
                <div class="container d-flex justify-content-center">
                    <a href="{{url('admin/tambahpelayan')}}" class="btn text-center mb-2" style="background-color:#a0c434;">Tambah Pelayan</a>
                </div>
            </td>
        </thead>
    </table>
</div>
@endsection
