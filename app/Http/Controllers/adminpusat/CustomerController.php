<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getcustomer(){
        $cus = Customer::all();
        return view('adminpusat.customer.customer', compact('cus'));
    }

    public function edit($id){
        $cus = Customer::findOrFail($id);
        return view('adminpusat.customer.editcustomer', compact('cus'));
    }

    public function update($id, Request $req){
        $cus = Customer::findOrFail($id);

        if($req->file('image')){
            Storage::delete('public/'.$cus->photo);
            $file = $req->file('image')->store('imagecustomer', 'public');
            $cus->photo = $file;
        }
            $cus->name = $req->name;
            $cus->email = $req->email;
            $cus->password = Hash::make($req->password);
            $cus->alamat = $req->alamat;
            $cus->no_telepon = $req->no_telepon;
            
            $cus->save();

            return redirect()->route('adminpusat.customer');
    }

    public function delete($id){
        Customer::destroy($id);
        return redirect()->route('adminpusat.customer')->with('status','Berhasil Mengahapus Produk');
    }

    public function add(){
        return view('adminpusat.customer.addcustomer');
    }

    public function save(Request $req){
        
        if($req->file('image')){
            
            $file = $req->file('image')->store('imagecustomer', 'public');
            
            $cus = Customer::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'no_telepon' => $req->no_telepon,
                'alamat' => $req->alamat,
                'photo' => $file
            ]);
            
            $cus->save();

            return redirect()->route('adminpusat.customer');
        }else{
            $cus = Customer::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'no_telepon' => $req->no_telepon,
                'alamat' => $req->alamat
            ]);
            
            $cus->save();

            return redirect()->route('adminpusat.customer');
        }

        $req->validate([
            'password' => 'required|min:6|confirmed',
            'no_telepon' => 'required|digits_between:9,11',
            'alamat' => 'required'
        ]);
        
        $cus = Customer::create([
            'name' => $req->name,
            'email' => $req->email,
            'no_telepon' => $req->no_telepon,
            'alamat' => $req->alamat,
            'password' => Hash::make($req->password),
        ]);
        
        return redirect()->route('adminpusat.customer');
    }
}
