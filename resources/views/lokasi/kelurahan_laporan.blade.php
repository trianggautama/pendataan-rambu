<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <table id="example1" class="table table-bordered table-hover">
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
                  <a href="{{route('kelurahan-detail', ['id' => $kel->id ])}}" class="btn btn-sm btn-default"> <i class=" fa fa-eye"></i></a>
                  <a href="{{route('kelurahan-hapus',['id'=>$kel->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus data <?php echo $kel->nama_kelurahan; ?>?')"> <i class=" fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table></body>
</html>