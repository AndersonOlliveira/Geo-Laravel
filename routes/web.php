<?php

use App\Http\Controllers\AssSistemaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidaLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginaController;

Route::get('/', [HomeController::class, 'index'])->name('login.index-login');

//Route::post('/', [ValidaLoginController::class, 'store']);

//Route::get('/index-lista',[PaginaController::class, 'index'])->name('pagina.index');

Route::post('/processar',[HomeController::class, 'loginProcess'])->name('login.processar');

Route::get('/indexAss',[PaginaController::class, 'index'])->name('indexAss');


//Route::get('/home', [HomeController::class, 'home'])->name('teste.home');

//Route::get('/valida/home', [ValidaLoginController::class, 'index']);

