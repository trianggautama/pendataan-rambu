@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">

    <section class="content">
    <div class="box">
            <div class="box-header">
            <h3 class="box-title"> Data rambu pada kelurahan {{$kelurahan->nama_kelurahan}}</h3>
            <div class="button text-right">
              <a href="{{route('laporan-kebutuhan-rambu-kelurahan', ['id' => IDCrypt::Encrypt( $kelurahan->id)])}}" class="btn btn-primary "  style="margin-left:0px;"><i class="fa fa-print"></i> cetak kebutuhan rambu</a>
              <a href="{{route('laporan-rambu-terpasang-kelurahan', ['id' => IDCrypt::Encrypt( $kelurahan->id)])}}" class="btn btn-warning "><i class="fa fa-print" style="margin-right:0px;"></i> cetak rambu terpasang</a>
        
            </div>
                  </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>nama rambu</th>
                  <th>kelurahan</th>
                  <th>alamat</th>
                  <th class="text-center">status</th>
                </tr>
                </thead>
                <tbody>
              @foreach($lokasi as $kel)
                @foreach($kel->lokasi_rambu as $lr)
                  <tr>
                    <td>
                      {{$lr->rambu->nama_rambu}}
                    </td>
                    <td>{{$lr->kelurahan->nama_kelurahan}}</td>
                  <td>{{$lr->alamat}}</td>
                  <td class="text-center">
                    @if ($lr->status_pasang == 0)
                      <a href="#" class="btn btn-sm btn-primary"> kebutuhan rambu</a>
                    @else
                        <a href="#" class="btn btn-sm btn-success"> rambu terpasang</a>
                    @endif
                  </td>
                  </tr>
                @endforeach
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
