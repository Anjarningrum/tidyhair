<?php

namespace App\Http\Controllers\adminbranch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Jasa;
use App\Models\User;

class JasaController extends Controller
{
    public function getjasa(){
        $jasa = Jasa::all();
        return view('adminbranch.jasa.jasa', compact('jasa'));
    }

    public function edit($id){
        $jasa = Jasa::findOrFail($id);
        $branch = Auth::user()->id;
        return view('adminbranch.jasa.editjasa', compact('jasa', 'branch'));
    }

    public function update($id, Request $req){
        $jasa = Jasa::findOrFail($id);

        if($req->file('image')){
            Storage::delete('public/'.$jasa->photo);
            $file = $req->file('image')->store('imagejasa', 'public');
            $jasa->image = $file;
        }
            $jasa->nama = $req->name;
            $jasa->harga = $req->harga;
            $jasa->diskon = $req->diskon;
            
            $jasa->users()->detach();
            $jasa->users()->attach($req->branch);
           
            $jasa->save();

        return redirect()->route('adminbranch.jasa');

    }

    public function delete($id){
        Jasa::destroy($id);
        return redirect()->route('adminbranch.jasa')->with('status','Berhasil Mengahapus Hair Style');
    }

    public function add(){
        return view('adminbranch.jasa.addjasa');
    }

    public function save(Request $request){
        if($request->file('image')){
            
            $file = $request->file('image')->store('imagejasa', 'public');
            
            $jasa = Jasa::create([
                'nama' => $request->name,
                'harga' => $request->harga,
                'diskon' => $request->diskon,
                'image' => $file
            ]);
            $jasa->users()->attach(Auth::user()->id);

            return redirect()->route('adminbranch.jasa')->with('status','Berhasil Menambah Produk Baru');
        }
    }
}
