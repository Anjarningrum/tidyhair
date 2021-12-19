<?php

namespace App\Http\Controllers\adminbranch;

use App\Models\Transaksibarang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransaksibarangController extends Controller
{
    public function gettransaksibarang(){
        $user = User::find(Auth::user()->id);
        $tb = $user->transaksibarang;
        
        return view('adminbranch.transaksibarang.transaksibarang', compact('tb'));
    }
}
