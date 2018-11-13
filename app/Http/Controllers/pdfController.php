<?php

namespace App\Http\Controllers;
use PDF;
use App\kelurahan;
use Carbon\Carbon;
use App\Lokasi_rambu;
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
