@extends('admin/layout/main')
@section('container')

<div class="row">
    <div class="col-12">
      <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title text-bold">Data user</h3>  
        </div>

        <div class="row mt-3 mx-3 mb-3">
            <div class="col-lg-6">
                <a href=" {{url('admin/user_add')}} ">
                    <button type="button" class="btn btn-success"><i class="fa fa-plus mr-3"></i>Tambah Data</button>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="card-tools float-right">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        
          
 
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr style="text-align: center;">
                <th>No</th>
                <th>Desa</th>
                <th>Kecamatan</th>
                <th>Action</th>
                {{-- <th>Nama</th>
                <th>NIK</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach ($penggunas as $item)
                <tr style="text-align: center;">
                  <td><div class="my-2">{{$loop->iteration}}</div></td>
                  <td><div class="my-2">{{$item->desa}}</div></td>
                  <td><div class="my-2">{{$item->kecamatan}}</div></td>
                  <td>
                    <div class="row" style="width: 150px; margin:0 auto;">
                      <div class="col-md-4 my-2">
                        <a href="{{url('admin/user_detail/'.$item->id)}}">
                          <i class="fa fa-eye" style="background-color:#343a40; color:white; padding:5px; border-radius:5px; "></i>
                        </a>
                      </div>
                      <div class="col-md-4 my-2">
                        <a href="{{url('admin/user_edit/'.$item->id)}}">
                        <i class="fa fa-pen" style="background-color:#343a40; color:white; padding:5px; border-radius:5px; "></i>
                        </a>
                      </div>
                      <div class="col-md-4 my-2">
                        <i class="fa fa-trash" style="background-color:#343a40; color:white; padding:5px; border-radius:5px; "></i>
                      </div>
                    </div>
                  </td>
                  {{-- <td>{{$item->nama}}</td>
                  <td>{{$item->nik}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->no_telp}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->username}}</td>
                  <td>{{$item->password}}</td> --}}
                @endforeach
                </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection