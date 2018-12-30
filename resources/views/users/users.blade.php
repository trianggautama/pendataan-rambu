@extends('layouts.app')

@section('content')

    <div class="content-wrapper" style="padding-bottom:0px;">
  
    <section class="content">
    <div class="box">
        <div class="box-header "style="padding:10px">
            <div class="row" >
              <div class="col-md-6">
                  <div class="title">   
                      <h2  style="margin-bottom:3px;"><b>Data</b> Users</h2>
                     </div>
              </div>     
              <div class="col-md-6"style="margin-top:20px;">
                </div>              
                  </div>
                </div>   
                @include('layouts.alert')
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama </th>
                  <th>Email</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($users as $usr)
                              
                    <tr>
                      <td>{{$usr->name}}</td>
                      <td>{{$usr->email}}</td>
                      
                      <td  class="text-center">  
                        @if($usr->id == Auth::user()->id )
                            <a href="#" class="btn btn-primary"> edit data</a>
                        @endif
                          
                      </td>

                    </tr>
                    @endforeach
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
   

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
@endsection

  