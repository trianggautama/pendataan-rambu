@extends('layouts.app')

@section('content')
<div >
    <div class="content-wrapper" style="padding-bottom:0px;">
    <!-- Main content -->
    @include('layouts.alert')
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
                    <a href="{{route('laporan-kebutuhan-rambu')}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-print" style="margin-right:5px;"></i> cetak </a>
                    
                </div>
                </div>              
                  </div>
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
