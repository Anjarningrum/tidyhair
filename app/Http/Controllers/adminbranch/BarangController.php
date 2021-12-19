<?php

namespace App\Http\Controllers\adminbranch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function getbarang(){
        $user = User::find(Auth::user()->id);
        $barang = $user->barangs;
        return view('adminbranch.barang.barang', compact('barang'));
    }

    public function edit($id){
        $barang = Barang::findOrFail($id);
        $branch = Auth::user()->id;
        return view('adminbranch.barang.editbarang', compact('barang', 'branch'));
    }

    public function update($id, Request $req){
        $barang = Barang::findOrFail($id);

        if($req->file('image')){
            Storage::delete('public/'.$barang->photo);
            $file = $req->file('image')->store('imagebarang', 'public');
            $barang->image = $file;
        }
            $barang->nama = $req->name;
            $barang->harga = $req->harga;
            $barang->stok = $req->stok;
            $barang->diskon = $req->diskon;
            
            $barang->users()->detach();
            $barang->users()->attach($req->branch);
           
            $barang->save();

            return redirect()->route('adminbranch.barang');
    }

    public function delete($id){
        Barang::destroy($id);
        return redirect()->route('adminbranch.barang')->with('status','Berhasil Mengahapus Hair Style');
    }

    public function add(){
        $branch = Auth::user()->id;
        return view('adminbranch.barang.addbarang', compact('branch'));
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
            $barang->users()->attach($request->branch);
            

            return redirect()->route('adminbranch.barang')->with('status','Berhasil Menambah Produk Baru');
        }
    }
}
