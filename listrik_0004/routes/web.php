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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PembayaranController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);

Route::group(['middleware' => 'auth:admin'], function () {

    Route::view('/admin', 'admin');
});

// ADMIN
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'admin'])->middleware('auth:admin')->name('admin');
    // Route::get('/', 'HomeController@dasboardAdmin')->middleware('auth:admin')->name('admin.dasboard');

    //Route Tarif
    Route::get('/tarif', [TarifController::class, 'index']);
    Route::get('/tarif/create', [TarifController::class, 'create']);
    Route::post('/tarif/store', [TarifController::class, 'store']);
    Route::post('/tarif/update/{id}', [TarifController::class, 'update']);
    Route::get('/tarif/edit/{id}', [TarifController::class, 'edit']);
    Route::get('/tarif/delete/{id}', [TarifController::class, 'delete']);

    //Route pelanggan
    Route::get('/pelanggan', [PelangganController::class, 'index']);

    //Route tagihan
    Route::get('/tagihan', [TagihanController::class, 'index']);
    Route::get('/tagihan/details/{id}', [TagihanController::class, 'details']);
    Route::get('/tagihan/create', [TagihanController::class, 'create']);
    Route::post('/tagihan/store', [TagihanController::class, 'store']);
    Route::post('/tagihan/update/{id}', [TagihanController::class, 'update']);
    Route::get('/tagihan/edit/{id}', [TagihanController::class, 'edit']);
    Route::get('/tagihan/delete/{id}', [TagihanController::class, 'delete']);
    Route::get('/tagihan/print/{id}', [TagihanController::class, 'print']);
});


//Route Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/details/{id}', [PembayaranController::class, 'details']);
Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update']);
Route::get('/pembayaran/alert/{id}', [PembayaranController::class, 'alert']);
Route::get('/pembayaran/print/{id}', [PembayaranController::class, 'print']);

Route::get('logout', [LoginController::class,'logout']);
