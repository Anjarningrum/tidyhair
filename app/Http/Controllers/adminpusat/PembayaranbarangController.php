<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Pembayaranbarang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranbarangController extends Controller
{
    public function getpembayaranbarang(){
        $p = Pembayaranbarang::all();

        return view('adminpusat.pembayaranbarang.pembayaranbarang', compact('p'));
    }
}
