@extends('user/layout/main')
@section('title', 'Cek Desa')
@section('customcss')
<link rel="stylesheet" href="{{ asset('css/user/cek_nik/style.css') }}">
@endsection
@section('container')
<div class="form-box">
  <div class="tittle-form">
    <h4>Cek NIK</h4>
  </div>
  @if ($message = Session::get('sukses'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
  @endif


  <form action="" method="GET">
    <div class="form-group">
      <label for="nik">Masukan NIK Anda</label>
      <input type="text" class="form-control" id="nik" name="nik" value="{{old('nik')}}" style="width: 300px;">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Cek</button>
  </form>
</div>

@endsection