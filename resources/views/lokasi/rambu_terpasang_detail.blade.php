@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->
    <section class="content">

<div class="row">
  <div class="col-lg-4 col-md-4 col-xs-12">
    <div class="card">
 
      <div class="card-header d-flex p-0" style="padding:5%!important;">
          <b>Detail Lokasi rambu terpasang</b>
        </div><!-- /.card-header -->
    <!-- Profile Image -->
    <div class="card  text-center " >
      <div class="card-body text-center" style="padding:10px;">
      <img class=" img-responsive" style="width:100%; height:auto" src="{{asset('/images/lokasi_rambu/'.$lokasi_rambu->gambar)}}"  >
      <h4 style="margin-top:18px"><b>Gambar Lokasi</b></h4>
     
    </div>
      <!-- /.box-body -->
     
    <!-- /.box -->
    <div class="button" style="margin-bottom:20px;">
            <a href=" {{route('rambu-terpasang-edit', ['id' => IDCrypt::Encrypt( $lokasi_rambu->id)])}}" class="btn btn-primary"> <i class=" fa fa-edit"></i>edit data</a>
    <a href="{{route('rambu-terpasang-index')}}" class="btn btn-danger"> Kembali</a>
    </div>
</div>
</div>
  </div>
  <!-- /.col -->
  <div class="col-md-8 pull-right col-xs-12" >
    <div class="card">
      <div class="card-header d-flex p-0" style="padding:3%!important;">
       <b>Keterangan</b>
      </div><!-- /.card-header -->
      <div class="card-body" >
        <div class="tab-content p-0">
          <!-- Morris chart - Sales -->
               <p>Kode Rambu  : {{$lokasi_rambu->rambu->nama_rambu}}</p>
               <hr>
               <p>Nama Rambu  : {{$lokasi_rambu->rambu->jenis->nama_jenis}}</p>
               <hr>
               <p>Jenis Rambu : {{$lokasi_rambu->apbn}}</p> 
               <hr>
               <p>Keterangan &nbsp : {{$lokasi_rambu->alamat}}</p>
               <hr>
               <p>Kelurahan &nbsp : {{$lokasi_rambu->kelurahan->nama_kelurahan}}</p>
               <hr>
               <p>latitude &nbsp : {{$lokasi_rambu->lat}}</p>
               <hr>
               <p>langitude &nbsp : {{$lokasi_rambu->lang}}</p>

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
