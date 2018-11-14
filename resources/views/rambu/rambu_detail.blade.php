@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Jenis Rambu
        <small>yang ada di kota Banjarbaru</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">

<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary"  width:260px;">
      <div class="box-body box-profile">
      <img class=" img-responsive "  style="width:" src="/images/rambu/{{$rambu->gambar}}"  >
      <h3 class="profile-username text-center">{{ $rambu->nama_rambu}}</h3>

      <p class="text-muted text-center">{{$rambu->jenis->nama_jenis}}</p>


      <a href="#" class="btn btn-primary btn-block"><b>{{$rambu->kode_rambu}}</b></a>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>
  <!-- /.col -->
  <div class="col-md-9" >
    <div class="box">
    <div class="nav-tabs-custom" style="height:350px;">
      <ul class="nav nav-tabs" style="padding-right:7px; padding-top:5px">
        <li ><a href="#activity" data-toggle="tab">Keterangan</a></li>
        <li><a href="#settings" data-toggle="tab">Edit Data </a></li>
      <a href="{{ route('rambu-index') }}" class="btn btn-bg btn-warning pull-right" stye="margin-top:3px;"><i class="fa fa-sign-out"></i> back</a>
      </ul>
      <div class="tab-content" >
        <div class="active tab-pane" style="padding:10px;" id="activity">

      <h4>{{$rambu->keterangan}}</h4>
        </div>

        <div class="tab-pane" id="settings">
          <form class="form-horizontal"  method="post" action="">
              {{method_field('PUT') }}
              {{ csrf_field() }}
            <div class="form-group">
              <div class="col-sm-12">
              <input type="text" name="kode_rambu" class="form-control" id="inputName" value="{{$rambu->kode_rambu}}">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
              <input type="text" name="nama_rambu" class="form-control" id="inputName" value="{{$rambu->nama_rambu}}">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
              <textarea name="keterangan" id="" cols="125" rows="5" style="padding:10px;">{{$rambu->keterangan}}"</textarea>
              </div>
            </div>
           
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-info " style="margin-left:3px;">Ubah</button>
                {{csrf_field() }}

              </div>
            </div>
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
</div>
  <!-- /.col -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->
    <!-- Main content -->
    <section class="content">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lokasi Rambu</h3>
              <a href="#" class="btn btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kelurahan</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($lokasi_rambu as $lr)
                  <tr>
                  <td>{{$lr->kelurahan->nama_kelurahan}}</td>
                  <td>{{$lr->alamat}}</td>
                  <td>
                    @if ($lr->status_pasang == 0)
                      <a href="#" class="btn btn-primary"> tidak terpasang</a>
                    @else
                        <a href="#" class="btn btn-success"> terpasang</a>
                    @endif
                  </td>
                      <td class="text-center"> 
                      <a href="#" class="btn btn-sm btn-info"> <i class=" fa fa-eye"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"> <i class=" fa fa-trash"></i></a>
    
                      </td>
                    </tr> 
                  @endforeach
             
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
              
  
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
@endsection
