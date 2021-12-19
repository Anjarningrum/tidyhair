<?php

namespace App\Http\Controllers\adminbranch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PembatalanjasaController extends Controller
{
    public function getpembatalanjasa(){
        $user = User::find(Auth::user()->id);
        $pj = $user->pembatalanjasa;

        return view('adminbranch.pembatalanjasa.pembatalanjasa', compact('pj'));
    }
}
