<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssSistemaController extends Controller
{
     public function index(){

        return view('sistemaAss.indexAss');
    }

}
