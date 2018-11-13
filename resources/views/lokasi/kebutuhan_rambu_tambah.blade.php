@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Tambah Lokasi Rambu Terpasang
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box">
            @include('layouts.errors')
            <div class="box-header">
              <h3 class="box-title">Tabel Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                        <form  method="post" action="" >
 
                        <div class="form-group">
                            <p>Rambu</p>
                            <select multiple class="form-control" name="rambu_id" style="height:150px;">
                                @foreach ($rambu as $r)
                                    <option value="{{$r->id}}">{{$r->nama_rambu}}</option>
                                @endforeach  
                                </select>
                        </div>
                        <div class="form-group">
                                <p>Latitude</p>
                                <input type="text" name="lat"  class="form-control" />
                            </div>
                            <div class="form-group">
                                <p>Langitude</p>
                                <input type="text" name="lang"  class="form-control" />
                            </div>                              
                  
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                                <p>Kelurahan</p>
                                <select multiple class="form-control" style="height:150px;" name="kelurahan_id">
                                        @foreach ($kelurahan as $kel)
                                        <option value="{{$kel->id}}">{{$kel->nama_kelurahan}}</option>
                                    @endforeach  
                                    </select>
                            </div>
                            <div class="form-group">
                                 
                                    <input type="hidden" name="status_pasang"  value="0" class="form-control" />
                                </div>    
                            <div class="form-group">
                                    <p>Alamat</p>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat"></textarea>
                                  </div>
                              <div class="text-right">
                                    <a href="{{ route('rambu-terpasang-index') }}"  class="btn btn-warning pull-right" style="margin-left:5px;"><i class="fa fa-arrow-circle-left"></i> Kembali </a>

                                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                                {{csrf_field() }}
                             </div>
                            </form>       
                </div>
            </div>
            </div>
            <!-- /.box-body -->
   

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
@endsection
