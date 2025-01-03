<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;


class ValidaLoginController extends Controller
{
      public function store(Request $request){
           $login = $request->input('login');  // Acessa o valor do campo 'login'
           $senha = $request->input('senha');  // Acessa o valor do campo 'senha'

            $this->validar($login,$senha);
     }

     public function validar($login,$senha){

        //chamo a model do banco para validar login
  //get para pegar os dados do banco


       $resultUser = usuarios::where('UserLogin', $login)->get();

      $cont = $resultUser->count();

      //dd($_SERVER['REQUEST_URI']);
         if($cont > 0) {

            return redirect()->route('valida.home');
        } else {
            // Se o login ou a senha estiverem incorretos, redireciona de volta com uma mensagem de erro
            return redirect('index')->with('msg', 'Credenciais incorretas')->withInput();

     }
    }

     public function index(){

        return view('index');
     }
}
