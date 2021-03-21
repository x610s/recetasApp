<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Auth::routes();
Route::resource('recetas', RecetaController::class);
Route::resource('/', HomeController::class);
