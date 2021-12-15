<?php

namespace App\Http\Controllers\adminpusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orderbarang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderbarangController extends Controller
{
    public function getorderbarang(){
        $ob = Orderbarang::all();

        return view('adminpusat.orderbarang.orderbarang', compact('ob'));
    }
}
