<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;
use App\kelurahan;


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

      public function kecamatan_detail($id){
        $kecamatan = kecamatan::findOrFail($id);
        $kelurahan = kelurahan::where('kecamatan_id',$id)->get();

        return view('lokasi.kecamatan_detail',compact('kelurahan','kecamatan'));
       }

       public function kecamatan_hapus($id){
        
        $kecamatan=kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect(route('kecamatan-index'));

    }  

}
