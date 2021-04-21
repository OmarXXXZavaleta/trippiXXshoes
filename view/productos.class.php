<?php require "../controller/seguridad.class.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>trippiXshoes | Aplicación para autentificarse.</title>
    <!-- Bootstrap core CSS -->
    <link href="../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../resources/bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="../resources/bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../index1.php">trippiXshoes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" href="../index1.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index1.php">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>          
          </ul>
          
          <span class="text-white">
          Bienvenido: <?php echo $_SESSION['miSesion']['nombre'] ?>
        </span> &nbsp;&nbsp;
          <a class="btn btn-secondary" href="../controller/salir.class.php">
          Cerrar Sesion
          </a>

        </div>
      </nav>
    </header>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          
        </div>
      </div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="../resources/images/img.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">NIKE AIR FORCE 1 LOW DROP TYPE "SUMMIT WHITE"</h5>
        <p class="card-text">Da clic para mas información.</p>
        
      </div>
      <div class="card-footer">
        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
        <br>
        <div class="container"> 
        <form method="post" action="producto1.class.php">
          <button class="btn btn-lg btn-primary" type="submit" name="pedido" value="producto1">Ver MÁS</button>
        </form>
        
                  
		  <hr>	
      </div> 
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-80">
      <img src="../resources/images/img1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ADIDAS ZX 500 "DRAGON BALL Z SON GOKU"</h5>
        <p class="card-text">Da clic para mas información.</p>
      </div>
      <div class="card-footer">
        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
        <br>
        <div class="container"> 
        <form method="post" action="producto2.class.php">
          <button class="btn btn-lg btn-primary" type="submit" name="pedido" value="producto2" >Ver MÁS</button>
        </form>
        
                  
		  <hr>	
      </div> 
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-80">
      <img src="../resources/images/img2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">NIKE SB DUNK LOW "STRANGELOVE SKATEBOARDS (REGULAR BOX)"</h5>
        <p class="card-text">Da clic para mas información.</p>
      </div>
      <div class="card-footer">
        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
        <br>
        <div class="container"> 
        <form method="post" action="producto3.class.php">
          <button class=" btn-lg btn-primary" type="submit" name="pedido" value="producto3">Ver MÁS</button>
        </form>
        
                  
		  <hr>	
      </div> 
      </div>
    </div>
  </div>
</div>


<https://teams.microsoft.com/l/message/19:b1d93920e2df46488e56568e6c047942@thread.tacv2/1611597687099?tenantId=527b6bb3-b43e-42e9-9d65-63c9ca103a9a&amp;groupId=a6c3e76b-7a71-4ab5-a0b6-75f71cc816be&amp;parentMessageId=1611597687099&amp;teamName=TIC51M- Aplicaciones web para I4.0&amp;channelName=Actividades del 25 al 29 de Enero&amp;createdTime=1611597687099>
      <hr>

    </main>

    <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Zavaleta Angeles Omar 2021</p>
    </div>
    <!-- /.container -->
  </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../resources/bootstrap/js/jquery-3.5.1.js"></script> 
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
