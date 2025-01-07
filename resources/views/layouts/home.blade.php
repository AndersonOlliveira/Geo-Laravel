<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="js/datatables/datatables.net-dt/css/jquery.dataTables.css">
    <script src="js/bootstrap/js/orginalCol.js"></script>

    <title>Visium Geo Cabos</title>
  </head>
 <body>
    <header>
 <nav class="navbar navbar-dark navbar-expand-lg sticky-top bg-dark flex-md-nowrap p-2 ">
  <div class="container-fluid">
    <div class="d-flex">
    <img src="icons/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="index.php"> Visium Geo Cabos </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="listarDados.php">Caixas por cidade</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="meuPerfil.php">Meu Perfil</a>
        </li>

        <li class="nav-item">
        <a  class="nav-link" href="listarUsuarios.php">Listar Usuarios
           <span data-feather="file-text"></span>
       </a>
        <li class="nav-item">
          <a class="nav-link" href="infosCabos.php">Info Cabos</a>
        </li>

      </ul> <!-- O QUE TEM DENTRO DO UL PARA FIXAR RESPONSIVO-->

   </div> <!--collapse navbar-collapse d-flex" id="navbarScroll -->
   <div class="d-flex">
   <!-- <div class="collapse navbar-collapse me-2" id="navbarScroll"> -->
    <ul class="navbar-nav ">
         <a class="nav-link" aria-disabled="true"><img src="../icons/icons8-usuário-de-gênero-neutro-20.png"></a>
        <li class="nav-item text-nowrap">

          <a class="nav-link" href="../Loggout/loggout.php">Loggout</a>
        </li>
      </ul>
       </div> <!--FECHAMENTO D FLEX LOGGOUT -->
 </div> <!-- CONTAINER FUILD FECHAMENTO-->
</nav><!--navbar navbar-dark navbar-expand-lg sticky-top bg-dark  flex-md-nowrap p-2  fechAMENTO -->

<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle">COLOCAR DADDOS AQUI</span>
              </a>

              </li>
             <li class="nav-item">
             <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle">COLOCAR DADDOS AQUI</span>
              </a>
              </li>
              <li class="nav-item">
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle">COLOCAR DADDOS AQUI</span>
              </a>
             </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Dados</span>
             </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                  <span data-feather="file-text">dad</span>

                </a>
              </li>
                  <span data-feather="file-text">dasd</span>

                </a>
              </li>
              <li class="nav-item">
                  <span data-feather="file-text">dasd</span>
                 </a>
              </li>
              <li class="nav-item">
                  <span data-feather="file-text">das</span>
                 </a>
              </li>
              <li class="nav-item">
                  <span data-feather="file-text">das</span>
                 </a>
              </li>
              <li class="nav-item">
                  <span data-feather="file-text">das</span>
                 </a>
              </li>
            </ul>
          </div>
          </div>
        </nav>
      </div>
 </header>
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         @yield('content')
 </main>
<!--aqui vem o meu conteudo somente aproveito o que vem do meu cabecalho -->
    </body>

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/Scripts.js"></script>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.js"></script>
    <script src="webApi/Cidades.js"> </script>
      <script src="js/jquery/jquery/dist/jquery.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/popper/@popperjs/core/dist/umd/popper-base.min.js"> </script>
      <script src="js/datatables/datatables.net/js/jquery.dataTables.min.js"> </script>
      <script src="js/datatables/buttons/dataTables.buttons.min.js"> </script>
      <script src="js/datatables/buttons/jszip.min.js"> </script>
      <script src="js/datatables/buttons/pdfmake.min.js"> </script>
      <script src="js/datatables/buttons/vfs_fonts.js"> </script>
      <script src="js/datatables/buttons/buttons.html5.min.js"> </script>
      <script src="js/datatables/buttons/buttons.html5.min.js"> </script>
      <script src="js/bootstrap/js/bootstrap.min.js"> </script>
      <script src="js/bootstrap/js/bootstrap.bundle.js"> </script>
 </body>
</html>
