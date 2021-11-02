<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => ['role:adminpusat']], function (){
    Route::get('adminpusat', [App\Http\Controllers\adminpusat\HomeController::class, 'index'])->name('adminpusat.index');

    Route::get('adminpusat/profile', [App\Http\Controllers\adminpusat\ProfileController::class, 'getprofile'])->name('adminpusat.profile');
    Route::get('adminpusat/editprofile', [App\Http\Controllers\adminpusat\ProfileController::class, 'edit'])->name('adminpusat.profile.edit');
    Route::post('adminpusat/editprofile/{id}', [App\Http\Controllers\adminpusat\ProfileController::class, 'update'])->name('adminpusat.profile.update');
    
    Route::get('adminpusat/branch', [App\Http\Controllers\adminpusat\BranchController::class, 'getbranch'])->name('adminpusat.branch');
    Route::get('adminpusat/editbranch/{id}', [App\Http\Controllers\adminpusat\BranchController::class, 'edit'])->name('adminpusat.editbranch');
    Route::post('adminpusat/editbranch/{id}', [App\Http\Controllers\adminpusat\BranchController::class, 'update'])->name('adminpusat.branch.update');
    Route::get('adminpusat/branch/delete/{id}', [App\Http\Controllers\adminpusat\BranchController::class, 'delete'])->name('adminpusat.branch.delete');
    Route::get('adminpusat/branch/add', [App\Http\Controllers\adminpusat\BranchController::class, 'add'])->name('adminpusat.branch.add');
    Route::post('adminpusat/branch/add', [App\Http\Controllers\adminpusat\BranchController::class, 'save'])->name('adminpusat.branch.save');

    Route::get('adminpusat/barber', [App\Http\Controllers\adminpusat\BarberController::class, 'getbarber'])->name('adminpusat.barber');
    Route::get('adminpusat/editbarber/{id}', [App\Http\Controllers\adminpusat\BarberController::class, 'edit'])->name('adminpusat.editbarber');
    Route::post('adminpusat/editbarber/{id}', [App\Http\Controllers\adminpusat\BarberController::class, 'update'])->name('adminpusat.barber.update');
    Route::get('adminpusat/barber/delete/{id}', [App\Http\Controllers\adminpusat\BarberController::class, 'delete'])->name('adminpusat.barber.delete');
    Route::get('adminpusat/barber/add', [App\Http\Controllers\adminpusat\BarberController::class, 'add'])->name('adminpusat.barber.add');
    Route::post('adminpusat/barber/add', [App\Http\Controllers\adminpusat\BarberController::class, 'save'])->name('adminpusat.barber.save');

    Route::get('adminpusat/customer', [App\Http\Controllers\adminpusat\CustomerController::class, 'getcustomer'])->name('adminpusat.customer');
    Route::get('adminpusat/editcustomer/{id}', [App\Http\Controllers\adminpusat\CustomerController::class, 'edit'])->name('adminpusat.editcustomer');
    Route::post('adminpusat/editcustomer/{id}', [App\Http\Controllers\adminpusat\CustomerController::class, 'update'])->name('adminpusat.customer.update');
    Route::get('adminpusat/customer/delete/{id}', [App\Http\Controllers\adminpusat\CustomerController::class, 'delete'])->name('adminpusat.customer.delete');
    Route::get('adminpusat/customer/add', [App\Http\Controllers\adminpusat\CustomerController::class, 'add'])->name('adminpusat.customer.add');
    Route::post('adminpusat/customer/add', [App\Http\Controllers\adminpusat\CustomerController::class, 'save'])->name('adminpusat.customer.save');

    Route::get('adminpusat/artikel', [App\Http\Controllers\adminpusat\ArtikelController::class, 'getartikel'])->name('adminpusat.artikel');
    Route::get('adminpusat/editartikel/{id}', [App\Http\Controllers\adminpusat\ArtikelController::class, 'edit'])->name('adminpusat.editartikel');
    Route::post('adminpusat/editartikel/{id}', [App\Http\Controllers\adminpusat\ArtikelController::class, 'update'])->name('adminpusat.artikel.update');
    Route::get('adminpusat/artikel/delete/{id}', [App\Http\Controllers\adminpusat\ArtikelController::class, 'delete'])->name('adminpusat.artikel.delete');
    Route::get('adminpusat/artikel/add', [App\Http\Controllers\adminpusat\ArtikelController::class, 'add'])->name('adminpusat.artikel.add');
    Route::post('adminpusat/artikel/add', [App\Http\Controllers\adminpusat\ArtikelController::class, 'save'])->name('adminpusat.artikel.save');
});


Route::group(['middleware' => ['role:adminbranch']], function (){
    Route::get('adminbranch', [App\Http\Controllers\adminbranch\HomeController::class, 'index'])->name('adminbranch.index');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
