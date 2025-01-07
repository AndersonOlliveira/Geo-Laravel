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
         $retorno = $this->validar($request);

        //dd($retorno);
         // precisa do return para aparecer o dado que precisa ser validado;
          return $retorno;
  }

     public function validar($request){

        //dd($request->validated());
         //dd("estou no validar");
         //attempt precisa enviar uma array
        //$autnheicado = Auth::guard('custom_guard')->attempt(['UserLogin' => $request->login, "hasPhp" => $request->password]);
         //este código abaixo ele faz uma busca no banco

         $veriAuth = usuarios::where(['UserLogin' => $request->login])->first();
         //dd($veriAuth);

          if($veriAuth->count() > 0){

             //dd($veriAuth);
                 $veriPass = Hash::check($request->password, $veriAuth->hasPhp);

             if(!$veriPass){

                return back()->withInput()->with('msg', 'Login ou senha invalidos');

               }else{

                 return redirect()->route('indexAss');
             }

        }else{

            return back()->withInput()->with('msg', 'Login ou senha invalidos');


        }

         //if($autnheicado && $testeAut){

             //$validado = Auth::guard('custom_guard')->attempt(['UserLogin' => $request->login, 'hasPhp' => $autnheicado->hasPhp]);

               //$validado = Auth::guard('custom_guard')->login(['UserLogin' => $request->login]);

                 //dd('sai aqui');
            //     return redirect()->route('indexAss');

          //}
         // dd('cai aqu');

          //else{


            //  dd('autenticado');

            //dd($_SERVER['REQUEST_URI'] = '/login');


  // }
}
}




