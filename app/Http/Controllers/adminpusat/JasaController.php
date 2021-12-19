<?php

namespace App\Http\Controllers\adminpusat;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasa;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class JasaController extends Controller
{
    public function getjasa(){
        $jasa = Jasa::all();
        return view('adminpusat.jasa.jasa', compact('jasa'));
    }

    public function edit($id){
        $jasa = Jasa::findOrFail($id);
        $branch = User::role('adminbranch')->get();
        return view('adminpusat.jasa.editjasa', compact('jasa', 'branch'));
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

            foreach($req->branch as $b){
                $jasa->users()->attach($b);
            }
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
            
            $file = $request->file('image')->store('imagejasa', 'public');
            
            $jasa = Jasa::create([
                'nama' => $request->name,
                'harga' => $request->harga,
                'diskon' => $request->diskon,
                'image' => $file
            ]);
            $jasa->users()->attach(Auth::user()->id);

            return redirect()->route('adminpusat.jasa')->with('status','Berhasil Menambah Produk Baru');
        }
    }
}
