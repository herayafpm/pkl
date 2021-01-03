@extends('admin/layout/main')
@section('container')
<div class="card card-dark">
  <div class="card-header">
    <h3 class="card-title text-bold">Detail Pengguna</h3>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-lg-2">Desa</div>
      <div>:</div>
      <div class="col-lg-9">{{$pengguna->desa}}</div>
    </div>
    <div class="row">
      <div class="col-lg-2">Kecamatan</div>
      <div>:</div>
      <div class="col-lg-9">{{$pengguna->kecamatan}}</div>
    </div>
    <div class="row">
      <div class="col-lg-2">Nama</div>
      <div>:</div>
      <div class="col-lg-9">{{$pengguna->nama}}</div>
    </div>
    <div class="row">
      <div class="col-lg-2">NIK</div>
      <div>:</div>
      <div class="col-lg-9">{{$pengguna->nik}}</div>
    </div>
    <div class="row">
      <div class="col-lg-2">Email</div>
      <div>:</div>
      <div class="col-lg-9">{{$pengguna->email}}</div>
    </div>
    <div class="row">
      <div class="col-lg-2">No Telp</div>
      <div>:</div>
      <div class="col-lg-9">{{$pengguna->no_telp}}</div>
    </div>
    <div class="row">
      <div class="col-lg-2">Alamat</div>
      <div>:</div>
      <div class="col-lg-9">{{$pengguna->alamat}}</div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-2"> <button class="btn btn-primary" onclick="window.history.back()"><i class="fa fa-chevron-left mr-3"></i>Kembali</button></div>
    </div>
  </div>

  <div class="card-footer">

  </div>
</div>
@endsection