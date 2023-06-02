<?php

namespace App\Http\Controllers;

use App\Models\Dataken;
use App\Models\Klasifikasi;
use Illuminate\Http\Request;

class KlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataken = Dataken::all();
        $klasifikasi = Klasifikasi::all();
        return view('klasifikasi.create-klasifikasi', compact('klasifikasi', 'dataken'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $klasifikasi = new Klasifikasi;
        $klasifikasi->dataken_id = $request->dataken_id;
        $klasifikasi->bahan_bakar = $request->bahan_bakar;
        $klasifikasi->komponen_mesin = $request->komponen_mesin;
        $klasifikasi->ban = $request->ban;
        $klasifikasi->lampu_utama = $request->lampu_utama;
        $klasifikasi->kondisi_rem = $request->kondisi_rem;
       
        $klasifikasi->save();

        return redirect ('create-klasifikasi')->with('toast_success', 'data berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klasifikasi  $klasifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Klasifikasi $klasifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klasifikasi  $klasifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataken = Dataken::all();
        $klasifikasi = Klasifikasi::findorfail($id);
        return view('klasifikasi.edit-klasifikasi',compact('klasifikasi','dataken'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klasifikasi  $klasifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $klasifikasi = Klasifikasi::findorfail($id);
        $klasifikasi->update($request->all());

        return redirect ('create-klasifikasi')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klasifikasi  $klasifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $klasifikasi = Klasifikasi::findorfail($id);
        $klasifikasi->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
