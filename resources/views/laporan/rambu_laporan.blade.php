<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{

        }
          table{
        border-collapse: collapse;
        width:100%;
      }

         table, th, td{
        border: 1px solid #708090;
      }
      th{
        background-color: darkslategray;
        text-align: center;
        color: aliceblue;
      }
      td{
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 150px;
         padding: 0px;
     }
     .pemko{
         width:70px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 15%;
         padding:0px;
         text-align: right; 
     }
     .headtext{
         float:right;
         margin-left: 0px;
         width: 75%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 3px;
         background-color: black;
        
     }
     .tgl{
         width:100%;
         text-align:right;
         margin-top:0px;
         margin-bottom:50px;
         margin-right:10%;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="images/dll/pemko.png" " >
            </div>
            <div class="headtext">
                <h3 style="margin:0px;">PEMERINTAH KOTA BANJARBARU</h3>
                <h1 style="margin:0px;">DINAS PERHUBUNGAN</h1>
                <p style="margin:0px;">Alamat : Jl.Jend Sudirman No.3 Telp.(0511)6749034 Banjarbaru 70713</p>
            </div>
            <hr>
            <div class="tgl">
                    <p>Banjarbaru, {{$tgl}}</p>
                  </div>
    </div>
 
    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">DATA RAMBU TERPASANG</h2>
                <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Kode Rambu</th>
                          <th>Nama Rambu</th>
                          <th>Jenis</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($rambu as $r)
                              
                        <tr>
                          <td>{{$r->kode_rambu}}</td>
                          <td>{{$r->nama_rambu}}</td>
                          <td>{{$r->jenis->nama_jenis}}</td>
                        </tr>
                        @endforeach
                        </tfoot>
                      </table>
                    </div>
                  
        </div>
       
            </body>
</html>