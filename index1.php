<?php require "./controller/seguridad.class2.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>trippiXshoes</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index1.php">trippiXshoes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index1.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="/view/productos.class.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>          
          </ul>
          
          <span class="text-white">
          Bienvenido: <?php echo $_SESSION['miSesion']['nombre'] ?>
          </span> &nbsp;&nbsp;
          <a class="btn btn-secondary" href="controller/salir.class2.php">
          Cerrar Sesion
          </a>

        </div>
      </nav>
      <header class="bg-primary  mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">trippiXshoes</h1>
          <p class="lead mb-5 text-white-50"></p>
        </div>
      </div>
    </div>
  </header>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      

      <div class="container">

<div class="row">
  <div class="col-md-8 mb-5">
    <h2>Proximamente New Balance x Casa Blanca</h2>
    <hr>
    <p><iframe width="560" height="315" src="https://www.youtube.com/embed/xtYpLc2pYY8?controls=0&amp;start=28" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
    <p></p>
    <a class="btn btn-primary btn-lg" href="./view/productos.class.php">ver más Productos &raquo;</a>
  </div>
  <div class="col-md-4 mb-5">
   <h2>Información de contacto </h2>
        <hr>
        <address>
          <strong>Zavaleta Angeles Omar</strong>
          <br>Universidad Tecnologica de Nezahualcoyotl
          <br>Nezahualcoyotl, México, Estado de México.
          <br>Aplicaciones Web
          <br>IC51-M
        </address>
        <address>
          <br>
          <abbr title="Email">Email:</abbr>
          <a href="mailto:#">193241203@alumnos.utn.edu.mx</a>
    </address>
  </div>
</div>


<https://teams.microsoft.com/l/message/19:b1d93920e2df46488e56568e6c047942@thread.tacv2/1611597687099?tenantId=527b6bb3-b43e-42e9-9d65-63c9ca103a9a&amp;groupId=a6c3e76b-7a71-4ab5-a0b6-75f71cc816be&amp;parentMessageId=1611597687099&amp;teamName=TIC51M- Aplicaciones web para I4.0&amp;channelName=Actividades del 25 al 29 de Enero&amp;createdTime=1611597687099>
      <hr>

    </main>

    <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Zavaleta Angeles Omar 2021</p>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../resources/bootstrap/js/jquery-3.5.1.js"></script> 
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
