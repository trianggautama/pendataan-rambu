@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">

    <section class="content">
    <div class="box">
            <div class="box-header">
            <h3 class="box-title">Tabel Data kecamatan {{$kecamatan->nama_kecamatan}}</h3>
              <a href="#" class="btn btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Jenis Rambu</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($kelurahan as $kel)
                <tr>
                  <td>{{$kel->kode_rambu}}</td>
                  <td>{{$kel->nama_rambu}}</td>
                  <td class="text-center"> 
                    <a href="#" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
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
