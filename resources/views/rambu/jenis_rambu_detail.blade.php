@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">

    <section class="content">
    <div class="box">
            <div class="box-header">
            <h3>Tabel Data Rambu {{$jenis_rambu->nama_jenis}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Jenis Rambu</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($rambu as $r)
                <tr>
                  <td>{{$r->kode_rambu}}</td>
                  <td>{{$r->nama_rambu}}</td>
                  <td class="text-center"> 
                    <a href="{{route('rambu-detail', ['id' => IDCrypt::Encrypt( $r->id)])}}" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
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
