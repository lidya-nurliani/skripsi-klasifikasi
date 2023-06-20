<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klasifikasi;

class PrediksiController extends Controller
{
    public function index(){
        $klasifikasi = Klasifikasi::all();
        $dataset = Klasifikasi::all()->toArray();

        return view('prediksi.index', compact('klasifikasi','entropies'));
    }
}
