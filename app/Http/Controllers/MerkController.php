<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;
use App\Http\Requests\MerkRequest;

class MerkController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $merk = Merk::all();
        return view('merk.index', compact('merk'));
    }
    
    public function create() {        
        return view('merk.create');
    }

    public function store(MerkRequest $request) {
        $validated = $request->validated();

        $data = new Merk;
        $data->merk = $request->merk;        
        $data->save();

        return redirect()->route('merk.index')->with('sukses','merk Data Created !');
    }

    public function edit($id) {
        $data = Merk::findOrFail($id);        
        return view('merk.edit', compact('data'));
    }
    
    public function update(MerkRequest $request, $id) {
        $validated = $request->validated();

        $data = Merk::findOrFail($id);        
        $data->merk = $request->merk;        
        $data->save();

        return redirect()->route('merk.index')->with('sukses','merk Data Updated !');
    }
    
    public function destroy($id) {
        $data = Merk::findOrFail($id);        
        $data->delete();

        return redirect()->route('merk.index')->with('sukses','merk Data Deleted !');
    }
}
