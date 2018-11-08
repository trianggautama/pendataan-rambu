<?php

namespace App\Http\Controllers;
use PDF;
use App\kelurahan;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function laporan_kelurahan(){
        $kelurahan = kelurahan::all();
        $pdf =PDF::loadView('lokasi.kelurahan_laporan', ['kelurahan' => $kelurahan]);
        return $pdf->download('My Portable Document.pdf');
    }
}
