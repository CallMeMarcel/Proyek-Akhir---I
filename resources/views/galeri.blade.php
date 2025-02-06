@extends('layouts.admin')

@section('tambah')


@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
$(document).on('click', '.delete', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var gambar = $(this).data('gambar');
    Swal.fire({
        title: 'Hapus Gambar : ' + gambar + '?',
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
                url: "/admin/hapusgaleri/" + id,
                type: "POST",
                data: {
                    _method: 'DELETE',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire(
                        'Terhapus!',
                        gambar + ' telah terhapus.',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat menghapus ' + gambar,
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
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-dark ml-2 delete" data-gambar="{{ $galeri->gambar }}" data-id="{{ $galeri->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
            <td colspan="4">
            <div class="container d-flex justify-content-center">
                    <a href="{{url('admin/tambahgaleri')}}" class="btn text-center mb-2" style="background-color:#a0c434;">Tambah Galeri</a>
                </div>
            </td>
        </tbody>
    </table>

</div>

@endsection