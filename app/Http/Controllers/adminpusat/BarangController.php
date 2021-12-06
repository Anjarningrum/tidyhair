<?php

namespace App\Http\Controllers\adminpusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function getbarang(){
        $barang = Barang::all();
        return view('adminpusat.barang.barang', compact('barang'));
    }

    public function edit($id){
        $barang = Barang::findOrFail($id);
        return view('adminpusat.barang.editbarang', compact('barang'));
    }

    public function update($id, Request $req){
        $barang = Barang::findOrFail($id);

        $barang->save();

        return redirect()->route('adminpusat.barang');

    }

    public function delete($id){
        Barang::destroy($id);
        return redirect()->route('adminpusat.barang')->with('status','Berhasil Mengahapus Hair Style');
    }

    public function add(){
        return view('adminpusat.barang.addbarang');
    }

    public function save(Request $req){
        
    }
}
