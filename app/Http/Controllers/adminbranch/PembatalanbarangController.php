<?php

namespace App\Http\Controllers\adminbranch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PembatalanbarangController extends Controller
{
    public function getpembatalanbarang(){
        $user = User::find(Auth::user()->id);
        $pb = $user->pembatalanbarang;

        return view('adminbranch.pembatalanbarang.pembatalanbarang', compact('pb'));
    }
}
