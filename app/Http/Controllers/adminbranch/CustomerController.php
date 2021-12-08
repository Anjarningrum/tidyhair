<?php

namespace App\Http\Controllers\adminbranch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function getcustomer(){
        $cus = Customer::all();
        return view('adminbranch.customer.customer', compact('cus'));
    }
}
