<?php

namespace App\Http\Controllers\adminbranch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orderbarang;
use App\Models\User;
use App\Models\Transaksibarang;
use App\Models\Pembatalanbarang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderbarangController extends Controller
{
    public function getorderbarang(){
        $user = User::find(Auth::user()->id);
        $ob = $user->orderbarang;
        //return $ob;
        return view('adminbranch.orderbarang.orderbarang', compact('ob'));
    }

    public function edit($id){
        $ob = Orderbarang::findOrFail($id);
        return view('adminbranch.orderbarang.editorderbarang', compact('ob'));
    }

    public function update($id, Request $req){
        $ob = Orderbarang::findOrFail($id);
        $t = new Transaksibarang;
        $p = new Pembatalanbarang;

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

        if($req->status == 'canceled'){
            $p->invoice = 'CN-0'.$ob->id;
            $p->branch_id = $ob->user->id;
            $p->customer_id = $ob->customer[0]->id;
            $p->orderbarang_id = $ob->id;
            $p->total_bayar = $ob->total_harga;
            $p->metode_pembayaran = $ob->metode_pembayaran;
            $p->save();
        }else{
            if(Pembatalanbarang::where('orderbarang_id', $ob->id)->firstOrFail()){
                Pembatalanbarang::where('orderbarang_id', $ob->id)->delete();
            }
        }
        $ob->save();
        return redirect()->route('adminbranch.orderbarang');
    }

    public function delete($id){
        $ob = Orderbarang::destroy($id);
        return redirect()->route('adminbranch.orderbarang');
    }
}
