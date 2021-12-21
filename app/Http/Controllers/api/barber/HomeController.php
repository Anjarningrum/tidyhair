<?php

namespace App\Http\Controllers\api\barber;

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
        $barber = Barber::find($id);
        $img = file_get_contents(storage_path('app/public/'.$barber->photo));
        
        return response($img)->header('Content-type', 'image/png');
    }

    public function photo($photo){
        $id = Auth::user()->id;
        $barber = Barber::find($id);
        $img = file_get_contents(storage_path('app\public\imagebarber\\'.$barber->photo));
        
        return response($img)->header('Content-type', 'image/png');
    }

    public function profil(){
        $id = Auth::user()->id;
        $barber = Barber::find($id);

        return response()->json($barber, 200);
    }
}
