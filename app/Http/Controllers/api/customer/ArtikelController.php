<?php

namespace App\Http\Controllers\api\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function topartikel(){
        $artikel =  Artikel::take(5)->get();
        $success = $artikel;
        return response()->json($success, 200);
    }
    public function artikel(){
        $artikel = Artikel::all();
        $success = $artikel;
        return response()->json($success, 200);
    }
}
