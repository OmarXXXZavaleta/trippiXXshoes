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
        
      </div>

      <div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="../resources/images/img2.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>NIKE SB DUNK LOW "STRANGELOVE SKATEBOARDS (REGULAR BOX)"</h3>
						<h2>$2159.99</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Categoria</span> : Pink/White/red</a></li>
							<li><a href="#"><span>Disponibilidad</span> : Sin stock</a></li>
						</ul>
						<p>Después de un primer vistazo, ahora tenemos un vistazo oficial a las StrangeLove Skateboards x Nike (NYSE: NKE -0.84%) SB Dunk Low de Sean Cliver. Inspirada por el amor de toda la vida de Cliver por el skate, la colaboración se centra en adaptar los tonos del Día de San Valentín y los motivos del corazón.</p>
						<p>La parte superior del zapato está construida con una base de terciopelo blanco triturado acentuada por superposiciones de gamuza rosa y Swooshes rojos de terciopelo triturado en la parte media del pie. La marca adicional viene en forma de etiquetas de lengüeta de colores a juego, bordado "NIKE" en la parte trasera, el logo "Heart Skull" de Cliver en el talón y plantillas especiales con amortiguación Zoom Air impresas. Completando el diseño de la colaboración se encuentra un forro interior de terciopelo rojo triturado, cordones de cuerda roja y una entresuela de color blanco puro combinados con una suela de color rosa translúcido que cubre corazones rojos y azules esparcidos debajo del antepié y el talón.</p>
						<p>Con un precio de $ 100 USD, las StrangeLove Skateboards x Nike SB Dunk Low se lanzarán en distribuidores de SB como The Berrics 'Canteen el 7 de febrero y una Nike SNKRS se lanzará el 8 de febrero.</p>
						
						<div class="card_area d-flex align-items-center">
							<form method="post" action="pedidos.class.php">
          <button class="btn btn-lg btn-primary" type="submit" name="pedido" value="producto1">Comprar</button>
        </form>
						</div>
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
