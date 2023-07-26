<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = User::all();
        return view('profile',compact('user'));
    }

    public function create()
    {
        return view('admin.create-user');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
    
        return redirect()->route('profile')->with('success', 'User berhasil dibuat!');
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user'));
    }
    
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
    
        return redirect()->route('profile')->with('success', 'User berhasil diupdate!');
    }

    public function destroy($id){
        User::findOrFail($id)->delete();
        return redirect()->route('profile')->with('success', 'User berhasil dihapus!');
    }

}