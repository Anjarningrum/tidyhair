<?php

namespace App\Http\Controllers\api\customer;

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

class HomeController extends Controller
{
    public function getphoto($id){
        //$id = Auth::user()->id;
        $cus = Customer::find($id);
        $img = file_get_contents(storage_path('app/public/'.$cus->photo));
        
        return response($img)->header('Content-type', 'image/png');
    }

    public function photo($photo){
        $id = Auth::user()->id;
        $cus = Customer::find($id);
        $img = file_get_contents(storage_path('app\public\imagebarber\\'.$cus->photo));
        
        return response($img)->header('Content-type', 'image/png');
    }

    public function profil(){
        $id = Auth::user()->id;
        $cus = Customer::find($id);

        return response()->json($cus, 200);
    }
}
