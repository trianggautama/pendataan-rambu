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
        text-align: center;
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
     .ttd{
         margin-left:70%;
         text-align: center; 
         text-transform: uppercase;
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
            <hr >
           
    </div>
   
    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">DATA KEBUTUHAN  RAMBU</h2>
         <table >
             <tr >
                 <td style=" border: 1px solid #fff;">
                    Kepada
                 </td>
                 <td style=" border: 1px solid #fff;">
                    :Kepala Dinas Perhubungan Kota Banjarbaru
                 </td>
             </tr>
             <tr>
                <td style=" border: 1px solid #fff;">
                     Dari
                </td>
                <td style=" border: 1px solid #fff;">
                     :Kepala Bidang Lalu Lintas Angkutan Jalan
                </td>
            </tr>
            <tr>
                <td style=" border: 1px solid #fff;">
                     Nomor
                </td>
                 <td style=" border: 1px solid #fff;">
                     :&nbsp;&nbsp; &nbsp;   / LLAJ-Reksa / 2018
                 </td>
                </tr>
                <tr>
                <td style=" border: 1px solid #fff;">
                     tanggal
               </td>
               <td style=" border: 1px solid #fff;">
                  :&nbsp;   {{$tgl}}
               </td>
            </tr>
             <tr>
                <td style=" border: 1px solid #fff;">
                  perihal
                 </td>
                 <td style=" border: 1px solid #fff;">
                   :Survey Pengadaan Rambu Lalu-lintas 
                 </td>
                 </tr>
         </table>
          <p>Sehubungan telah  dilaksanakannya perjalanan dinas dalam daerah dalam rangka Kegiatan Survey Pengadaan Rambu Lalu-lintas di  Bidang Perhubungan di seluruh wilayah yang ada di 
              Kelurahan {{$lokasi_rambu->kelurahan->nama_kelurahan }} Kota Banjarbaru , maka dengan ini di sampaikan laporan perjalanan dinas sebagai berikut :</p>
          <ol>
            <li>DASAR <br>
                    Persetujuan Kepala Dinas Perhubungan Atas Telaahan Staf Kepala Bidang LLAJ Nomor :  &nbsp;&nbsp;&nbsp; /LLAJ-Reksa  
                    
                    </li>      
            <li style="margin-top:20px;">HASIL SURVEY <br>
                Survey Pengadaan Marka Jalan yang berada di Kelurahan  {{$lokasi_rambu->kelurahan->nama_kelurahan }} Kecamatan {{$lokasi_rambu->kelurahan->kecamatan->nama_kecamatan }}.
                 Berdasarkan hasil survey dan rekayasa lalu lintas Di Perlukan rambu lalu lintas  antara lain;     
               </li>      
        </ol>   
        <table  class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No </th>
                  <th>Nama Rambu</th>
                  <th>Alamat</th>
                </tr>
                </thead>
                <tbody>                    
                <tr>
                  <td>1</td>
                  <td>{{$lokasi_rambu->rambu->nama_rambu}}</td>
                  <td>{{$lokasi_rambu->alamat}}</td>
                </tr>
                </tfoot>
              </table>
        <p>Demikian kami sampaikan mohon arahan dan petunjuk berikutnya.</p>
        </div> 
        <br>
        <br>
        <div class="ttd">
          <h5> <p>Banjarbaru, {{$tgl}}</p></h5>
          @foreach ($pejabat_struktural as $ps)
        <h5>{{$ps->jabatan}}</h5>
        <br>
        <br>
        <h5 style="text-decoration:underline;">{{$ps->nama}}</h5>
        <h5>{{$ps->NIP}}</h5>
        @endforeach
        </div>     
        </div>
       
            </body>
</html>