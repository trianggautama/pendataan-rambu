@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Main content -->
    <section class="content">
    <div class="box">
        @include('layouts.errors')
        <div class="box-header "style="padding:10px">
            <div class="row" >
              <div class="col-md-6">
                  <div class="title">   
                      <h2  style="margin-bottom:3px;"><b>Data</b> Kelurahan</h2>
                     </div>
              </div>     
              <div class="col-md-6"style="margin-top:20px;">
                <div class="button text-right" >
                    <a href="##tambahdata" data-toggle="modal"data-target="#tambahdata" class="btn btn-sm btn-success pull-right" style="margin-left:5px;"><i class="fa fa-plus"></i> tambah data </a>
                    <a href="{{route('laporan-kelurahan')}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
                    
                </div>
                </div>              
                  </div>
                </div>   
                @include('layouts.alert')
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable" class="table table-bordered table-hover">
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
                  <a href="{{route('kelurahan-detail', ['id' => IDCrypt::Encrypt( $kel->id)])}}" class="btn  btn-default"> <i class=" fa fa-eye"></i></a>
                  <button type="button" class="btn btn-danger"
                      onclick="Hapus('{{Crypt::encryptString($kel->id)}}','{{$kel->nama_kelurahan}}')"><b><i class="far fa-trash-alt"></i></b></button>
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

<script>


    function Hapus(id,nama_kelurahan)
    {
      const swalWithBootstrapButtons = swal.mixin({
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false,
    })
    
    swalWithBootstrapButtons({
      title: 'Apa anda yakin?',
      text:  " Menghapus Data kelurahan '"+nama_kelurahan+"' juga akan menghapus data lokasi rambu yang berelasi , tetap lanjutkan ?",
      type: 'question',
      showCancelButton: true,
      confirmButtonText: 'hapus data',
      cancelButtonText: 'batal',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        swalWithBootstrapButtons(
          'Deleted!',
          "Data kelurahan '"+nama_kelurahan+"' Akan di Hapus",
          'success'
        );
         window.location = " /lokasi/kelurahan/hapus/"+id;
      } else if (
        // Read more about handling dismissals
        result.dismiss === swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons(
          'Cancelled',
          'data batal dihapus',
          'error'
        )
      }
    })
      
    }
    </script>
    