<?php

namespace App\Http\Controllers\api\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function ulasanpreview(){
        $id = Auth::user()->id;
        $ulasan = Ulasanbarber::where('barber_id', $id)->take(1)->first();
        $cus = Customer::find($ulasan->customer_id);


        $success = $ulasan;
        $success['customer'] = $cus->name;
        //$success['photo'] = $u->customer;
        return response()->json($success, 200);
    }

    public function ulasanall(){
        $u = Ulasanbarber::all();
        $success = $u;
        return response()->json($success, 200);
    }
}
