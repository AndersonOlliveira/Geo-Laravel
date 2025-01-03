

@extends('layouts.indexLogin')

@section('title', 'Login')

@section('content')

<?php
//dd($_SERVER['REQUEST_URI']); ?>
<div class="container">
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form id="formulario" action="{{route('pagina.index')}}" method="post"> <!--para onde eu vou enviar o post de preenchimento do formulario -->
                @csrf
                <div class="form-group">
                  <input name="login" type="text" class="form-control"  autocomplete="on" value="{{old('login')}}">
                </div>
                <div class="form-group">
                  <input name="password" type="password"  autocomplete="current-password" class="form-control" placeholder="Senha"></div>
               <div class="text-danger">

                 </div>
               <div class="text-danger">
                 </div>
                <input name="sendLogin" class="btn btn-lg btn-info btn-block botao" type="submit" value="Entrar"></input>

<!--TRABALHAR NA MENSAGEM DE ERRO -->
                 <div class="container">
                    <div class="row">
                <div class="row">
                <div class="col-sm">

                </div>
                </div>
              </div>
          </div>


    <div class="alert alert-danger">
    <a style="position: fixed;"  href="{{route('pagina.index')}}">Esqueceu a senha?</a>
    </div>

              </form>
            </div>
          </div>
        </div>
    </div>

@endsection




