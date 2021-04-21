<?php require "../controller/seguridad.class.php";  ?>
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
    <link href="resources/bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="resources/bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
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
              <a class="nav-link" href="../productos.class.php">Productos</a>
            </li>          
          </ul>  
          <span class="text-white">
            Bienvenido : <?php echo $_SESSION['miSesion']['nombre'] ?>
          </span>&nbsp;&nbsp;
          <a class="btn btn-secondary" href="../controller/salir.class.php">Cerrar Sesión</a>
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          
        </div>

      </div>
      <hr>

      <div class="container"> 
        
          <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="../resources/images/img3.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>NIKE AIR FORCE 1 LOW DROP TYPE "SUMMIT WHITE"</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>$5000.00</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="" name="qty" id="sst" maxlength="1" value="1" title="Quantity:"
                                            class="input-text qty" readonly>
                                        
                                    </div>
                                </td>
                                <td>
                                    <h5>$5000.00</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="../resources/images/img4.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>NIKE SB DUNK LOW "STRANGELOVE SKATEBOARDS (REGULAR BOX)"</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>$2959.99</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="" name="qty" id="sst" maxlength="1" value="1" title="Quantity:"
                                            class="input-text qty" readonly>
                                        
                                    </div>
                                </td>
                                <td>
                                    <h5>$2159.99</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="../resources/images/img5.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>ADIDAS ZX 500 "DRAGON BALL Z SON GOKU"</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>$1949.99</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="" name="qty" id="sst" maxlength="1" value="1" title="Quantity:"
                                            class="input-text qty" readonly>
                                        
                                    </div>
                                </td>
                                <td>
                                    <h5>$1949.99</h5>
                                </td>
                            </tr>
                            <tr class="bottom_button">
                                <td>
                                    
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Total</h5>
                                </td>
                                <td>
                                    <h5>$9,109.98</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        
                                        
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        
                                        <br>
                                        <a class="primary-btn" href="#"></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
      </div> <!-- /container -->

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
