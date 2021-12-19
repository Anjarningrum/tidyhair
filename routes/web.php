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

    Route::get('adminpusat/hairstyle', [App\Http\Controllers\adminpusat\HairstyleController::class, 'gethairstyle'])->name('adminpusat.hairstyle');
    Route::get('adminpusat/edithairstyle/{id}', [App\Http\Controllers\adminpusat\HairstyleController::class, 'edit'])->name('adminpusat.edithairstyle');
    Route::post('adminpusat/edithairstyle/{id}', [App\Http\Controllers\adminpusat\HairstyleController::class, 'update'])->name('adminpusat.hairstyle.update');
    Route::get('adminpusat/hairstyle/delete/{id}', [App\Http\Controllers\adminpusat\HairstyleController::class, 'delete'])->name('adminpusat.hairstyle.delete');
    Route::get('adminpusat/hairstyle/add', [App\Http\Controllers\adminpusat\HairstyleController::class, 'add'])->name('adminpusat.hairstyle.add');
    Route::post('adminpusat/hairstyle/add', [App\Http\Controllers\adminpusat\HairstyleController::class, 'save'])->name('adminpusat.hairstyle.save');

    Route::get('adminpusat/artikel', [App\Http\Controllers\adminpusat\ArtikelController::class, 'getartikel'])->name('adminpusat.artikel');
    Route::get('adminpusat/editartikel/{id}', [App\Http\Controllers\adminpusat\ArtikelController::class, 'edit'])->name('adminpusat.editartikel');
    Route::post('adminpusat/editartikel/{id}', [App\Http\Controllers\adminpusat\ArtikelController::class, 'update'])->name('adminpusat.artikel.update');
    Route::get('adminpusat/artikel/delete/{id}', [App\Http\Controllers\adminpusat\ArtikelController::class, 'delete'])->name('adminpusat.artikel.delete');
    Route::get('adminpusat/artikel/add', [App\Http\Controllers\adminpusat\ArtikelController::class, 'add'])->name('adminpusat.artikel.add');
    Route::post('adminpusat/artikel/add', [App\Http\Controllers\adminpusat\ArtikelController::class, 'save'])->name('adminpusat.artikel.save');

    Route::get('adminpusat/barang', [App\Http\Controllers\adminpusat\BarangController::class, 'getbarang'])->name('adminpusat.barang');
    Route::get('adminpusat/editbarang/{id}', [App\Http\Controllers\adminpusat\BarangController::class, 'edit'])->name('adminpusat.editbarang');
    Route::post('adminpusat/editbarang/{id}', [App\Http\Controllers\adminpusat\BarangController::class, 'update'])->name('adminpusat.barang.update');
    Route::get('adminpusat/barang/delete/{id}', [App\Http\Controllers\adminpusat\BarangController::class, 'delete'])->name('adminpusat.barang.delete');
    Route::get('adminpusat/barang/add', [App\Http\Controllers\adminpusat\BarangController::class, 'add'])->name('adminpusat.barang.add');
    Route::post('adminpusat/barang/add', [App\Http\Controllers\adminpusat\BarangController::class, 'save'])->name('adminpusat.barang.save');

    Route::get('adminpusat/jasa', [App\Http\Controllers\adminpusat\JasaController::class, 'getjasa'])->name('adminpusat.jasa');
    Route::get('adminpusat/editjasa/{id}', [App\Http\Controllers\adminpusat\JasaController::class, 'edit'])->name('adminpusat.editjasa');
    Route::post('adminpusat/editjasa/{id}', [App\Http\Controllers\adminpusat\JasaController::class, 'update'])->name('adminpusat.jasa.update');
    Route::get('adminpusat/jasa/delete/{id}', [App\Http\Controllers\adminpusat\JasaController::class, 'delete'])->name('adminpusat.jasa.delete');
    Route::get('adminpusat/jasa/add', [App\Http\Controllers\adminpusat\JasaController::class, 'add'])->name('adminpusat.jasa.add');
    Route::post('adminpusat/jasa/add', [App\Http\Controllers\adminpusat\JasaController::class, 'save'])->name('adminpusat.jasa.save');

    Route::get('adminpusat/orderbarang', [App\Http\Controllers\adminpusat\OrderbarangController::class, 'getorderbarang'])->name('adminpusat.orderbarang');
    Route::get('adminpusat/orderbarang/{id}', [App\Http\Controllers\adminpusat\OrderbarangController::class, 'edit'])->name('adminpusat.editorderbarang');
    Route::post('adminpusat/orderbarang/{id}', [App\Http\Controllers\adminpusat\OrderbarangController::class, 'update'])->name('adminpusat.orderbarang.update');
    Route::get('adminpusat/orderbarang/delete/{id}', [App\Http\Controllers\adminpusat\OrderbarangController::class, 'delete'])->name('adminpusat.orderbarang.delete');

    Route::get('adminpusat/orderjasa', [App\Http\Controllers\adminpusat\OrderjasaController::class, 'getorderjasa'])->name('adminpusat.orderjasa');
    Route::get('adminpusat/orderjasa/{id}', [App\Http\Controllers\adminpusat\OrderjasaController::class, 'edit'])->name('adminpusat.editorderjasa');
    Route::post('adminpusat/orderjasa/{id}', [App\Http\Controllers\adminpusat\OrderjasaController::class, 'update'])->name('adminpusat.orderjasa.update');
    Route::get('adminpusat/orderjasa/delete/{id}', [App\Http\Controllers\adminpusat\OrderjasaController::class, 'delete'])->name('adminpusat.orderjasa.delete');

    Route::get('adminpusat/transaksibarang', [App\Http\Controllers\adminpusat\TransaksibarangController::class, 'gettransaksibarang'])->name('adminpusat.transaksibarang');
    Route::get('adminpusat/pembayaranbarang', [App\Http\Controllers\adminpusat\PembayaranbarangController::class, 'getpembayaranbarang'])->name('adminpusat.pembayaranbarang');
    Route::get('adminpusat/pembatalanbarang', [App\Http\Controllers\adminpusat\PembatalanbarangController::class, 'getpembatalanbarang'])->name('adminpusat.pembatalanbarang');

    Route::get('adminpusat/transaksijasa', [App\Http\Controllers\adminpusat\TransaksijasaController::class, 'gettransaksijasa'])->name('adminpusat.transaksijasa');
    Route::get('adminpusat/pembayaranjasa', [App\Http\Controllers\adminpusat\PembayaranjasaController::class, 'getpembayaranjasa'])->name('adminpusat.pembayaranjasa');
    Route::get('adminpusat/pembatalanjasa', [App\Http\Controllers\adminpusat\PembatalanjasaController::class, 'getpembatalanjasa'])->name('adminpusat.pembatalanjasa');

});


Route::group(['middleware' => ['role:adminbranch']], function (){
    Route::get('adminbranch', [App\Http\Controllers\adminbranch\HomeController::class, 'index'])->name('adminbranch.index');

    Route::get('adminbranch/profile', [App\Http\Controllers\adminbranch\ProfileController::class, 'getprofile'])->name('adminbranch.profile');
    Route::get('adminbranch/editprofile', [App\Http\Controllers\adminbranch\ProfileController::class, 'edit'])->name('adminbranch.profile.edit');
    Route::post('adminbranch/editprofile/{id}', [App\Http\Controllers\adminbranch\ProfileController::class, 'update'])->name('adminbranch.profile.update');
    
    Route::get('adminbranch/barber', [App\Http\Controllers\adminbranch\BarberController::class, 'getbarber'])->name('adminbranch.barber');
    Route::get('adminbranch/editbarber/{id}', [App\Http\Controllers\adminbranch\BarberController::class, 'edit'])->name('adminbranch.editbarber');
    Route::post('adminbranch/editbarber/{id}', [App\Http\Controllers\adminbranch\BarberController::class, 'update'])->name('adminbranch.barber.update');
    Route::get('adminbranch/barber/delete/{id}', [App\Http\Controllers\adminbranch\BarberController::class, 'delete'])->name('adminbranch.barber.delete');
    Route::get('adminbranch/barber/add', [App\Http\Controllers\adminbranch\BarberController::class, 'add'])->name('adminbranch.barber.add');
    Route::post('adminbranch/barber/add', [App\Http\Controllers\adminbranch\BarberController::class, 'save'])->name('adminbranch.barber.save');

    Route::get('adminbranch/customer', [App\Http\Controllers\adminbranch\CustomerController::class, 'getcustomer'])->name('adminbranch.customer');
    Route::get('adminbranch/viewcustomer/{id}', [App\Http\Controllers\adminbranch\CustomerController::class, 'viewcustomer'])->name('adminbranch.viewcustomer');
    
    Route::get('adminbranch/barang', [App\Http\Controllers\adminbranch\BarangController::class, 'getbarang'])->name('adminbranch.barang');
    Route::get('adminbranch/editbarang/{id}', [App\Http\Controllers\adminbranch\BarangController::class, 'edit'])->name('adminbranch.editbarang');
    Route::post('adminbranch/editbarang/{id}', [App\Http\Controllers\adminbranch\BarangController::class, 'update'])->name('adminbranch.barang.update');
    Route::get('adminbranch/barang/delete/{id}', [App\Http\Controllers\adminbranch\BarangController::class, 'delete'])->name('adminbranch.barang.delete');
    Route::get('adminbranch/barang/add', [App\Http\Controllers\adminbranch\BarangController::class, 'add'])->name('adminbranch.barang.add');
    Route::post('adminbranch/barang/add', [App\Http\Controllers\adminbranch\BarangController::class, 'save'])->name('adminbranch.barang.save');
    
    Route::get('adminbranch/jasa', [App\Http\Controllers\adminbranch\JasaController::class, 'getjasa'])->name('adminbranch.jasa');
    Route::get('adminbranch/editjasa/{id}', [App\Http\Controllers\adminbranch\JasaController::class, 'edit'])->name('adminbranch.editjasa');
    Route::post('adminbranch/editjasa/{id}', [App\Http\Controllers\adminbranch\JasaController::class, 'update'])->name('adminbranch.jasa.update');
    Route::get('adminbranch/jasa/delete/{id}', [App\Http\Controllers\adminbranch\JasaController::class, 'delete'])->name('adminbranch.jasa.delete');
    Route::get('adminbranch/jasa/add', [App\Http\Controllers\adminbranch\JasaController::class, 'add'])->name('adminbranch.jasa.add');
    Route::post('adminbranch/jasa/add', [App\Http\Controllers\adminbranch\JasaController::class, 'save'])->name('adminbranch.jasa.save');

    Route::get('adminbranch/orderbarang', [App\Http\Controllers\adminbranch\OrderbarangController::class, 'getorderbarang'])->name('adminbranch.orderbarang');
    Route::get('adminbranch/orderbarang/{id}', [App\Http\Controllers\adminbranch\OrderbarangController::class, 'edit'])->name('adminbranch.editorderbarang');
    Route::post('adminbranch/orderbarang/{id}', [App\Http\Controllers\adminbranch\OrderbarangController::class, 'update'])->name('adminbranch.orderbarang.update');
    Route::get('adminbranch/orderbarang/delete/{id}', [App\Http\Controllers\adminbranch\OrderbarangController::class, 'delete'])->name('adminbranch.orderbarang.delete');

    Route::get('adminbranch/orderjasa', [App\Http\Controllers\adminbranch\OrderjasaController::class, 'getorderjasa'])->name('adminbranch.orderjasa');
    Route::get('adminbranch/orderjasa/{id}', [App\Http\Controllers\adminbranch\OrderjasaController::class, 'edit'])->name('adminbranch.editorderjasa');
    Route::post('adminbranch/orderjasa/{id}', [App\Http\Controllers\adminbranch\OrderjasaController::class, 'update'])->name('adminbranch.orderjasa.update');
    Route::get('adminbranch/orderjasa/delete/{id}', [App\Http\Controllers\adminbranch\OrderjasaController::class, 'delete'])->name('adminbranch.orderjasa.delete');

    Route::get('adminbranch/transaksibarang', [App\Http\Controllers\adminbranch\TransaksibarangController::class, 'gettransaksibarang'])->name('adminbranch.transaksibarang');
    Route::get('adminbranch/pembayaranbarang', [App\Http\Controllers\adminbranch\PembayaranbarangController::class, 'getpembayaranbarang'])->name('adminbranch.pembayaranbarang');
    Route::get('adminbranch/pembatalanbarang', [App\Http\Controllers\adminbranch\PembatalanbarangController::class, 'getpembatalanbarang'])->name('adminbranch.pembatalanbarang');

    Route::get('adminbranch/transaksijasa', [App\Http\Controllers\adminbranch\TransaksijasaController::class, 'gettransaksijasa'])->name('adminbranch.transaksijasa');
    Route::get('adminbranch/pembayaranjasa', [App\Http\Controllers\adminbranch\PembayaranjasaController::class, 'getpembayaranjasa'])->name('adminbranch.pembayaranjasa');
    Route::get('adminbranch/pembatalanjasa', [App\Http\Controllers\adminbranch\PembatalanjasaController::class, 'getpembatalanjasa'])->name('adminbranch.pembatalanjasa');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
