<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Transaksibarang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaksibarangController extends Controller
{
    public function gettransaksibarang(){
        $tb = Transaksibarang::all();

        return view('adminpusat.transaksibarang.transaksibarang', compact('tb'));
    }
}
