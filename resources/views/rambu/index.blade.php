@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">

    <!-- Main content -->
    <section class="content">
        @include('layouts.errors')
    <div class="box">
        <div class="box-header "style="padding:10px">
            <div class="row" >
              <div class="col-md-6">
                  <div class="title">   
                      <h2  style="margin-bottom:3px;"><b>Data</b> Rambu</h2>
                     </div>
              </div>     
              <div class="col-md-6"style="margin-top:20px;">
                <div class="button" >
                    <a href="#tambahdata" data-toggle="modal"data-target="#tambahdata" class="btn btn-sm btn-success pull-right" style="margin-left:5px;"><i class="fa fa-plus"></i> tambah data </a>
                    <a href="{{route('laporan-rambu')}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
                    
                </div>
                </div>              
                  </div>
                </div>   
                @include('layouts.alert')
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable" class="table table-bordered  table-hover">
                <thead>
                <tr>
                  <th>Kode rambu</th>
                  <th>Nama Rambu</th>
                  <th>Jenis</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($rambu as $r)
                      
                <tr>
                  <td>{{$r->kode_rambu}}</td>
                  <td>{{$r->nama_rambu}}</td>
                  <td>{{$r->jenis->nama_jenis}}</td>
                  <td class="text-center">
                  <a href="{{route('rambu-detail', ['id' => IDCrypt::Encrypt( $r->id)])}}" class="btn btn-default"> <i class=" fa fa-eye"></i></a>
                  <button type="button" class="btn btn-danger"
                  onclick="Hapus('{{Crypt::encryptString($r->id)}}','{{$r->nama_rambu}}')"><b><i class="fa fa-trash-o"></i></b></button>
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
              <div class="row">
                <div class="col-md-10">
                    <h4>Tambah Data</h4>
                </div>
                <div class="col-md-2">
                    <button type="button" class="close pull-right " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
              </div>
            </div>
    
        <div class="modal-body">
          <!-- form login -->
          <form  method="post" action=""enctype="multipart/form-data">
 
            <div class="form-group">
              <input type="text" name="kode_rambu"  class="form-control"  placeholder="kode rambu"/>
            </div>
            <div class="form-group">
              <input type="text" name="nama_rambu"  class="form-control"  placeholder="nama rambu"/>
            </div>
            <div class="form-group">
              <p>Jenis Rambu</p>
                  <select class="form-control" name="jenis_id">
                  @foreach($jenis_rambu as $jr)
                    <option value="{{$jr->id}}">{{$jr->nama_jenis}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
              <p>Gambar  </p>
              <input type="file" name="gambar"  class="form-control" />
            </div>
            <div class="form-group">
                   <p>Keterangan</p>
                   <textarea class="form-control" rows="3" placeholder="Enter ..." name="keterangan" ></textarea>
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


  function Hapus(id,nama_rambu)
  {
    const swalWithBootstrapButtons = swal.mixin({
    confirmButtonClass: 'btn btn-success',
    cancelButtonClass: 'btn btn-danger',
    buttonsStyling: false,
  })
  
  swalWithBootstrapButtons({
    title: 'Are you sure?',
    text:  "Yakin Ingin Menghapus Data kelurahan '"+nama_rambu+"' ?",
    type: 'question',
    showCancelButton: true,
    confirmButtonText: 'hapus data',
    cancelButtonText: 'batal',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      swalWithBootstrapButtons(
        'Deleted!',
        "Data kelurahan '"+nama_rambu+"' Akan di Hapus",
        'success'
      );
       window.location = "/rambu/hapus/"+id;
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
  