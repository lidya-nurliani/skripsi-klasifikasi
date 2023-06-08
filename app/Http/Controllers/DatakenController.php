<?php

namespace App\Http\Controllers;

use App\Models\Dataken;
use Illuminate\Http\Request;

class DatakenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataken = Dataken::all();
        return view('dataken.index-dataken',compact('dataken'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataken.create-dataken');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataken = new Dataken;
        $dataken->merk_kendaraan = $request->merk_kendaraan;
        $dataken->jenis_kendaraan = $request->jenis_kendaraan;
        $dataken->tahun_pembuatan = $request->tahun_pembuatan;
        $dataken->no_polisi = $request->no_polisi;
        $dataken->no_mesin = $request->no_mesin;
        $dataken->no_rangka = $request->no_rangka;
       
        $dataken->save();

        return redirect('index-dataken');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataken  $dataken
     * @return \Illuminate\Http\Response
     */
    public function show(Dataken $dataken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataken  $dataken
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataken = Dataken::findorfail($id);
        return view('dataken.edit-dataken',compact('dataken'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataken  $dataken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataken = Dataken::findorfail($id);
        $dataken->merk_kendaraan = $request->merk_kendaraan;
        $dataken->jenis_kendaraan = $request->jenis_kendaraan;
        $dataken->tahun_pembuatan = $request->tahun_pembuatan;
        $dataken->no_polisi = $request->no_polisi;
        $dataken->no_mesin = $request->no_mesin;
        $dataken->no_rangka = $request->no_rangka;
       
        $dataken->update();

        return redirect ('index-dataken')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataken  $dataken
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataken = Dataken::findorfail($id);
        $dataken->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
