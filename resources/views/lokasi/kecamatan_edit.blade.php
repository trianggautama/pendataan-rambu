
@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
        <hr>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content" style="margin:0 15% 0 15%;">
    <form  method="post" action="">
    {{method_field('PUT') }}
    {{ csrf_field() }}
 <div class="form-group">
 <p>Nama</p>
   <input type="text" name="nama_kecamatan"  class="form-control" value="{{$kecamatan->nama_kecamatan}}"/>
 </div>

  <div class="text-right">
  <a href="{{ route('jenis-rambu-index') }}" class="btn btn-warning" style="color:white;">  <i class="fa fa-arrow-circle-left"></i> Kembali</a>
    <input class="btn btn-primary" type="submit" name="submit" value="Ubah">
    {{csrf_field() }}   
  </div>
</div>

</form>
    </div>
    <!-- /.content -->
  </div>
@endsection
