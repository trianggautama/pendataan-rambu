<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pejabat_struktural;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/index');
    }

    public function pejabat_struktural_index(){

        $pejabat_struktural = pejabat_struktural::all();        
        return view('lain-lain/pejabat_struktural',compact('pejabat_struktural'));
    }
    public function pejabat_struktural_tambah(Request $request){

        $this->validate(request(),[
            'NIP'=>'required|numeric',
            'nama'=>'required',
            'jabatan'=>'required'
          ]);
  
        pejabat_struktural::create($request->all());

        return redirect(route('pejabat-struktural-index'));
    }
    public function pejabat_struktural_edit($id){

        $pejabat_struktural = pejabat_struktural::findOrFail($id);        
        return view('lain-lain/pejabat_struktural_edit',compact('pejabat_struktural'));
    }
    public function pejabat_struktural_update(Request $request ,$id){

        $pejabat_struktural = pejabat_struktural::findOrFail($id);        
        
        $this->validate(request(),[
            'NIP'=>'required|numeric',
            'nama'=>'required',
            'jabatan'=>'required'
          ]);

        $pejabat_struktural->NIP= $request->NIP;
        $pejabat_struktural->nama= $request->nama;
        $pejabat_struktural->jabatan= $request->jabatan;

        $pejabat_struktural->update();

        return redirect(route('pejabat-struktural-index'));
    }

}
