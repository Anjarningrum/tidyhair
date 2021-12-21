<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\LoginController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('customer/login',[LoginController::class, 'customerLogin'])->name('customerLogin');

Route::group( ['prefix' => 'customer','middleware' => ['auth:customer-api','scopes:customer'] ],function(){
   // authenticated staff routes here 
    Route::get('dashboard',[LoginController::class, 'customerDashboard']);
    Route::post('logout',[LoginController::class, 'customerlogout'])->name('customer.logout');

    Route::get('photo/{id}',[App\Http\Controllers\api\customer\HomeController::class, 'getphoto']);
    Route::get('profil',[App\Http\Controllers\api\customer\HomeController::class, 'profil']);
    Route::get('topbranch',[App\Http\Controllers\api\customer\BranchController::class, 'topbranch']);
    Route::get('ulasanpreview',[App\Http\Controllers\api\customer\UlasanController::class, 'ulasanpreview']);
    Route::get('ulasanall',[App\Http\Controllers\api\customer\UlasanController::class, 'ulasanall']);
    Route::get('artikel',[App\Http\Controllers\api\customer\ArtikelController::class, 'artikel']);
});