<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;
use App\kelurahan;
use App\lokasi_rambu;
use App\rambu;
use Carbon\Carbon;

class LokasiController extends Controller
{
    //kecamatan
    public function kecamatan_index(){
        $kecamatan = kecamatan::all();

        return view('lokasi.kecamatan',compact('kecamatan'));
    }

    
    public function kecamatan_tambah(Request $request){

        $this->validate(request(),[
          'nama_kecamatan'=>'required'
        ]);

        $kecamatan = new kecamatan;
        $kecamatan->nama_kecamatan= $request->nama_kecamatan;
        $kecamatan->save();
       
          return redirect(route('kecamatan-index'));
      }

      public function kecamatan_edit($id){
        $kecamatan = kecamatan::findOrFail($id);

        return view('lokasi.kecamatan_edit',compact('kecamatan'));
       }

      public function kecamatan_detail($id){
        $kecamatan = kecamatan::findOrFail($id);
        $kelurahan = kelurahan::where('kecamatan_id',$id)->get();

        return view('lokasi.kecamatan_detail',compact('kelurahan','kecamatan'));
       }

       public function kecamatan_update(Request $request, $id){
        $kecamatan = kecamatan::findOrFail($id);

        $this->validate(request(),[
           'nama_kecamatan'=>'required'
       ]);
       $kecamatan->nama_kecamatan= $request->nama_kecamatan;
       $kecamatan->update();
       return redirect(route('kecamatan-index'));
 
      }

       public function kecamatan_hapus($id){
        
        $kecamatan=kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect(route('kecamatan-index'));

    }  

     //kelurahan
     public function kelurahan_index(){
        $kelurahan = kelurahan::all();
        $kecamatan = kecamatan::all();

        return view('lokasi.kelurahan',compact('kelurahan','kecamatan'));
    }

    
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
      }

      public function kelurahan_detail($id){
        $kelurahan = kelurahan::findOrFail($id);
        $lokasi_rambu= lokasi_rambu::where('kelurahan_id',$id)->get();
        return view('lokasi.kelurahan_detail',compact('kelurahan','lokasi_rambu'));
       }

       public function kelurahan_hapus($id){
        
        $kelurahan=kelurahan::findOrFail($id);
        $kelurahan->delete();
        return redirect(route('kelurahan-index'));

    }  

    //rambu terpasang
    public function rambu_terpasang_index(){
        $lokasi_rambu = lokasi_rambu::where('status_pasang' ,1)->get();

        return view('lokasi.rambu_terpasang',compact('lokasi_rambu'));
    }
    public function rambu_terpasang_tambah(){
        $rambu = rambu::all();
        $kelurahan = kelurahan::all();

        return view('lokasi.rambu_terpasang_tambah',compact('rambu','kelurahan'));
    }
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
    }

    public function rambu_terpasang_ubah($id){
        $rambu_terasang = lokasi_rambu::findOrFail($id);
        $rambu_terasang->status_pasang = 0;
        $rambu_terasang->apbn = NULL;
        $rambu_terasang->save();
        return redirect(route('rambu-terpasang-index'));
    }

    public function lokasi_rambu_hapus($id){
        
        $lokasi_rambu=lokasi_rambu::findOrFail($id);
        $lokasi_rambu->delete();
        return redirect(route('rambu-terpasang-index'));

    }  

       //kebutuhan rambu 
    public function kebutuhan_rambu_index(){
        $lokasi_rambu = lokasi_rambu::where('status_pasang' , 0 )->get();

        return view('lokasi.kebutuhan_rambu',compact('lokasi_rambu'));
    }
   
    public function kebutuhan_rambu_tambah(){
        $rambu = rambu::all();
        $kelurahan = kelurahan::all();

        return view('lokasi.kebutuhan_rambu_tambah',compact('rambu','kelurahan'));
    }

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
    }

    public function kebutuhan_rambu_ubah($id){
        $lokasi_rambu = lokasi_rambu::findOrFail($id);
        $lokasi_rambu->status_pasang = 1;
        $lokasi_rambu->apbn = Carbon::now()->format('Y');
        $lokasi_rambu->save();
        return redirect(route('kebutuhan-rambu-index'));
    }
    
}
