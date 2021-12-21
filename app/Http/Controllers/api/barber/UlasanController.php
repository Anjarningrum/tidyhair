<?php

namespace App\Http\Controllers\api\barber;

use App\Models\Ulasanbarber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barber;
use App\Models\Customer;
use illuminate\Support\Facades\Response;
use File;
use Storage;
use Hash;
use Validator;
use Auth;

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
