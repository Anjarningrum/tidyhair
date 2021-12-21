<?php

namespace App\Http\Controllers\api\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barber;

class BarberController extends Controller
{
    public function topbarber(){
        $b = Barber::take(1)->get();

        $success = $b;
        return response()->json($success, 200);
    }
}
