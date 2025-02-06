@extends('layouts.admin')

@section('tambah')

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
$(document).on('click', '.delete', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var name = $(this).data('name');
    Swal.fire({
        title: 'Hapus ' + name + '?',
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
                url: "/admin/hapusjemaat/" + id,
                type: "POST",
                data: {
                    _method: 'DELETE',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire(
                        'Terhapus!',
                        name + ' telah terhapus.',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat menghapus ' + name,
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
    <h1 class="display-2 mb-5"><i class="fa-solid fa-group" style="font-size:80px;"></i> Data Jemaat</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Keluarga</th>
                <th>Lingkungan</th>
                <th>alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allJemaat as $item)
            <tr>
            <td>{{ $item->namakeluarga }}</td>
                    <td>{{ $item->sektor }}</td>
                    <td>{{ $item->alamat }}</td>
                <td>
                    <div class="btn-group" role="group">
                    <a href="{{ url('/admin/viewjemaat/'.$item->id) }}" class="btn btn-light ml-2"><i class="fa-regular fa-eye"></i></a>
                        <a href="{{ url('/admin/editjemaat/'.$item->id) }}" class="btn btn-warning ml-2">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-dark ml-2 delete" data-name="{{ $item->nama }}" data-id="{{ $item->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="7">
                    <div class="container d-flex justify-content-center">
                        <a href="{{ url('admin/tambahjemaat') }}" class="btn text-center mb-2" style="background-color:#a0c434;">Tambah Jemaat</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
