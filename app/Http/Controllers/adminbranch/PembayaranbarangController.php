<?php

namespace App\Http\Controllers\adminbranch;

use App\Models\Pembayaranbarang;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranbarangController extends Controller
{
    public function getpembayaranbarang(){
        $user = User::find(Auth::user()->id);
        $p = $user->pembayaranbarang;

        return view('adminbranch.pembayaranbarang.pembayaranbarang', compact('p'));
    }
}
