@extends('user/layout/main')
@section('title', 'Login')
@section('customcss')
<link rel="stylesheet" href="{{ asset('css/user/registrasi/style.css') }}">
@endsection
@section('container')
<div class="form-box">
  <div class="tittle-form">
    <h4>Login</h4>
  </div>


  <form action="" method="post">
    @csrf
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" value="{{old('username')}}" style="width: 300px;">
      @error('username')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" style="width: 300px;">
      @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
@endsection