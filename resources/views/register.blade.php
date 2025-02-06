@extends('layouts.login')

@section('content')

<div class="container bg-white">
    <div class="row justify-content-center">
        <div class="col-m-15">
            <div class="form-container p-5 rounded shadow fade-in">
                <h2 class="text-center text-dark"><i class="fa-solid fa-right-to-bracket" style="font-size:30px"></i> Registrasi Admin</h2>
                <hr>
                <form action="/admin/register" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="username" class="mb-1"><i class="fa-solid fa-user" style="font-size:15px"></i> Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="mb-1"><i class="fa-solid fa-key" style="font-size:15px"></i> Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
