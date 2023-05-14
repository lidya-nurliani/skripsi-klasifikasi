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
    public function index()
    {
        $klasifikasi = Klasifikasi::all();
        return view('klasifikasi.index-klasifikasi',compact('klasifikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $klasifikasi = Klasifikasi::all();
        return view('klasifikasi.create-klasifikasi', compact('dataken'));
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
       
        $klasifikasi->save();

        return redirect ('index-klasifikasi')->with('toast_success', 'data berhasil Tersimpan!');
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

        return redirect ('index-klasifikasi')->with('toast_success', 'Data Berhasil Diubah!');
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
