<?php

namespace App\Http\Controllers;
use Carbon;
Use File;
use DB;
use App\jenis_rambu;
use App\rambu;
use App\lokasi_rambu;
use Illuminate\Http\Request;

class RambuController extends Controller
{
    //rambu
    public function rambu_index(){
        $rambu = rambu::all();
        $jenis_rambu = jenis_rambu::all();
        return view('rambu.index',compact('rambu','jenis_rambu'));
    
        //$rambu = DB::table('rambu')->get()->toJson();
        //dd($rambu);
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
        //$rambu = rambu::where('jenis_rambu_id',$id)->get();
        $lokasi_rambu = lokasi_rambu::where('rambu_id', $id)->get();
        return view('rambu.rambu_detail',compact('rambu','lokasi_rambu'));
       }

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
       }

       public function rambu_hapus($id){
        $rambu=rambu::findOrFail($id);
        File::delete('images/rambu/'.$rambu->gambar);
        $rambu->delete();
        return redirect(route('rambu-index'));

    }



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
      }

      public function jenis_rambu_edit($id){
        $jenis_rambu = jenis_rambu::findOrFail($id);

        return view('rambu.ubah_jenis_rambu',compact('jenis_rambu'));
       }

     
       public function jenis_rambu_update(Request $request, $id){
        $jenis_rambu = jenis_rambu::findOrFail($id);

        $this->validate(request(),[
           'nama_jenis'=>'required'
       ]);
       $jenis_rambu->nama_jenis= $request->nama_jenis;
       $jenis_rambu->update();
       return redirect(route('jenis-rambu-index'));
 
      }

    public function jenis_rambu_detail($id){
        $jenis_rambu = jenis_rambu::findOrFail($id);
        $rambu = rambu::where('jenis_rambu_id',$id)->get();

        return view('rambu.jenis_rambu_detail',compact('rambu','jenis_rambu'));
       }

    public function jenis_rambu_hapus($id){
        
        $jenis_rambu=jenis_rambu::findOrFail($id);
        $jenis_rambu->delete();
        return redirect(route('jenis-rambu-index'));

    }  



}
