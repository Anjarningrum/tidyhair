<?php

namespace App\Http\Controllers\adminpusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orderbarang;
use App\Models\Transaksibarang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderbarangController extends Controller
{
    public function getorderbarang(){
        $ob = Orderbarang::all();
        //return $ob;
        return view('adminpusat.orderbarang.orderbarang', compact('ob'));
    }

    public function edit($id){
        $ob = Orderbarang::findOrFail($id);
        return view('adminpusat.orderbarang.editorderbarang', compact('ob'));
    }

    public function update($id, Request $req){
        $ob = Orderbarang::findOrFail($id);
        $t = new Transaksibarang;

        $ob->status = $req->status;
        
        if($req->status == 'finished'){
            $t->invoice = 'IN-0'.$ob->id;
            $t->branch_id = $ob->user->id;
            $t->customer_id = $ob->customer[0]->id;
            $t->orderbarang_id = $ob->id;
            $t->total_bayar = $ob->total_harga;
            $t->metode_pembayaran = $ob->metode_pembayaran;
            $t->save();
        }else{
            if(Transaksibarang::where('orderbarang_id', $ob->id)->firstOrFail()){
                Transaksibarang::where('orderbarang_id', $ob->id)->delete();
            }
        }
        $ob->save();
        return redirect()->route('adminpusat.orderbarang');
    }

    public function delete($id){
        $ob = Orderbarang::destroy($id);
        return redirect()->route('adminpusat.orderbarang');
    }
}
