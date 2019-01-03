@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->
    <section class="content" style="padding-botom:5px !important;">

<div class="row" >
  <div class="col-lg-4 col-md-4 col-xs-12" >

    <!-- Profile Image -->
    <div class="box" >
      <div class="box-body box-profile text-center" style="padding:10px;">
      <img class=" img-responsive" style="width:90%; height:auto" src="/images/rambu/{{$rambu->gambar}}"  >
      <h4 style="margin-top:18px"><b>Gambar Rambu</b></h4>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>
  <!-- /.col -->
  <div class="col-md-8 pull-right col-xs-12" >
    <div class="card">
      <div class="card-header d-flex p-0" style="padding:0%!important;">
        <ul class="nav nav-pills p-2">
          <li class="nav-item">
            <a class="nav-link active" href="#keterangan" data-toggle="tab">Keterangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#edit-data" data-toggle="tab">Edit data</a>
          </li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body" >
        <div class="tab-content p-0">
          <!-- Morris chart - Sales -->
          <div class=" tab-pane active" id="keterangan"
               style="position: relative; height: 255px;">
               <h5>Kode Rambu  : {{$rambu->kode_rambu}}</h5>
               <h5>Nama Rambu  : {{$rambu->nama_rambu}}</h5>
               <h5>Jenis Rambu : {{$rambu->jenis->nama_jenis}}</h5> 
               <h5>Keterangan &nbsp : {{$rambu->keterangan}}</h5>
              </div>
          <div class=" tab-pane" id="edit-data" style="position: relative; height: 265px;">
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
              <textarea name="keterangan"  class="form-control" id="" cols="102" rows="3" style="padding:10px;" >{{$rambu->keterangan}}"</textarea>
              </div>
            </div>
           
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-warning " style="margin-left:3px;">Ubah</button>
                {{csrf_field() }}

              </div>
            </div>
          </form>
          </div>
        </div>
      </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
  <!-- /.col -->
</div>
<!-- /.row -->

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lokasi Rambu</h3>
              <a href="{{route('laporan-rambu-detail', ['id' => IDCrypt::Encrypt( $rambu->id)])}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kelurahan</th>
                  <th>Alamat</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($lokasi_rambu as $lr)
                  <tr>
                  <td>{{$lr->kelurahan->nama_kelurahan}}</td>
                  <td>{{$lr->alamat}}</td>
                  <td class="text-center">
                    @if ($lr->status_pasang == 0)
                      <a href="#" class="btn btn-sm btn-primary"> kebutuhan rambu</a>
                    @else
                        <a href="#" class="btn btn-sm btn-success"> rambu terpasang</a>
                    @endif
                  </td>
                      <td class="text-center"> 
                          @if ($lr->status_pasang == 0)
                          <a href="{{route('kebutuhan-rambu-detail', ['id' => IDCrypt::Encrypt( $lr->id)])}}" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
                        @else
                        <a href="{{route('rambu-terpasang-detail', ['id' => IDCrypt::Encrypt( $lr->id)])}}" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
                        @endif    
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
