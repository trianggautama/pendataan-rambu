@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
  
    <section class="content">
    <div class="box">
        <div class="box-header "style="padding:10px">
            <div class="row" >
              <div class="col-md-6">
                  <div class="title">   
                      <h2  style="margin-bottom:3px;"><b>Data</b> Kebutuhan Rambu</h2>
                     </div>
              </div>     
              <div class="col-md-6"style="margin-top:20px;">
                <div class="button" >
                    <a href="##tambahdata" data-toggle="modal"data-target="#tambahdata" class="btn btn-sm btn-success pull-right" style="margin-left:5px;"><i class="fa fa-plus"></i> tambah data </a>
                    <a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
                    
                </div>
                </div>              
                  </div>
                </div>   
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
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
                   <a href="{{route('rambu-terpasang-ubah', ['id' => IDCrypt::Encrypt( $lr->id)])}}" class="btn btn-sm btn-success"> Terpasang</a>
                  <a href=" {{route('rambu-terpasang-edit', ['id' => IDCrypt::Encrypt( $lr->id)])}}" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
                  <a href="{{route('lokasi-rambu-hapus', ['id' => IDCrypt::Encrypt( $lr->id)])}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini ?')"> <i class=" fa fa-trash"></i></a>
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
