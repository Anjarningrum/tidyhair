<?php

namespace App\Http\Controllers\adminbranch;

use App\Models\Pembayaranjasa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranjasaController extends Controller
{
    public function getpembayaranjasa(){
        $user = User::find(Auth::user()->id);
        $p = $user->pembayaranjasa;

        return view('adminbranch.pembayaranjasa.pembayaranjasa', compact('p'));
    }
}
