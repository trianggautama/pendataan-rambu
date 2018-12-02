@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
       <div class="box">
           <div class="box-body" style="margin-top:0px;" >
            <div class="title" style="padding-left:25px;">   
             <h2  style="margin-bottom:0px;"><b>Dinas</b> Perhubungan kota banjarbaru</h2>
            </div>
            <hr>
            </div>
            <div class="row" style="padding:0px 50px 50px 50px">
                <div class="col-md-8" style="padding:0px;">
                    <div class="col-lg-12" style="padding:0px;">
                      
                        <img class=" img-responsive dashboard-image "   style="width:98%" src="/images/dashboard/data_rambu.png"  >
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                                <div class="col-lg-6" style="padding:0px; margin-top:1%; ">
                                        <img class=" img-responsive dashboard-image"  style="width:96%" src="/images/dashboard/rambu_terpasang.png"  >
                                    </div>
                                    <div class="col-lg-6" style="padding:0px;  margin-top:1% ">
                                            <img class=" img-responsive dashboard-image"  style="width:96%" src="/images/dashboard/kebutuhan_rambu.png"  >
                                        </div>
                                    </div>                  
                    </div>
                </div>
                <div class="col-md-4" style="padding:0px; margin:0px;">
                   <div class="col-md-12" style="padding:0px; ">
                    <img class=" img-responsive dashboard-image"  style="width:100%" src="/images/dashboard/lokasi.png"  >
                   </div>
                   <div class="col-md-12"  style="padding:0px; margin-top:20px;">
                    <img class=" img-responsive dashboard-image"  style="width:100%" src="/images/dashboard/laporan.png"  >
                </div>
                </div>
            </div>
       </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@endsection
