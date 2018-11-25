@extends('layouts.app')

@section('content')
<div >
    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Data Lokasi Kebutuhan Rambu 
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
            <a href="{{route('kebutuhan-rambu-tambah')}}" class="btn btn-success pull-right" style="margin-left:5px;"><i class="fa fa-plus"></i> tambah data </a>
              <a href="{{route('laporan-kebutuhan-rambu')}}" class="btn btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
            </div>
           
            <div class="box-body">
                <kebutuhan>

                </kebutuhan>
           
            </div>
         
      
    </section>
    <!-- /.content -->
    </div>
  </div>
    <!-- /.content-wrapper -->
  
@endsection
