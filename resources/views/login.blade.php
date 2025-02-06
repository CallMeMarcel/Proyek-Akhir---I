@extends('layouts.login')

@section('content')


<div class="container bg-white">
  <div class="row justify-content-center">
    <div class="col-m-15">
    <div class="form-container p-5 rounded shadow fade-in">
        <h2 class="text-center text-dark "><i class="fa-solid fa-right-to-bracket" style="font-size:30px"></i> Login</h2>
        <hr>
        <form action="/admin/login" method="POST">
          @csrf
          <div class="form-group mb-3">
            <label for="username" class="mb-1"><i class="fa-regular fa-envelope" style="font-size:15px"></i> Username</label>
            <input type="text" class="form-control" name="username" id="username">
            @error('username')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group mb-3">
            <label for="password" class="mb-1"><i class="fa-solid fa-key" style="font-size:15px"></i> Password</label>
            <input type="password" class="form-control" name="password" id="password">
            @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-warning btn-block">Login</button>
        </form>
        <div class="bottom-text text-center mt-3">
          <p> Not an Admin? <a href="/" class="text-warning" style="text-decoration:none;">back  </a><i class="fa-regular fa-face-tired"></i></p>
        </div>
      </div>
    </div>
  </div>
</div>

  
@endsection