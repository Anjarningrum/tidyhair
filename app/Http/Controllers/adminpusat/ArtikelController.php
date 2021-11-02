<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Artikel;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function getartikel(){
        $artikel = Artikel::all();
        return view('adminpusat.artikel.artikel', compact('artikel'));
    }

    public function edit($id){
        $artikel = Artikel::findOrFail($id);
        return view('adminpusat.artikel.editartikel', compact('artikel'));
    }

    public function update($id, Request $req){
        $user = Auth::user();
        $artikel = Artikel::findOrFail($id);
        $artikel->admin_id = $user->id;
        $artikel->judul = $req->judul;
        $artikel->slug = $req->slug;
        $artikel->isi = $req->isi;

        $artikel->save();

        return redirect()->route('adminpusat.artikel');

    }

    public function delete($id){
        Artikel::destroy($id);
        return redirect()->route('adminpusat.artikel')->with('status','Berhasil Mengahapus Produk');
    }

    public function add(){
        return view('adminpusat.artikel.addartikel');
    }

    public function save(Request $req){

        $artikel = Artikel::create([
            'admin_id' => Auth::user()->id,
            'judul' => $req->judul,
            'slug' => $req->slug,
            'isi' => $req->isi,
        ]);
        
        return redirect()->route('adminpusat.artikel');
    }
}
