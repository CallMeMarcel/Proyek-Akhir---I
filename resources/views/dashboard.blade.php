@extends('layouts.admin')

@section('tambah')
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .card {
            margin-top: 2em;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            background-color: #f9f9f9;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            background-color: black;
            color: white;
        }

        .card p {
            overflow: hidden; /* Menghindari teks muncul sebelum dihover */
            white-space: nowrap; /* Menghindari teks pindah ke baris berikutnya */
            margin: 0; /* Menghapus margin bawaan */
            animation: typing 1s steps(40, end) forwards; /* Animasi teks */
        }

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        .btn:hover {
            background-color: white;
            color: black;
            transition: background-color 0.3s ease;
        }
    </style>

    <div class="card-container">
        <div class="card text mb-3 fade-in">
            <div class="card-header"><b>Data Jemaat</b></div>
            <div class="card-body">
                <i class="fa-solid fa-people-roof" style="font-size:50px;"> </i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facere facilis fuga, numquam at provident!</p>
                <a href="/admin/datajemaat" class="btn btn-warning">More Details</a>
            </div>
        </div>

        <div class="card text mb-3">
            <div class="card-header"><b>Warta Jemaat</b></div>
            <div class="card-body">
                <i class="fa-solid fa-clipboard" style="font-size:50px"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, optio.</p>
                <a href="/admin/warta" class="btn btn-warning">More Details</a>
            </div>
        </div>

        <div class="card text mb-3">
            <div class="card-header"><b>Pelayan Ibadah</b></div>
            <div class="card-body">
                <i class="fa-solid fa-calendar-check" style="font-size:50px"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, consectetur.</p>
                <a href="/admin/pelayan" class="btn btn-warning">More Details</a>
            </div>
        </div>

        <div class="card text mb-3">
            <div class="card-header"><b>Keuangan</b></div>
            <div class="card-body">
                <i class="fa-solid fa-money-bill-1-wave" style="font-size:50px"></i>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, deserunt?</p>
                <a href="/admin/payment" class="btn btn-warning">More Details</a>
            </div>
        </div>

        <div class="card text mb-3">
            <div class="card-header"><b>Galeri</b></div>
            <div class="card-body">
                <i class="fa-solid fa-camera-retro" style="font-size:50px"></i>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, perferendis.</p>
                <a href="/admin/galeri" class="btn btn-warning">More Details</a>
            </div>
        </div>

        <div class="card text mb-3">
            <div class="card-header"><b>Berita</b></div>
            <div class="card-body">
                <i class="fa-solid fa-radio" style="font-size:50px"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, necessitatibus!</p>
                <a href="/admin/berita" class="btn btn-warning">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
