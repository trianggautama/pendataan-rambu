@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Pejabat Struktural
        <small>yang ada di Dishub  Kota Banjarbaru</small>
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
              <a href="##tambahdata" data-toggle="modal"data-target="#tambahdata" class="btn btn-warning pull-right" style="margin-left:5px;"><i class="fa fa-plus"></i> tambah data </a>
              <a href="#" class="btn btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Kelurahan</th>
                  <th>Nama Kelurahan</th>
                  <th>Kecamatan</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($kelurahan as $kel)
                      
                <tr>
                  <td>{{$kel->id}}</td>
                  <td>{{$kel->nama_kelurahan}}</td>
                  <td>{{$kel->kecamatan->nama_kecamatan}}</td>
                  <td class="text-center">
                  <a href="{{route('kelurahan-detail', ['id' => $kel->id ])}}" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
                  <a href="{{route('kelurahan-hapus',['id'=>$kel->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus data <?php echo $kel->nama_kelurahan; ?>?')"> <i class=" fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
              
  <div id="tambahdata" class="modal fade" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <h4>Tambah Data</h4>
          <button type="button" class="close " data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    
        <div class="modal-body">
          <!-- form login -->
          <form  method="post" action="" enctype="multipart/form-data">
 
            <div class="form-group">
              <p>Nama Kelurahan</p>
              <input type="text" name="nama_kelurahan"  class="form-control" />
            </div>
            <div class="form-group">
              <p>Kecamatan</p>
                  <select class="form-control" name="kecamatan_id">
                    <option value="">---</option>
                  @foreach($kecamatan as $k)
                    <option value="{{$k->id}}">{{$k->nama_kecamatan}}</option>
                  @endforeach
                  </select>
                </div>
             
             <div class="text-right">

               <input class="btn btn-primary" type="submit" name="submit" value="Submit">
               {{csrf_field() }}
             </div>
           </div>

          </form>
          <!-- end form login -->
        </div>
          </div>
          <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
@endsection
