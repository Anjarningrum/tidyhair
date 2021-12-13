<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barber;
use App\Models\Customer;
use Hash;
use Validator;
use Auth;

class LoginController extends Controller
{
    public function barberDashboard()
    {
        $barber = Barber::all();
        $success = $barber;

        return response()->json($success, 200);
    }

    public function customerDashboard()
    {
        $customer = Customer::all();
        $success = $customer;

        return response()->json($success, 200);
    }

    public function barberLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->all()]);
        }

        if(auth()->guard('barber')->attempt(['email' => request('email'), 'password' => request('password')])){

            config(['auth.guards.api.provider' => 'barber']);
            
            $barber = Barber::select('barbers.*')->find(auth()->guard('barber')->user()->id);
            $success =  $barber;
            $success['token'] =  $barber->createToken('MyApp',['barber'])->accessToken; 

            return response()->json($success, 200);
        }else{ 
            return response()->json(['error' => ['Email and Password are Wrong.']], 200);
        }
    }

    public function customerLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->all()]);
        }

        if(auth()->guard('customer')->attempt(['email' => request('email'), 'password' => request('password')])){

            config(['auth.guards.api.provider' => 'customer']);
            
            $customer = Customer::select('customers.*')->find(auth()->guard('customer')->user()->id);
            $success =  $customer;
            $success['token'] =  $customer->createToken('MyApp',['customer'])->accessToken; 

            return response()->json($success, 200);
        }else{ 
            return response()->json(['error' => ['Email and Password are Wrong.']], 200);
        }
    }
    public function customerlogout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
    public function barberlogout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
