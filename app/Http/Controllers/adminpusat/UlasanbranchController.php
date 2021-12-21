<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Ulasanbranch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UlasanbranchController extends Controller
{
    public function getulasanbranch(){
        $u = Ulasanbranch::all();

        return view('adminpusat.ulasanbranch.ulasanbranch', compact('u'));
    }
}
