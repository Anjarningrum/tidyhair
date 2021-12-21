<?php

namespace App\Http\Controllers\adminpusat;

use App\Models\Ulasanbarber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UlasanbarberController extends Controller
{
    public function getulasanbarber(){
        $u = Ulasanbarber::all();

        return view('adminpusat.ulasanbarber.ulasanbarber', compact('u'));
    }
}
