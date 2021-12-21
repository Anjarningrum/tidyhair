<?php

namespace App\Http\Controllers\api\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class BranchController extends Controller
{
    public function topbranch(){
        $b = User::role('adminbranch')->take(1)->get();

        $success = $b;
        return response()->json($success, 200);
    }
}
