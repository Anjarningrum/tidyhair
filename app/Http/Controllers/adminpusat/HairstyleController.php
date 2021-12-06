<?php

namespace App\Http\Controllers\adminpusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hairstyle;

class HairstyleController extends Controller
{
    public function gethairstyle(){
        $hair = Hairstyle::all();
        return view('adminpusat.hairstyle.hairstyle', compact('hair'));
    }

    public function edit($id){
        $hair = Hairstyle::findOrFail($id);
        return view('adminpusat.hairstyle.edithairstyle', compact('hair'));
    }

    public function update($id, Request $req){
        $hair = Hairstyle::findOrFail($id);

        $hair->save();

        return redirect()->route('adminpusat.hairstyle');

    }

    public function delete($id){
        Hairstyle::destroy($id);
        return redirect()->route('adminpusat.hairstyle')->with('status','Berhasil Mengahapus Hair Style');
    }

    public function add(){
        return view('adminpusat.hairstyle.addhairstyle');
    }

    public function save(Request $req){
        $req->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'admin_id' => 'required',
            'image' => 'required'
        ]);

        if($req->file('image')){
            //simpan foto produk yang di upload ke direkteri public/storage/imageproduct
            
            $file = $req->file('image')->store('imagehairstyle', 'public');
            
            Hairstyle::create([
                'nama' => $req->name,
                'deskripsi' => $req->deskripsi,
                'status' => $req->status,
                'admin_id' => $req->admin_id,
                'image' => $file
            ]);

            return redirect()->route('adminpusat.hairstyle')->with('status','Berhasil Menambah Hair Style');
        }else{
            return view('adminpusat.index');
        }    
    }
}
