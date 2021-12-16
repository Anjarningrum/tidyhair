<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Pembatalanbarang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembatalanbarangController extends Controller
{
    public function getpembatalanbarang(){
        $pb = Pembatalanbarang::all();

        return view('adminpusat.pembatalanbarang.pembatalanbarang', compact('pb'));
    }
}
