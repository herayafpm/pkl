@extends('admin/layout/main')
@section('container')

<div class="row">
  <div class="col-12">
    <div class="card card-dark">
      <div class="card-header">
        <h3 class="card-title text-bold">Data Pengguna {{$title}}</h3>
      </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        @endif
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr style="text-align: center;">
              <th>No</th>
              <th>Desa</th>
              <th>Kecamatan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($penggunas as $item)
            <tr style="text-align: center;">
              <td>
                <div class="my-2">{{$loop->iteration}}</div>
              </td>
              <td>
                <div class="my-2">{{$item->desa}}</div>
              </td>
              <td>
                <div class="my-2">{{$item->kecamatan}}</div>
              </td>
              <td>
                <div class="row" style="width: 150px; margin:0 auto;">
                  @if($item->status == 0)
                  <div class="col-md-4 my-2">
                    <a href="{{url('admin/pengguna/'.$item->id.'/verif')}}">
                      <i class="fa fa-check" style="background-color:#343a40; color:white; padding:5px; border-radius:5px; "></i>
                    </a>
                  </div>
                  @endif
                  <div class="col-md-4 my-2">
                    <a href="{{url('admin/pengguna/'.$item->id.'/show')}}">
                      <i class="fa fa-eye" style="background-color:#343a40; color:white; padding:5px; border-radius:5px; "></i>
                    </a>
                  </div>
                  <div class="col-md-4 my-2">
                    <a href="{{url('admin/pengguna/'.$item->id.'/edit')}}">
                      <i class="fa fa-pen" style="background-color:#343a40; color:white; padding:5px; border-radius:5px; "></i>
                    </a>
                  </div>
                  <div class="col-md-4 my-2">
                    <a href="{{url('admin/pengguna/'.$item->id.'/delete')}}">
                      <i class="fa fa-trash" style="background-color:#343a40; color:white; padding:5px; border-radius:5px; "></i>
                    </a>
                  </div>
                </div>
              </td>
              @endforeach
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        {{$penggunas->links()}}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection