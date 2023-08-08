<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use DB;
use Flash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = User::all();
        return view('profile',compact('user'));
    }

    public function create()
    {
        $role = Role::all(); 
        return view('admin.create-user', compact('role'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
      
                
        $user->assignRole($request['role_id']);
    
        return redirect()->route('profile')->with('success', 'User berhasil dibuat!');
        
    }

    public function edit($id) {
        
        $role = Role::all(); 
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user','role'));
    }
    
    public function update(Request $request, $id){
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($user->hasRole('Admin')) {
            $user->removeRole('Admin');
            $user->assignRole('user');
        }

        $user->assignRole($request['role_id']);
    
        return redirect()->route('profile')->with('success', 'User berhasil diupdate!');
    }

    public function destroy($id){
        
        User::findOrFail($id)->delete();
        return redirect()->route('profile')->with('success', 'User berhasil dihapus!');
    }

}