<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dashboard', function () {
    return view('dashboard');
});

Route::resource('informasi', InformasiController::class);

// Route::get('/informasi', [HomeController::class, 'informasi']);

