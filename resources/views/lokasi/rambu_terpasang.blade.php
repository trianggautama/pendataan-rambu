@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Data Lokasi Rambu Terpasang
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data</h3>
            <a href="{{route('rambu-terpasang-tambah')}}" class="btn btn-warning pull-right" style="margin-left:5px;"><i class="fa fa-plus"></i> tambah data </a>
              <a href="{{route('laporan-rambu-terpasang')}}" class="btn btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table  table-hover">
                <thead>
                <tr>
                  <th>Nama Rambu</th>
                  <th>Jenis</th>
                  <th class="text-center">Tahun APBN</th>
                  <th>Alamat</th>
                  <th>kelurahan</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($lokasi_rambu as $lr)
                      
                <tr>
                  <td>{{$lr->rambu->nama_rambu}}</td>
                  <td>{{$lr->rambu->jenis->nama_jenis}}</td>
                <td class="text-center">{{$lr->apbn}}</td>
                  <td>{{$lr->alamat}}</td>
                  <td>{{$lr->kelurahan->nama_kelurahan}}</td>
                  <td class="text-center">
                   <a href="{{route('rambu-terpasang-ubah', ['id' => $lr->id ])}}" class="btn btn-sm btn-success"> Terpasang</a>
                  <a href="{{route('rambu-terpasang-edit', ['id' => $lr->id ])}}" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
                  <a href="{{route('lokasi-rambu-hapus',['id'=>$lr->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini ?')"> <i class=" fa fa-trash"></i></a>
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
