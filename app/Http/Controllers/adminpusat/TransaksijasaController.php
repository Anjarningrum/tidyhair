<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Transaksijasa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaksijasaController extends Controller
{
    public function gettransaksijasa(){
        $tj = Transaksijasa::all();

        return view('adminpusat.transaksijasa.transaksijasa', compact('tj'));
    }
}
