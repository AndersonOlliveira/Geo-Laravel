<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\usuarios;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\PaginaController;

class ValidaLoginController extends Controller
{
      public function store(LoginRequest $request){

        //dd($request);
         //valido os campos
        $login = $request->input('login');  // Acessa o valor do campo 'login'
        $senha = $request->input('password');  // Acessa o valor do campo 'senha'
        $this->validar($request);
  }

     public function validar($request){

        //$request->validated();

       //  $autnheicado = Auth::guard('custom_guard')->attempt(['UserLogin' => $request->login]);
         $autnheicado = usuarios::where(['UserLogin' => $request->login])->first();

         //dd($autnheicado);

         if($autnheicado && Hash::check($request->password, $autnheicado->hasPhp)){

            Auth::guard('custom_guard')->attempt(['UserLogin' => $request->password]);

            $userAuth =  true;
        //    dd('autenticado');

           return view('pagina.index');

        }else{

   //dd('náo autenticado');
   return redirect()->back()->withErrors(['login' => 'Credenciais inválidas']);
 // Se as credenciais forem inválidas, redireciona de volta com erro
 //

        }

            // dd('achei');

         }

        //chamo a model do banco para validar login
      //get para pegar os dados do banco
 /*

       $resultUser = usuarios::where('UserLogin', $login)->get();

      $cont = $resultUser->count();

      //dd($_SERVER['REQUEST_URI']);
         if($cont > 0) {

            return redirect()->route('valida.home');
        } else {
            // Se o login ou a senha estiverem incorretos, redireciona de volta com uma mensagem de erro
            return redirect('index')->with('msg', 'Credenciais incorretas')->withInput();

     }
            */
    }


