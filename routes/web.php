<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidaLoginController;

Route::get('/', [ValidaLoginController::class, 'index']);

Route::post('/', [ValidaLoginController::class, 'store']);

//Route::get('/valida/home', [ValidaLoginController::class, 'index']);

