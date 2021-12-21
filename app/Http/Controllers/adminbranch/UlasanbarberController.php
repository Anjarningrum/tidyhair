<?php

namespace App\Http\Controllers\adminbranch;

use App\Models\Ulasanbarber;
use App\Models\Barber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UlasanbarberController extends Controller
{
    public function getulasanbarber(){
        $u = Ulasanbarber::all();

        return view('adminpusat.ulasanbarber.ulasanbarber', compact('u'));
    }
}
