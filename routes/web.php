<?php

use App\Http\Controllers\BookingController;
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
    return view('welcome');
});


Route::get('/booking', [BookingController::class, 'index']);

Route::get('/booking/create', [BookingController::class, 'create']);

Route::post('/booking/store', [BookingController::class, 'store']);

Route::get('/daftar_harga', [BookingController::class, 'daftarHarga']);

Route::get('/about', [BookingController::class, 'about']);

Route::get('/produk', [BookingController::class, 'produk']);

Route::get('/chart', [BookingController::class, 'showChart']);