<?php

namespace App\Http\Controllers;
use PDF;
use App\kelurahan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function laporan_kelurahan(){
        $kelurahan = kelurahan::all();
        $tgl= Carbon::now()->format('d-m-Y');

    $pdf =PDF::loadView('lokasi.kelurahan_laporan', ['kelurahan' => $kelurahan,'tgl'=>$tgl]);
    $pdf->setPaper('a4', 'potrait');
     return $pdf->download('Laporan Kelurahan.pdf');
    // return view('lokasi.kelurahan_laporan',compact('kelurahan','tgl'));

    }
}
