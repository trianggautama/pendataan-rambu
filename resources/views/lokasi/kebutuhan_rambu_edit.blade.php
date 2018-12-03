
@extends('layouts.app')

@section('content')

  <div class="content-wrapper" style="margin-bottom:0px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Edit Data Kebutuhan Rambu </h4>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content" style="padding-top:0px;" >
      <div class="card" style="padding:5%;margin-top:0px;">

     
        <div class="row">
           
                <div class="col-md-6">
                    <form  method="post" action="" enctype="multipart/form-data">
                        {{method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <p>Rambu</p>
                            <select multiple class="form-control" name="rambu_id" style="height:150px;">
                                @foreach ($rambu as $r)
                                    <option value="{{$r->id}}" {{$lokasi_rambu->rambu_id == $r->id ? 'selected' : ''}}>{{$r->nama_rambu}}</option>
                                @endforeach  
                                </select>
                        </div>
                        <div class="form-group">
                            <p>Latitude</p>
                            <input type="text" name="lat"  class="form-control" value="{{$lokasi_rambu->lat}}"/>
                        </div>
                        <div class="form-group">
                            <p>Langitude</p>
                            <input type="text" name="lang"  class="form-control" value="{{$lokasi_rambu->lang}}"/>
                        </div>
                                
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                                <p>Kelurahan</p>
                                <select multiple class="form-control" style="height:150px;" name="kelurahan_id">
                                        @foreach ($kelurahan as $kel)
                                        <option value="{{$kel->id}}" {{$lokasi_rambu->kelurahan_id == $kel->id ? 'selected' : ''}}>{{$kel->nama_kelurahan}}</option>
                                    @endforeach  
                                    </select>
                            </div>
                            <div class="form-group">
                         
                                    <p>Foto Lokasi</p>
                                    <input type="file" name="gambar"  class="form-control" />
                                    <label for="">isi jika ingin mengubah gambar</label>
                                </div>       
                                <div class="form-group">
                                 
                                        <input type="hidden" name="status_pasang"  value="0" class="form-control" />
                                    </div>    
                                    <div class="form-group">
                                            <p>Alamat</p>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat" >{{$lokasi_rambu->alamat}}</textarea>
                                          </div>
                                          <div class="text-right">
                                              <a href="{{ route('jenis-rambu-index') }}" class="btn btn-warning" style="color:white;">  <i class="fa fa-arrow-circle-left"></i> Kembali</a>
                                                <input class="btn btn-primary" type="submit" name="submit" value="Ubah">
                                                <a href="{{route('rambu-terpasang-ubah', ['id' => IDCrypt::Encrypt( $lokasi_rambu->id)])}}" class="btn  btn-success"> ubah status</a>
                                                
                                                {{csrf_field() }}   
                                              </div>
                                            </form>

                </div>     
            
             
            </div>
            

        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
@endsection
