<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getcustomer(){
        $user = User::role('customer')->get();
        return view('adminpusat.customer.customer', compact('user'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('adminpusat.customer.editcustomer', compact('user'));
    }

    public function update($id, Request $req){
        $user = User::findOrFail($id);

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->alamat = $req->alamat;
        $user->no_telepon = $req->no_telepon;

        $user->save();

        return redirect()->route('adminpusat.customer');

    }

    public function delete($id){
        User::destroy($id);
        return redirect()->route('adminpusat.customer')->with('status','Berhasil Mengahapus Produk');
    }

    public function add(){
        return view('adminpusat.customer.addcustomer');
    }

    public function save(Request $req){

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'no_telepon' => $req->no_telepon,
            'alamat' => $req->alamat,
        ]);
        $user->assignRole('customer');
        return redirect()->route('adminpusat.customer');
    }
}
