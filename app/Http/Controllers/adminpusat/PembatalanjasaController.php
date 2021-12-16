<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Pembatalanjasa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembatalanjasaController extends Controller
{
    public function getpembatalanjasa(){
        $pj = Pembatalanjasa::all();

        return view('adminpusat.pembatalanjasa.pembatalanjasa', compact('pj'));
    }
}
