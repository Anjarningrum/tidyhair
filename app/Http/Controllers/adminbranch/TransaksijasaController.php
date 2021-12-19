<?php

namespace App\Http\Controllers\adminbranch;

use App\Models\Transaksijasa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransaksijasaController extends Controller
{
    public function gettransaksijasa(){
        $user = User::find(Auth::user()->id);
        $tj = $user->transaksijasa;

        return view('adminbranch.transaksijasa.transaksijasa', compact('tj'));
    }
}
