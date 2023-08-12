<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JenisRequest;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $jenis = Jenis::all();
        return view('jenis.index', compact('jenis'));
    }
    
    public function create() {        
        return view('jenis.create');
    }

    public function store(JenisRequest $request) {
        $validated = $request->validated();

        $data = new Jenis;
        $data->jenis_kendaraan = $request->jenis_kendaraan;        
        $data->save();

        return redirect()->route('jenis.index')->with('sukses','berhasil tambah data !');
    }

    public function edit($id) {
        $data = Jenis::findOrFail($id);        
        return view('jenis.edit', compact('data'));
    }
    
    public function update(JenisRequest $request, $id) {
        $validated = $request->validated();

        $data = Jenis::findOrFail($id);        
        $data->jenis_kendaraan = $request->jenis_kendaraan;        
        $data->save();

        return redirect()->route('jenis.index')->with('sukses','berhasil ubah data !');
    }
    
    public function destroy($id) {
        $data = Jenis::findOrFail($id);        
        $data->delete();

        return redirect()->route('jenis.index')->with('sukses','berhasil hapus data !');
    }
}
