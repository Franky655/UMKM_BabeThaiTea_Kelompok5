<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PromoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dashboard', function () {
    return view('dashboard');
});

Route::resource('menu', MenuController::class);
Route::resource('slider', SliderController::class);
Route::resource('promo', PromoController::class);