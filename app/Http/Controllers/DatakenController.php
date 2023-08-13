<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Dataken, \App\Models\Merk, \App\Models\Jenis;
use Illuminate\Http\Request;
use App\Exports\DatakenExport;
use App\Imports\DatakenImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\DatakenRequest;

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
        $merk = Merk::all();
        $jenis = Jenis::all();
        return view('dataken.create-dataken', compact('merk','jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DatakenRequest $request)
    {
        $validated = $request->validated();
        
        $dataken = new Dataken;
        $dataken->merk_id = $request->merk_id;
        $dataken->jenis_id = $request->jenis_id;
        $dataken->tahun_pembuatan = $request->tahun_pembuatan;
        $dataken->no_polisi = $request->no_polisi;
        $dataken->no_mesin = $request->no_mesin;
        $dataken->no_rangka = $request->no_rangka;
       
        $dataken->save();

        return redirect ('index-dataken')->with('sukses', 'Data Berhasil Ditambah!');
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
        $merk = Merk::all();
        $jenis = Jenis::all();
        $dataken = Dataken::findorfail($id);
        return view('dataken.edit-dataken',compact('dataken','merk','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataken  $dataken
     * @return \Illuminate\Http\Response
     */
    public function update(DatakenRequest $request, $id)
    {
        $validated = $request->validated();

        $dataken = Dataken::findorfail($id);
        $dataken->merk_id = $request->merk_id;
        $dataken->jenis_id = $request->jenis_id;
        $dataken->tahun_pembuatan = $request->tahun_pembuatan;
        $dataken->no_polisi = $request->no_polisi;
        $dataken->no_mesin = $request->no_mesin;
        $dataken->no_rangka = $request->no_rangka;
       
        $dataken->update();

        return redirect ('index-dataken')->with('sukses', 'Data Berhasil Diubah!');
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

        return redirect('index-dataken')->with('sukses', 'Data Berhasil Dihapus!');
    }

    public function exportexcel() {
        return excel::download(new DatakenExport, 'dataken.xlsx');
    }

    public function importexcel(Request $request) {

        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

        // menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file di dalam folder public
		$file->move('file_dataken',$nama_file);
 
		// import data
		Excel::import(new DatakenImport, public_path('/file_dataken/'.$nama_file));
 
		//notifikasi dengan session
        Session::flash('sukses', 'data kendaraan berhasil di import');

		// alihkan halaman kembali
		return redirect('/index-dataken');
    }
}
