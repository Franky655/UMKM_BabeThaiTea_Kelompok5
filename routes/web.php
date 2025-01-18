<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
=======
// Public Routes
>>>>>>> origin/TengkuMR
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/informasi', [HomeController::class, 'informasi']);
Route::get('/promo', [HomeController::class, 'promo']);
Route::get('/menu', [HomeController::class, 'menu']);
Route::get('/testimoni', [HomeController::class, 'testimoni']);

<<<<<<< HEAD
// Auth
=======
// Testimoni Store Route (No Auth Required)
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');

// Authentication Routes
>>>>>>> origin/TengkuMR
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

<<<<<<< HEAD
// Dashboard
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

=======
// Admin Dashboard Routes (Requires Auth)
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
>>>>>>> origin/TengkuMR
    Route::resource('sliders', SliderController::class);
    Route::resource('promo', PromoController::class);
    Route::resource('testimoni', TestimoniController::class);
    Route::resource('informasi', InformasiController::class);
    Route::resource('menu', MenuController::class);

<<<<<<< HEAD
    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);

=======
    // Contact Management
    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);

    // About Management
>>>>>>> origin/TengkuMR
    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);
});
