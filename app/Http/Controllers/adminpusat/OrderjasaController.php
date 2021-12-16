<?php

namespace App\Http\Controllers\adminpusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orderjasa;
use App\Models\Transaksijasa;
use App\Models\Pembatalanjasa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderjasaController extends Controller
{
    public function getorderjasa(){
        $oj = Orderjasa::all();
        
        return view('adminpusat.orderjasa.orderjasa', compact('oj'));
    }

    public function edit($id){
        $oj = Orderjasa::findOrFail($id);
        return view('adminpusat.orderjasa.editorderjasa', compact('oj'));
    }

    public function update($id, Request $req){
        $oj = Orderjasa::findOrFail($id);
        $t = new Transaksijasa;
        $p = new Pembatalanjasa;

        $oj->status = $req->status;

        if($req->status == 'finished'){
            $t->invoice = 'IN-0'.$oj->id;
            $t->branch_id = $oj->user->id;
            $t->barber_id = $oj->barber->id;
            $t->customer_id = $oj->customer[0]->id;
            $t->orderjasa_id = $oj->id;
            $t->total_bayar = $oj->total_harga;
            $t->metode_pembayaran = $oj->metode_pembayaran;
            $t->save();
        }else{
            if(Transaksijasa::where('orderjasa_id', $oj->id)->firstOrFail()){
                Transaksijasa::where('orderjasa_id', $oj->id)->delete();
            }
        }

        if($req->status == 'canceled'){
            $p->invoice = 'CNJ-0'.$oj->id;
            $p->branch_id = $oj->user->id;
            $p->barber_id = $oj->barber->id;
            $p->customer_id = $oj->customer[0]->id;
            $p->orderjasa_id = $oj->id;
            $p->total_bayar = $oj->total_harga;
            $p->metode_pembayaran = $oj->metode_pembayaran;
            $p->save();
        }else{
            if(Pembatalanjasa::where('orderjasa_id', $oj->id)->firstOrFail()){
                Pembatalanjasa::where('orderjasa_id', $oj->id)->delete();
            }
        }
        $oj->save();
        return redirect()->route('adminpusat.orderjasa');
    }

    public function delete($id){
        $oj = Orderjasa::destroy($id);
        return redirect()->route('adminpusat.orderjasa');
    }
}
