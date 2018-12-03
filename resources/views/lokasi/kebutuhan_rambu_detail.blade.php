@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
       Lokasi Rambu Terpasang
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">

<div class="row">
  <div class="col-lg-4 col-md-4 col-xs-12">

    <!-- Profile Image -->
    <div class="box box-primary text-center " >
      <div class="box-body box-profile text-center" style="padding:10px;">
        <hr>
      <img class=" img-responsive" style="width:100%; height:auto" src="images/lokasi_rambu/{{$lokasi_rambu->gambar}}"  >
      <h4 style="margin-top:18px"><b>Gambar Lokasi</b></h4>
      </div>
      <!-- /.box-body -->
     
    <!-- /.box -->
    <div class="button" style="margin-bottom:20px;">
            <a href="" class="btn btn-success"> <i class=" fa fa-print"></i> Cetak</a>
            <a href=" {{route('rambu-terpasang-edit', ['id' => IDCrypt::Encrypt( $lokasi_rambu->id)])}}" class="btn btn-primary"> <i class=" fa fa-edit"></i>edit data</a>
    <a href="{{route('rambu-terpasang-index')}}" class="btn btn-danger"> Kembali</a>
    </div>
</div>

  </div>
  <!-- /.col -->
  <div class="col-md-8 pull-right col-xs-12" >
    <div class="card">
      <div class="card-header d-flex p-0" style="padding:0%!important;">
        <ul class="nav nav-pills p-2">
          <li class="nav-item">
            <a class="nav-link " href="#keterangan" data-toggle="tab"><b>Keterangan</b></a>
          </li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body" >
        <div class="tab-content p-0">
          <!-- Morris chart - Sales -->
          <div class=" tab-pane active" id="keterangan"
               style="position: relative; height: 370px;">
               <p>Kode Rambu  : {{$lokasi_rambu->rambu->nama_rambu}}</p>
               <hr>
               <p>Nama Rambu  : {{$lokasi_rambu->rambu->jenis->nama_jenis}}</p>
               <hr>
               <p>Keterangan &nbsp : {{$lokasi_rambu->alamat}}</p>
               <hr>
               <p>Kelurahan &nbsp : {{$lokasi_rambu->kelurahan->nama_kelurahan}}</p>
               <hr>
               <p>latitude &nbsp : {{$lokasi_rambu->lat}}</p>
               <hr>
               <p>langitude &nbsp : {{$lokasi_rambu->lang}}</p>

              </div>
        </div>
      </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
  <!-- /.col -->
</div>
<!-- /.row -->

</section>

    </div>
    <!-- /.content-wrapper -->
  
@endsection
