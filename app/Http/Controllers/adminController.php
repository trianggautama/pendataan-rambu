<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use File;
use DB;
use App\jenis_rambu;
use App\rambu;
use App\lokasi_rambu;
use Carbon\Carbon;
use App\kecamatan;
use App\kelurahan;

class adminController extends Controller
{
    //rambu
    public function rambu_index(){
        $rambu = rambu::all();
        $jenis_rambu = jenis_rambu::all();
        return view('rambu.index',compact('rambu','jenis_rambu'));

    }//menampilkan data rambu

    public function rambu_tambah(Request $request){

        $this->validate(request(),[
            'kode_rambu'=>'required',
            'nama_rambu'=>'required',
            'jenis_id'=>'required',
            'gambar'=>'required'
        ]);

        $rambu = new rambu;
        $FotoExt  = $request->gambar->getClientOriginalExtension();
        $FotoName = $request->kode_rambu.' - '.$request->nama_rambu;
        $gambar     = $FotoName.'.'.$FotoExt;
        $request->gambar->move('images/rambu', $gambar);
    
        $rambu->kode_rambu= $request->kode_rambu;
        $rambu->nama_rambu= $request->nama_rambu;
        $rambu->jenis_rambu_id= $request->jenis_id;
        $rambu->keterangan= $request->keterangan;
        $rambu->gambar            = $gambar;
        $rambu->save();
       
          return redirect(route('rambu-index'));
      }//fungsi menambahkan data rambu

      
      public function rambu_detail($id){
        $rambu = rambu::findOrFail($id);
        $lokasi_rambu = lokasi_rambu::where('rambu_id', $id)->get();
        return view('rambu.rambu_detail',compact('rambu','lokasi_rambu'));
       }//fungsi menampilkan detail data rambu

       public function rambu_update(Request $request, $id){
         $rambu = rambu::findOrFail($id);

         $this->validate(request(),[
            'kode_rambu'=>'required',
            'nama_rambu'=>'required',
            'keterangan'=>'required'
        ]);

        $rambu->kode_rambu= $request->kode_rambu;
        $rambu->nama_rambu= $request->nama_rambu;
        $rambu->keterangan= $request->keterangan;
        $rambu->update();
        return redirect(route('rambu-index'));
       }//fungi mengubah data rambu 

       public function rambu_hapus($id){
        $rambu=rambu::findOrFail($id);
        File::delete('images/rambu/'.$rambu->gambar);
        $rambu->delete();
        return redirect(route('rambu-index'));
    }//fungsi menghapus data rambu



    //jenis rambu

    public function jenis_rambu_index(){
        $jenis_rambu = jenis_rambu::all();
        return view('rambu.jenis_rambu', ['jenis_rambu' => $jenis_rambu]); 
       }//fungsi menampilkan data jenis rambu

    
       

    
    public function jenis_rambu_tambah(Request $request){

        $this->validate(request(),[
          'nama_jenis'=>'required'
        ]);
        $jenis_rambu = new jenis_rambu;
        $jenis_rambu->nama_jenis= $request->nama_jenis;
        $jenis_rambu->save();
       
          return redirect(route('jenis-rambu-index'));
      }//fungsi menambah data jenis rambu

      public function jenis_rambu_edit($id){
        $jenis_rambu = jenis_rambu::findOrFail($id);

        return view('rambu.ubah_jenis_rambu',compact('jenis_rambu'));
       }//menampilkan halaman edit jenis rambu

     
       public function jenis_rambu_update(Request $request, $id){
        $jenis_rambu = jenis_rambu::findOrFail($id);

        $this->validate(request(),[
           'nama_jenis'=>'required'
       ]);
       $jenis_rambu->nama_jenis= $request->nama_jenis;
       $jenis_rambu->update();
       return redirect(route('jenis-rambu-index'));
      }//fungsi mengubah data jenis rambu

    public function jenis_rambu_detail($id){
        $jenis_rambu = jenis_rambu::findOrFail($id);
        $rambu = rambu::where('jenis_rambu_id',$id)->get();

        return view('rambu.jenis_rambu_detail',compact('rambu','jenis_rambu'));
       }//melihat data rambu pada kategori jenis rambu tertentu 

    public function jenis_rambu_hapus($id){
        
        $jenis_rambu=jenis_rambu::findOrFail($id);
        $jenis_rambu->delete();
        return redirect(route('jenis-rambu-index'));
    } //menghapus  data jenis rambu



      //kecamatan

      public function kecamatan_index(){
        $kecamatan = kecamatan::all();

        return view('lokasi.kecamatan',compact('kecamatan'));
    }//menampikan data kecamatan

    
    public function kecamatan_tambah(Request $request){

        $this->validate(request(),[
          'nama_kecamatan'=>'required'
        ]);

        $kecamatan = new kecamatan;
        $kecamatan->nama_kecamatan= $request->nama_kecamatan;
        $kecamatan->save();
       
          return redirect(route('kecamatan-index'));
      }//menambahkan data kecamatan

      public function kecamatan_edit($id){
        $kecamatan = kecamatan::findOrFail($id);

        return view('lokasi.kecamatan_edit',compact('kecamatan'));
       }//menampikan halaman edit kecamatan

      public function kecamatan_detail($id){
        $kecamatan = kecamatan::findOrFail($id);
        $kelurahan = kelurahan::where('kecamatan_id',$id)->get();

        return view('lokasi.kecamatan_detail',compact('kelurahan','kecamatan'));
       }//melihat data kelurahan pada kecamatan tertentu

       public function kecamatan_update(Request $request, $id){
        $kecamatan = kecamatan::findOrFail($id);

        $this->validate(request(),[
           'nama_kecamatan'=>'required'
       ]);
       $kecamatan->nama_kecamatan= $request->nama_kecamatan;
       $kecamatan->update();
       return redirect(route('kecamatan-index'));
      }//mengubah data kecamatan

       public function kecamatan_hapus($id){
        
        $kecamatan=kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect(route('kecamatan-index'));
    }  //menghapus data  kecamatan


     //kelurahan

     public function kelurahan_index(){
        $kelurahan = kelurahan::all();
        $kecamatan = kecamatan::all();

        return view('lokasi.kelurahan',compact('kelurahan','kecamatan'));
    }//menampilkan data kelurahan

    
    public function kelurahan_tambah(Request $request){

        $this->validate(request(),[
          'nama_kelurahan'=>'required',
          'kecamatan_id'=>'required'

        ]);

        $kelurahan = new kelurahan;
        $kelurahan->nama_kelurahan= $request->nama_kelurahan;
        $kelurahan->kecamatan_id= $request->kecamatan_id;

        $kelurahan->save();
       
          return redirect(route('kelurahan-index'));
      }//menambah data kelurahan

      public function kelurahan_detail($id){
        $kelurahan = kelurahan::findOrFail($id);
        $lokasi_rambu= lokasi_rambu::where('kelurahan_id',$id)->get();
        return view('lokasi.kelurahan_detail',compact('kelurahan','lokasi_rambu'));
       }//melihat data rambu pada elurahan tertentu

       public function kelurahan_hapus($id){
        
        $kelurahan=kelurahan::findOrFail($id);
        $kelurahan->delete();
        return redirect(route('kelurahan-index'));
    } //menghapus data kelurahan

    
    //rambu terpasang

    public function rambu_terpasang_index(){
        $lokasi_rambu = lokasi_rambu::where('status_pasang' ,1)->get();

        return view('lokasi.rambu_terpasang',compact('lokasi_rambu'));
    }//menampilkan data rambu terpasang

    public function rambu_terpasang_tambah(){
        $rambu = rambu::all();
        $kelurahan = kelurahan::all();

        return view('lokasi.rambu_terpasang_tambah',compact('rambu','kelurahan'));
    }//menampilkan form tambah data rambu terpasang

    public function rambu_terpasang_store(Request $request){
      
        $this->validate(request(),[
            'kelurahan_id'=>'required',
            'rambu_id'=>'required',
            'apbn'=>'required',
            'lat'=>'required',
            'lang'=>'required',
            'alamat'=>'required'
          ]);
  
          $rambu_terpasang = new lokasi_rambu;
          $rambu_terpasang->kelurahan_id= $request->kelurahan_id;
          $rambu_terpasang->rambu_id= $request->rambu_id;
          $rambu_terpasang->apbn= $request->apbn;
          $rambu_terpasang->lat= $request->lat;
          $rambu_terpasang->lang= $request->lang;
          $rambu_terpasang->status_pasang= $request->status_pasang;
          $rambu_terpasang->alamat= $request->alamat;
          $rambu_terpasang->save();
         
            return redirect(route('rambu-terpasang-index'));
    }//menambah data rambu terpasang

    public function rambu_terpasang_ubah_status($id){
        $rambu_terasang = lokasi_rambu::findOrFail($id);
        $rambu_terasang->status_pasang = 0;
        $rambu_terasang->apbn = NULL;
        $rambu_terasang->save();
        return redirect(route('rambu-terpasang-index'));
    }//mengubah status rambu terpasang menjadi belum terpasang

    public function rambu_terpasang_edit($id){
        
        $lokasi_rambu = lokasi_rambu::findOrFail($id);
        $rambu = rambu::all();
        $kelurahan = kelurahan::all();
        return view('lokasi.rambu_terpasang_detail',compact('rambu','kelurahan','lokasi_rambu'));
    }//menampikan halama edit rambu terpasang

    public function rambu_terpasang_update(Request $request, $id){
       // dd($request->kelurahan_id);
        $lokasi_rambu = lokasi_rambu::findOrFail($id);
        $lokasi_rambu->kelurahan_id= $request->kelurahan_id;
        $lokasi_rambu->rambu_id= $request->rambu_id;
        $lokasi_rambu->apbn= $request->apbn;
        $lokasi_rambu->lat= $request->lat;
        $lokasi_rambu->lang= $request->lang;
        $lokasi_rambu->status_pasang= $request->status_pasang;
        $lokasi_rambu->alamat= $request->alamat;
        $lokasi_rambu->update();
        return redirect(route('rambu-terpasang-index'));
    }//mengubah data rambu terpasang

    public function lokasi_rambu_hapus($id){
        
        $lokasi_rambu=lokasi_rambu::findOrFail($id);
        $lokasi_rambu->delete();
        return redirect(route('rambu-terpasang-index'));
    }  //menghapus data lokasi rambu

       //kebutuhan rambu 

       public function kebutuhan_rambu_api(){
        $kebutuhanrambus = lokasi_rambu:: with('rambu')
                                       ->with('kelurahan')
                                       ->where('status_pasang','0')
                                       ->get();
        return $kebutuhanrambus ;
       }//menampilkan data kebutuhan rambu dalam bentuk api

    public function kebutuhan_rambu_index(){
      
        return view('lokasi.kebutuhan_rambu');
    }//menampilkan data kebutuhan rambu
   
    public function kebutuhan_rambu_tambah(){
        $rambu = rambu::all();
        $kelurahan = kelurahan::all();

        return view('lokasi.kebutuhan_rambu_tambah',compact('rambu','kelurahan'));
    }//menmpikan halaman tambah data kebutuhan rambu

    public function kebutuhan_rambu_store(Request $request){

        $this->validate(request(),[
            'kelurahan_id'=>'required',
            'rambu_id'=>'required',
            'lat'=>'required',
            'lang'=>'required',
            'alamat'=>'required'
          ]);
          $kebutuhan_rambu = new lokasi_rambu;
          $kebutuhan_rambu->kelurahan_id= $request->kelurahan_id;
          $kebutuhan_rambu->rambu_id= $request->rambu_id;
          $kebutuhan_rambu->lat= $request->lat;
          $kebutuhan_rambu->lang= $request->lang;
          $kebutuhan_rambu->alamat= $request->alamat;
          $kebutuhan_rambu->save();
         
            return redirect(route('kebutuhan-rambu-index'));
    }//menambah data kebutuhan rambu 

    public function kebutuhan_rambu_ubah($id){
        $lokasi_rambu = lokasi_rambu::findOrFail($id);
        $lokasi_rambu->status_pasang = 1;
        $lokasi_rambu->apbn = Carbon::now()->format('Y');
        $lokasi_rambu->save();
        return redirect(route('kebutuhan-rambu-index'));
    }

    //
    //fungsi laporan 
    //

    public function laporan_kelurahan(){
        $kelurahan = kelurahan::all();
        $tgl= Carbon::now()->format('d-m-Y');

    $pdf =PDF::loadView('lokasi.kelurahan_laporan', ['kelurahan' => $kelurahan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
     return $pdf->download('Laporan Kelurahan.pdf');
    // return view('lokasi.kelurahan_laporan',compact('kelurahan','tgl'));
    }//fungsi membuat laporan kelurahan pdf


    public function laporan_kebutuhan_rambu(){
        $lokasi_rambu = lokasi_rambu::where('status_pasang', 0)->get();
        $tgl= Carbon::now()->format('d-m-Y');

    $pdf =PDF::loadView('lokasi.kebutuhan_rambu_laporan', ['lokasi_rambu' => $lokasi_rambu,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
     return $pdf->download('Laporan kebutuhan rambu.pdf');
    }//fungsi membuat laporan kebutuhan rambu pdf

    public function laporan_rambu_terpasang(){
        $lokasi_rambu = lokasi_rambu::where('status_pasang', 1)->get();
        $tgl= Carbon::now()->format('d-m-Y');

    $pdf =PDF::loadView('lokasi.rambu_terpasang_laporan', ['lokasi_rambu' => $lokasi_rambu,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
     return $pdf->download('Laporan rambu terpasang.pdf');
    }//fungsi membuat laporan rambu terpasang pdf
}
