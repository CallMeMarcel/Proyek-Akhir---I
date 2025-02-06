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
                url: "/admin/hapuspengurus/" + id,
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

    <h1 class="display-2 mb-5"><i class="fa-solid fa-clipboard" style="font-size:80px"></i> Pengurus</h1>


    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>Gambar</th>
                <th>Jabatan</th>
                <th>Twiter</th>
                <th>Facebook</th>
                <th>Google</th>
                <th>Instagram</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($allPengurus as $pengurus)
            <?php $i = 1; ?>
            <tr>
                <td><?= $i ?></td>
                <td>{{$pengurus->nama}}</td>
                <td><img src="{{asset('asset/images/'.$pengurus['gambar']) }}" class="card-img-top" alt="{{ $pengurus->gambar }}"  style="border-radius: 10px; width: 20em; height:20em"></td>
                <td>{{$pengurus->role}}</td>
                <td>{{$pengurus->twiter}}</td>
                <td>{{$pengurus->facebook}}</td>
                <td>{{$pengurus->google}}</td>
                <td>{{$pengurus->instagram}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/admin/editpengurus/'.$pengurus->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-dark ml-2 delete" data-name="{{ $pengurus->nama }}" data-id="{{ $pengurus->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
            <td colspan="8">
            <div class="container d-flex justify-content-center">
                    <a href="{{url('admin/tambahpengurus')}}" class="btn text-center mb-2" style="background-color:#a0c434;">Tambah Pengurus</a>
                </div>
            </td>
        </tbody>
    </table>

</div>


@endsection