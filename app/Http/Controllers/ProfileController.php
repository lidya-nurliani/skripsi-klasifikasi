<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use DB;
use Flash;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function index() {
        $user = User::all();
        return view('admin.data-user',compact('user'));
    }

    public function create()
    {
        $role = Role::all(); 
        return view('admin.create-user', compact('role'));
    }

    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
      
                
        $user->assignRole($request['role_id']);
    
        return redirect()->route('data-user')->with('success', 'User berhasil dibuat!');
        
    }

    public function updateProfile(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Validasi data berdasarkan peran pengguna
    $validatedData = [
        'password_baru' => ['required', 'min:8', 'confirmed'],
        'foto_profil' => ['image', 'max:2048'],
    ];

    if (auth()->user()->hasRole('admin')) {
        $validatedData['password_lama'] = ['required', 'password'];
    }

    $request->validate($validatedData);

    // Jika pengguna adalah admin dan memasukkan password lama
    if (auth()->user()->hasRole('admin') && !Hash::check($request->password_lama, $user->password)) {
        return redirect()->back()->with('error', 'Password lama tidak sesuai.');
    }

    $user->password = Hash::make($request->password_baru);

    if ($request->hasFile('foto_profil')) {
        // Proses upload foto dan simpan path ke database
        // ...
    }

    $user->save();

    return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
}


    public function edit($id) {
        
        $role = Role::all(); 
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user','role'));
    }
    
    public function update(UserEditRequest $request, $id){
        $validated = $request->validated();
        
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
    
        return redirect()->route('data-user')->with('success', 'User berhasil diupdate!');
    }

    public function destroy($id){
        
        User::findOrFail($id)->delete();
        return redirect()->route('data-user')->with('success', 'User berhasil dihapus!');
    }

}