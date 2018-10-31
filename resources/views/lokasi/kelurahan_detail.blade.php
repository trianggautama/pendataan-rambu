@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">

    <section class="content">
    <div class="box">
            <div class="box-header">
            <h3 class="box-title"> Data rambu pada kelurahan {{$kelurahan->nama_kelurahan}}</h3>
              <a href="#" class="btn btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Jenis Rambu</th>
                  <th>Nama Rambu</th>
                  <th>Alamat </th>
                  <th>Status</th>

                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>     
                  @foreach ($lokasi_rambu as $lr)
                  <tr>
                  <td>{{$lr->rambu->jenis->nama_jenis}}</td>
                  <td>{{$lr->rambu->nama_rambu}}</td>
                  <td>{{$lr->alamat}}</td>
                  <td>
                      @if ($lr->status_pasang == 0)
                        <a href="#" class="btn btn-primary"> tidak terpasang</a>
                      @else
                          <a href="#" class="btn btn-success"> terpasang</a>
                      @endif
                    </td>
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
