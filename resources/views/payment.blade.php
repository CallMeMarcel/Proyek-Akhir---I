@extends('layouts.admin')

@section('tambah')



@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
$(document).on('click', '.delete', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var file = $(this).data('file');
    Swal.fire({
        title: 'Hapus file : ' + file + '?',
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
                url: "/admin/hapuspayment/" + id,
                type: "POST",
                data: {
                    _method: 'DELETE',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire(
                        'Terhapus!',
                        file + ' telah terhapus.',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat menghapus ' + file,
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

    <h1 class="display-2 mb-5"><i class="fa-solid fa-clipboard-list" style="font-size:80px"></i> Jadwal & Keuangan</h1>


    <table class="table">
        <thead>
            <tr>
                <th>File</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allPayment as $payment)
            <tr>
                <td> <a href="{{ asset('asset/file/' . $payment->file) }}" target="_blank">{{ $payment->file }}</a></td>
            <!-- <td>{{ asset('asset/file/'.$payment->gambar) }}</td> -->
            
                <td>{{$payment->tanggal}}</td>

                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ url('/admin/editpayment/'.$payment->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-dark ml-2 delete" data-file="{{ $payment->file }}" data-id="{{ $payment->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach

            <td colspan="4">
            <div class="container d-flex justify-content-center">
                    <a href="{{url('admin/tambahpayment')}}" class="btn text-center mb-2" style="background-color:#a0c434;">Tambah Jadwal</a>
                </div>
            </td>
        </tbody>
    </table>
    
    <hr>

<h2 class="mt-5">File yang Sudah Diunggah</h2>
<ul>
    @foreach($allPayment as $payment)
        <li>
            
            <a href="{{ asset('asset/file/' . $payment->file) }}" download>{{ $payment->file }}</a> <!-- Link untuk mengunduh file -->
        </li>
    @endforeach
</ul>
</div>

</div>

@endsection
