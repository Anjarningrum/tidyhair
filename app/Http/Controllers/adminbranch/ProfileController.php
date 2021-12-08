<?php

namespace App\Http\Controllers\adminbranch;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getprofile(){
        $user = Auth::user();
        return view('adminbranch.profile.profile', compact('user'));
    }

    public function edit(){
        $user = Auth::user();
        return view('adminbranch.profile.editprofile', compact('user'));
    }

    public function update($id, Request $req){
        $user = User::findOrFail($id);

        if($req->file('image')){
            Storage::delete('public/'.$user->photo);
            $file = $req->file('image')->store('imagebranch', 'public');
            $user->photo = $file;
        }
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->alamat = $req->alamat;
            $user->no_telepon = $req->no_telepon;
            
            $user->save();

            return redirect()->route('adminbranch.profile');
    }
}
