<?php

namespace App\Http\Controllers\adminbranch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Customer;
use App\Models\User;
use App\Models\Barber;
use App\Models\Jasa;
use App\Models\Artikel;
use App\Models\Transaksi;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        return view('adminbranch.index');
    }

    public function getproduk(){
        $p = Barang::select('id', 'created_at')
        ->get()->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $barangmc = [];
        $barangArr = [];

        foreach ($p as $key => $value) {
            $barangmc[(int)$key] = count($value);
        }
        
        for($i = 1; $i <= 12; $i++){
            if(!empty($barangmc[$i])){
                $barangArr[$i] = $barangmc[$i];    
            }else{
                $barangArr[$i] = 0;    
            }
        }
        return $barangArr;
    }

    public function getcustomer(){
        $c = Customer::select('id', 'created_at')
        ->get()->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $cusmc = [];
        $cusArr = [];

        foreach ($c as $key => $value) {
            $cusmc[(int)$key] = count($value);
        }
        
        for($i = 1; $i <= 12; $i++){
            if(!empty($cusmc[$i])){
                $cusArr[$i] = $cusmc[$i];    
            }else{
                $cusArr[$i] = 0;    
            }
        }
        return $cusArr;
    }

    public function getbranch(){
        $b = User::select('id', 'created_at')->role('adminbranch')
        ->get()->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $branchmc = [];
        $branchArr = [];

        foreach ($b as $key => $value) {
            $branchmc[(int)$key] = count($value);
        }
        
        for($i = 1; $i <= 12; $i++){
            if(!empty($branchmc[$i])){
                $branchArr[$i] = $branchmc[$i];    
            }else{
                $branchArr[$i] = 0;    
            }
        }
        return $branchArr;
    }

    public function getbarber(){
        $b = Barber::select('id', 'created_at')
        ->get()->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $barbermc = [];
        $barberArr = [];

        foreach ($b as $key => $value) {
            $barbermc[(int)$key] = count($value);
        }
        
        for($i = 1; $i <= 12; $i++){
            if(!empty($barbermc[$i])){
                $barberArr[$i] = $barbermc[$i];    
            }else{
                $barberArr[$i] = 0;    
            }
        }
        return $barberArr;
    }

    public function getjasa(){
        $j = Jasa::select('id', 'created_at')
        ->get()->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $jasamc = [];
        $jasaArr = [];

        foreach ($b as $key => $value) {
            $jasamc[(int)$key] = count($value);
        }
        
        for($i = 1; $i <= 12; $i++){
            if(!empty($jasamc[$i])){
                $jasaArr[$i] = $jasamc[$i];    
            }else{
                $jasaArr[$i] = 0;    
            }
        }
        return $jasaArr;
    }
}
