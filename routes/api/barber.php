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
    Route::post('logout',[LoginController::class, 'logoutBarber'])->name('barber.logout');

});