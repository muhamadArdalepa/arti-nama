<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/api/index',[PenggunaController::class,'index']);
Route::post('/api/index',[PenggunaController::class,'store']);
