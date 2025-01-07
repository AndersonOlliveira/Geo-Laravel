<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\usuarios;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 use App\Http\Requests\AssSistemaController;

use function PHPUnit\Framework\returnSelf;

class PaginaController extends Controller
{
    public function index(){
    return view('sistemaAss.indexAss');
}
public function ctosCad(){

    return view('paginas.ctosCadastros');
 }

}
