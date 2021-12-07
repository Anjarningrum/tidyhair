<?php

namespace App\Http\Controllers\adminpusat;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;

class BarangController extends Controller
{
    public function getbarang(){
        $barang = User::find(Auth::user()->id)->barangs;
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

    public function save(Request $request){
        if($request->file('image')){
            
            $file = $request->file('image')->store('imageproduct', 'public');
            
            $barang = Barang::create([
                'nama' => $request->name,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'diskon' => $request->diskon,
                'image' => $file
            ]);
            $barang->users()->attach(Auth::user()->id);

            return redirect()->route('adminpusat.barang')->with('status','Berhasil Menambah Produk Baru');
        }
    }
}
