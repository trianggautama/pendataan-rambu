@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">

    <section class="content">
    <div class="box">
            <div class="box-header">
            <h3 class="box-title">Data Kelurahan pada  kecamatan {{$kecamatan->nama_kecamatan}}</h3>
              <a href="#" class="btn btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Kelurahan</th>
                  <th>Nama Kelurahan</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($kelurahan as $kel)
                <tr>
                  <td>{{$kel->id}}</td>
                  <td>{{$kel->nama_kelurahan}}</td>
                  <td class="text-center"> 
                      <a href=" {{route('kelurahan-detail', ['id' => IDCrypt::Encrypt( $kel->id)])}}" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
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
