@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
    <div class="box">
        @include('layouts.errors')
            <div class="box-header "style="padding:10px">
                  <div class="row" >
                    <div class="col-md-6">
                        <div class="title">   
                            <h2  style="margin-bottom:3px;"><b>Data</b> Kecamatan</h2>
                           </div>
                    </div>     
                    <div class="col-md-6"style="margin-top:20px;">
                      <div class="button text-right" >
                          <a href="##tambahdata" data-toggle="modal"data-target="#tambahdata" class="btn btn-sm btn-success pull-right" style="margin-left:5px;"><i class="fa fa-plus"></i> tambah data </a>
                          <a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
                          
                      </div>
                      </div>              
                        </div>
                      </div>    

  
             {{-- ALERT !!! --}}
             @include('layouts.alert')
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Kecamatan</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kecamatan as $k)
                <tr>
                  <td>{{$k->id}}</td>
                  <td>{{$k->nama_kecamatan}} </td>
                  <td class="text-center"> 
                      <a href="{{route('kecamatan-detail', ['id' => IDCrypt::Encrypt( $k->id)])}}" class="btn  btn-default"> <i class=" fa fa-eye"></i></a>
                      <a href="{{route('kecamatan-edit', ['id' => IDCrypt::Encrypt( $k->id)])}}" class="btn  btn-primary"> <i class=" far fa-edit"></i></a>
                     
                      <button type="button" class="btn btn-danger"
                      onclick="Hapus('{{Crypt::encryptString($k->id)}}','{{$k->nama_kecamatan}}')"><b><i class="far fa-trash-alt"></i></b></button>
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
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  method="post" action="">
              <div class="form-group">
                <p>Nama Kecamatan</p>
                <input type="text" name="nama_kecamatan"  class="form-control" />
              </div>
             
               <div class="text-right">
  
                 <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                 {{csrf_field() }}
               </div>
             </div>
  
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
<script>


function Hapus(id,nama_kecamatan)
{
  const swalWithBootstrapButtons = swal.mixin({
  confirmButtonClass: 'btn btn-success',
  cancelButtonClass: 'btn btn-danger',
  buttonsStyling: false,
})

swalWithBootstrapButtons({
  title: 'Are you sure?',
  text:  " Menghapus Data Kecamatan '"+nama_kecamatan+"' juga akan menghapus data kelurahan yang berelasi , tetap lanjutkan ?",
  type: 'question',
  showCancelButton: true,
  customClass: 'swal-wide',
  confirmButtonText: 'Hapus ',
  cancelButtonText: 'Batal',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    swalWithBootstrapButtons(
      'info!',
      "Data Kecamatan '"+nama_kecamatan+"' Akan di Hapus",
      'success'
    );
     window.location = " /lokasi/kecamatan/hapus/"+id;
  } else if (
    // Read more about handling dismissals
    result.dismiss === swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons(
      'Dibatalkan',
      'Data Batal di Hapus ',
      'info'
    )
  }
})
  
}
</script>
