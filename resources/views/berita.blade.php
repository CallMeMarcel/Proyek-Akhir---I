@extends('layouts.admin')

@section('tambah')


@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
$(document).on('click', '.delete', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var judul = $(this).data('judul');
    Swal.fire({
        title: 'Hapus berita : ' + judul + '?',
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
                url: "/admin/hapusberita/" + id,
                type: "POST",
                data: {
                    _method: 'DELETE',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire(
                        'Terhapus!',
                        judul + ' telah terhapus.',
                        'success'
                    ).then(() => { 
                        location.reload();
                    });

                },

                error: function(xhr) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat menghapus ' + judul,
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

        <h1 class="display-2 mb-5"><i class="fa-solid fa-radio" style="font-size:50px"></i> Berita</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Aktor</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Tanggal</th>
                <th>Link</th>
                
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
                    <td>{{ $berita->link}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ url('/admin/editberita/'.$berita->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-dark ml-2 delete" data-judul="{{ $berita->judul }}" data-id="{{ $berita->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>

                        </div>
                    </td>
                </tr>
            @endforeach
            <td colspan="5">
            <div class="container d-flex justify-content-center">
                    <a href="{{url('admin/tambahberita')}}" class="btn text-center mb-2" style="background-color:#a0c434;">Tambah Berita</a>
                </div>
            </td>
        </tbody>
    </table>
</div>
@endsection



      