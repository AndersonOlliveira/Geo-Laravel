<?php

use App\Http\Controllers\AssSistemaController;
use App\Http\Controllers\FuncoesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidaLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginaController;

Route::get('/', [HomeController::class, 'index'])->name('login.index-login');

//Route::post('/', [ValidaLoginController::class, 'store']);

Route::get('/ctosCadastro',[PaginaController::class, 'ctosCad'])->name('paginas.ctosCadastros');

Route::post('/processarRotas',[FuncoesController::class, 'cadCidade'])->name('processarRotas');

Route::post('/processar',[HomeController::class, 'loginProcess'])->name('login.processar');

Route::get('/indexAss',[PaginaController::class, 'index'])->name('indexAss');


//Route::get('/home', [HomeController::class, 'home'])->name('teste.home');

//Route::get('/valida/home', [ValidaLoginController::class, 'index']);

