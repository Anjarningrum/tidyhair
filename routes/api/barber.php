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

Route::post('barber/login',[LoginController::class, 'barberLogin'])->name('barberLogin');

Route::group( ['prefix' => 'barber','middleware' => ['auth:barber-api','scopes:barber'] ],function(){
   // authenticated staff routes here 
    Route::get('dashboard',[LoginController::class, 'barberDashboard']);
    Route::post('logout',[LoginController::class, 'barberlogout'])->name('barber.logout');

    Route::get('photo/{id}',[App\Http\Controllers\api\barber\HomeController::class, 'getphoto']);
    Route::get('profil',[App\Http\Controllers\api\barber\HomeController::class, 'profil']);
    Route::get('topartikel',[App\Http\Controllers\api\barber\ArtikelController::class, 'topartikel']);
    Route::get('ulasanpreview',[App\Http\Controllers\api\barber\UlasanController::class, 'ulasanpreview']);
    Route::get('ulasanall',[App\Http\Controllers\api\barber\UlasanController::class, 'ulasanall']);
    Route::get('artikel',[App\Http\Controllers\api\barber\ArtikelController::class, 'artikel']);

});
Route::group(['middleware' => ['auth:barber-api','scopes:barber']], function (){
    Route::get('/imagebarber/{photo}',[App\Http\Controllers\api\barber\HomeController::class, 'photo']);
});