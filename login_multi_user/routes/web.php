<?php

use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SesiController::class, 'index']);
Route::post("/", [SesiController::class, 'login']);

