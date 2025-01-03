<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Models\usuarios;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 use App\Http\Requests\AssSistemaController;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){

          return view('login.index-login');
     }

     public function loginProcess(LoginRequest $request){

        //dd($request);
         //valido os campos
        $login = $request->input('login');  // Acessa o valor do campo 'login'
        $senha = $request->input('password');  // Acessa o valor do campo 'senha'
        $this->validar($request);
  }

     public function validar($request){

        $request->validated();

       //  $autnheicado = Auth::guard('custom_guard')->attempt(['UserLogin' => $request->login]);
         $autnheicado = usuarios::where(['UserLogin' => $request->login])->first();


         if($autnheicado && Hash::check($request->senha, $autnheicado->hasPhp)){

             Auth::guard('custom_guard')->attempt(['UserLogin' => $request->password]);

          // dd($aut);



      }else{
        // dd('autenticado');
        //dd($_SERVER['REQUEST_URI']);
        if($_SERVER['REQUEST_URI'] == '/processar'){

            //dd($_SERVER['REQUEST_URI'] = '/login');
            return redirect()->route('login.index-login');

        }
        }
}
}




