@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">


    <!-- Main content -->
    <section class="content">
    <div class="box">
           <div class="card-header" style="padding-bottom:5px;">
                <h2>
                        Tambah Lokasi Kebutuhan Rambu
                 </h2>
           </div>
            @include('layouts.errors')
            <!-- /.box-header -->
            <div class="box-body" style="padding:25px;">
                    
                <div class="row">
                    <div class="col-lg-6">
                            <form  method="post" action="" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                        <div class="form-group">
                            <p>Rambu</p>
                            <select multiple class="form-control" name="rambu_id" style="height:150px;">
                                @foreach ($rambu as $r)
                                    <option value="{{$r->id}}" >{{$r->nama_rambu}}</option>
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
                         <div class="form-group">
                            <p>Foto Lokasi</p>
                            <input type="file" name="gambar"  class="form-control" />
                        </div>                
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <p>Kelurahan</p>
                            <select multiple class="form-control" style="height:150px;" name="kelurahan_id">
                                    @foreach ($kelurahan as $kel)
                                    <option value="{{$kel->id}}" >{{$kel->nama_kelurahan}}</option>
                                @endforeach  
                                </select>
                        </div>
                     

                            <div class="form-group">
                             
                                    <input type="hidden" name="status_pasang"  value="0" class="form-control" />
                                </div>    
                                <div class="form-group">
                                        <p>Alamat</p>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat" ></textarea>
                                      </div>
                                      <div class="form-group">
                                        <p>keterangan prioritas</p>
                                            <select class="form-control" name="keterangan">
                                              <option value="biasa">biasa</option>
                                              <option value="sangat prioritas">sangat prioritas</option>
                                            </select>
                                          </div>
                                      <div class="text-right">
                                            <a href="{{ route('jenis-rambu-index') }}" class="btn btn-warning" style="color:white;">  <i class="fa fa-arrow-circle-left"></i> Kembali</a>
                                              <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
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
