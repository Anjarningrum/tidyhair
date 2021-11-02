<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    public function getbarber(){
        $user = User::role('barber')->get();
        return view('adminpusat.barber.barber', compact('user'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('adminpusat.barber.editbarber', compact('user'));
    }

    public function update($id, Request $req){
        $user = User::findOrFail($id);

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->alamat = $req->alamat;
        $user->no_telepon = $req->no_telepon;

        $user->save();

        return redirect()->route('adminpusat.barber');

    }

    public function delete($id){
        User::destroy($id);
        return redirect()->route('adminpusat.barber')->with('status','Berhasil Mengahapus Produk');
    }

    public function add(){
        return view('adminpusat.barber.addbarber');
    }

    public function save(Request $req){

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'no_telepon' => $req->no_telepon,
            'alamat' => $req->alamat,
        ]);
        $user->assignRole('barber');
        return redirect()->route('adminpusat.barber');
    }
}
