<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CidadeController;


//Route::get('/user', function (Request $request) {

//});
Route::get('/cidade', [CidadeController::class, 'index']);
