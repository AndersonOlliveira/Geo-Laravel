@extends('layouts.home')

@section('title', 'HomeInicial')

@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

</div> <!-- D-FLEX JUSTI-->

<div class="container-fluid">  <!--Estilizando o menu! -->
   <div class="row">
     <div class="col">

         <a  href="{{route('paginas.ctosCadastros')}}" class="btn-primary" >Cadastar Serviços</a>

        </div>
<div class="col">
 <form class="" action="../ListaTotalCeo/litaTotalCeo.php">
   <button class="btn btn-info">Lista Total Ceo</button>
</form>
</div>
    <div class="col">
 <form class="" action="../ListaTotalCto/listaTotalCto.php">
   <button class="btn btn-warning">Lista Total Cto</button>
</form>
</div>
<?php  ?>
     <div class="col">
    <form class="" method="POST" action="../cadastrar/home.php">
     <button class="btn btn-info">Cadastar CEO</button>
   </form>
   </div>
 <div class="col">
<form class="" method="POST" action="../cto/cadastroCtos.php">
  <button class="btn btn-warning">Cadastar CTO</button>
</form>
    </div>
    <div class="col">
<form class="" action="../ListaTotalCeo/ListaTotalCeoUser.php">
  <button class="btn btn-info">Lista Ceo</button>
</form>
    </div>

    <div class="col">
<form class="" action="../ListaTotalCto/listaTotalCtoUser.php">
  <button class="btn btn-warning">Lista Cto</button>
</form>
    </div>

   </div>
    </div>


@endsection
