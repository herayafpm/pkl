@extends('user/layout/main')
@section('title', 'Registrasi')
@section('customcss')
<link rel="stylesheet" href="{{ asset('css/user/registrasi/style.css') }}">
@endsection
@section('container')
<div class="form-box">
    <div class="tittle-form">
        <h4>Registrasi</h4>
    </div>


    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label>Desa</label>
            <input type="text" name="desa" class="form-control @error('desa') is-invalid @enderror" value="{{old('desa')}}" style="width: 300px;">
            @error('desa')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" value="{{old('kecamatan')}}" style="width: 300px;">
            @error('kecamatan')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama')}}" style="width: 300px;">
            @error('nama')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{old('nik')}}" style="width: 300px;">
            @error('nik')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" style="width: 300px;">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>No Telp (WA)</label>
            <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{old('no_telp')}}" style="width: 300px;">
            @error('no_telp')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" style="width:400px;">{{old('alamat')}}</textarea>
            </div>
            @error('alamat')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>


        <br>
        <button type="submit" class="btn btn-primary">Registrasi</button>
    </form>
</div>











@endsection