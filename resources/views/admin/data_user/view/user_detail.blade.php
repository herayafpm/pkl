@extends('admin/layout/main')
@section('container')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title text-bold">Detail User</h3> 
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col-lg-2">Desa</div>
                <div>:</div>
                <div class="col-lg-9">{{$penggunas->desa}}</div> 
            </div>
            <div class="row">
                <div class="col-lg-2">Kecamatan</div>
                <div>:</div>
                <div class="col-lg-9">{{$penggunas->kecamatan}}</div> 
            </div>
            <div class="row">
                <div class="col-lg-2">Nama</div>
                <div>:</div>
                <div class="col-lg-9">{{$penggunas->nama}}</div> 
            </div>
            <div class="row">
                <div class="col-lg-2">NIK</div>
                <div>:</div>
                <div class="col-lg-9">{{$penggunas->nik}}</div> 
            </div>
            <div class="row">
                <div class="col-lg-2">Email</div>
                <div>:</div>
                <div class="col-lg-9">{{$penggunas->email}}</div> 
            </div>
            <div class="row">
                <div class="col-lg-2">No Telp</div>
                <div>:</div>
                <div class="col-lg-9">{{$penggunas->no_telp}}</div> 
            </div>
            <div class="row">
                <div class="col-lg-2">Alamat</div>
                <div>:</div>
                <div class="col-lg-9">{{$penggunas->alamat}}</div> 
            </div>
            <div class="row mt-5">
                <div class="col-lg-2"> <button class="btn btn-success"><i class="fa fa-pen mr-3"></i>Edit Data</button></div>
                <div class="col-lg-2"> <button class="btn btn-danger"><i class="fa fa-trash mr-3"></i>Hapus Data</button></div>
                <div class="col-lg-2"> <a href="{{url('admin/user')}}"> <button class="btn btn-primary"><i class="fa fa-chevron-left mr-3"></i>Kembali</button> </a></div>
            </div>
        </div>

        <div class="card-footer">
            
        </div>
    </div>
@endsection