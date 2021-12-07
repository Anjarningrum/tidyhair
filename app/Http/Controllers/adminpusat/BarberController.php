<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Barber;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    public function getbarber(){
        $barber = Barber::all();
        return view('adminpusat.barber.barber', compact('barber'));
    }

    public function edit($id){
        $barber = Barber::findOrFail($id);
        $branch = User::role('adminbranch')->get();
        return view('adminpusat.barber.editbarber', compact('barber', 'branch'));
    }

    public function update($id, Request $req){
        $barber = Barber::findOrFail($id);

        if($req->file('image')){
            Storage::delete('public/'.$barber->photo);
            $file = $req->file('image')->store('imagebarber', 'public');
            $barber->photo = $file;
        }
            $barber->name = $req->name;
            $barber->email = $req->email;
            $barber->password = Hash::make($req->password);
            $barber->alamat = $req->alamat;
            $barber->no_telepon = $req->no_telepon;
            $barber->id_branch = $req->branch;
            
            $barber->save();

            return redirect()->route('adminpusat.barber');
        
    }

    public function delete($id){
        Barber::destroy($id);
        return redirect()->route('adminpusat.barber')->with('status','Berhasil Mengahapus Produk');
    }

    public function add(){
        $branch = User::role('adminbranch')->get();
        return view('adminpusat.barber.addbarber', compact('branch'));
    }

    public function save(Request $req){
        if($req->file('image')){
            
            $file = $req->file('image')->store('imagebarber', 'public');
            
            $barber = Barber::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'no_telepon' => $req->no_telepon,
                'alamat' => $req->alamat,
                'id_branch' => $req->branch,
                'photo' => $file
            ]);
            $barber->save();

            return redirect()->route('adminpusat.barber');
        }else{
            $barber = Barber::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'no_telepon' => $req->no_telepon,
                'alamat' => $req->alamat,
                'id_branch' => $req->branch
            ]);
            $barber->save();

            return redirect()->route('adminpusat.barber');
        }
    }
}
