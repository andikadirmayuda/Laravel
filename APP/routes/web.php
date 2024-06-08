<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\konsumenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang', barangController::class);
// Route::post('/barang/store', [barangController::class, 'store']);
Route::resource('konsumen', konsumenController::class);
