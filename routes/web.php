<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about-us', [HomeController::class,'aboutUs'])->name('aboutUs');
Route::get('/servizi', [HomeController::class,'servizi'])->name('servizi');
