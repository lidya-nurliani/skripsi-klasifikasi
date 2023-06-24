<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Dataken;
use App\Models\Klasifikasi;


class LaporanController extends Controller
{
    public function cetakLaporanPDF() {
        
        $dataken = Dataken::all();
        $klasifikasi = Klasifikasi::all();

        $pdf = PDF::loadview('laporan', compact('dataken','klasifikasi'));

        return $pdf->download('laporan.pdf');
    }
}
