<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Pembayaranjasa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranjasaController extends Controller
{
    public function getpembayaranjasa(){
        $p = Pembayaranjasa::all();

        return view('adminpusat.pembayaranjasa.pembayaranjasa', compact('p'));
    }
}
