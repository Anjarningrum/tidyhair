<?php

namespace App\Http\Controllers\adminpusat;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function getbarang(){
        $barang = Barang::all();
        return view('adminpusat.barang.barang', compact('barang'));
    }

    public function edit($id){
        $barang = Barang::findOrFail($id);
        $branch = User::role('adminbranch')->get();
        return view('adminpusat.barang.editbarang', compact('barang', 'branch'));
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

            foreach($req->branch as $b){
                $barang->users()->attach($b);
            }
            $barang->save();

            return redirect()->route('adminpusat.barang');
    }

    public function delete($id){
        Barang::destroy($id);
        return redirect()->route('adminpusat.barang')->with('status','Berhasil Mengahapus Hair Style');
    }

    public function add(){
        $branch = User::role('adminbranch')->get();
        return view('adminpusat.barang.addbarang', compact('branch'));
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
            foreach($request->branch as $b){
                $barang->users()->attach($b);
            }
            

            return redirect()->route('adminpusat.barang')->with('status','Berhasil Menambah Produk Baru');
        }
    }
}
