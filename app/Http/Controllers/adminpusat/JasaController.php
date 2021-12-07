<?php

namespace App\Http\Controllers\adminpusat;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasa;
use App\Models\User;

class JasaController extends Controller
{
    public function getjasa(){
        $jasa = User::find(Auth::user()->id)->jasas;
        return view('adminpusat.jasa.jasa', compact('jasa'));
    }

    public function edit($id){
        $jasa = Jasa::findOrFail($id);
        return view('adminpusat.jasa.editjasa', compact('jasa'));
    }

    public function update($id, Request $req){
        $jasa = Jasa::findOrFail($id);

        $jasa->save();

        return redirect()->route('adminpusat.jasa');

    }

    public function delete($id){
        Jasa::destroy($id);
        return redirect()->route('adminpusat.jasa')->with('status','Berhasil Mengahapus Hair Style');
    }

    public function add(){
        return view('adminpusat.jasa.addjasa');
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
