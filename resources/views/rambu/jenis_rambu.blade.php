@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Main content -->
    <section class="content">
    <div class="box">
        @include('layouts.errors')
        @include('layouts.alert')

        <div class="box-header "style="padding:10px">
            <div class="row" >
              <div class="col-md-6">
                  <div class="title">   
                      <h2  style="margin-bottom:3px;"><b>Data</b> Jenis Rambu</h2>
                     </div>
              </div>     
              <div class="col-md-6"style="margin-top:20px;">
                <div class="button text-right" >
                    <a href="#tambahdata" data-toggle="modal"data-target="#tambahdata" class="btn btn-sm btn-success pull-right" style="margin-left:5px;"><i class="fa fa-plus"></i> tambah data </a>
                    <a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
                    
                </div>
                </div>              
                  </div>
                </div>   
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
                @foreach($jenis_rambu as $jr)
                <tr>
                  <td>{{$jr->id}}</td>
                  <td>{{$jr->nama_jenis}} </td>
                  <td class="text-center"> 
                  <a href="{{route('jenis-rambu-detail', ['id' => IDCrypt::Encrypt( $jr->id)])}}" class="btn btn-default"> <i class=" far fa-eye"></i></a>
                  <a href="{{route('jenis-rambu-edit', ['id' => IDCrypt::Encrypt( $jr->id)])}}" class="btn btn-primary" > <i class=" far fa-edit"></i></a>
                  <button type="button" class="btn btn-danger"
                      onclick="Hapus('{{Crypt::encryptString($jr->id)}}','{{$jr->nama_jenis}}')"><b><i class="far fa-trash-alt"></i></b></button>
                 
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
              
  
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
                        <p>Jenis Rambu</p>
                        <input type="text" name="nama_jenis"  class="form-control" />
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


  function Hapus(id,nama_jenis)
  {
    const swalWithBootstrapButtons = swal.mixin({
    confirmButtonClass: 'btn btn-success',
    cancelButtonClass: 'btn btn-danger',
    buttonsStyling: false,
  })
  
  swalWithBootstrapButtons({
    title: 'apa anda yakin?',
    text:  " Menghapus Data jenis rambu '"+nama_jenis+"'juga akan menghapus data rambu yang berelasi , tetap lanjutkan ?",
    type: 'question',
    showCancelButton: true,
    confirmButtonText: 'hapus data',
    cancelButtonText: 'batal',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      swalWithBootstrapButtons(
        'Deleted!',
        "Data kelurahan '"+nama_jenis+"' Akan di Hapus",
        'success'
      );
       window.location = " /jenis-rambu/hapus/"+id;
    } else if (
      // Read more about handling dismissals
      result.dismiss === swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons(
        'Dibatalkan',
        'data batal dihapus',
        'error'
      )
    }
  })
    
  }
  </script>
  