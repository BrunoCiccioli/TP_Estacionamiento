<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../pac-man.ico">

    <title>ESTACIONAMIENTO CICCIOLI</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">

  </head>

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
      <h2 class="mt-5">ESTACIONAMIENTO CICCIOLI</h2>
      <img src="https://www.tiempodesanjuan.com/u/fotografias/fotosnoticias/2019/11/19/580356.jpg" width=100 height=100><img src="https://www.mibelgrano.com.ar/wp-content/uploads/2019/03/Estacionamiento.jpg" width=200 height=100><img src="https://www.tiempodesanjuan.com/u/fotografias/fotosnoticias/2019/11/19/580356.jpg" width=100 height=100>




            <?php 
                  if(isset($_SESSION['usuario'])){
                    //solo muestra el menu si estas con la variable de sesión instaciada
            ?>
                              <h2>Usted ya esta logeado</h2>
                              <h3>  <?php echo $_SESSION['usuario'];?>  </h3>


                             
            <?php 
              }
              else
              {
            ?>

                              <form class="form-signin" action="../funciones/hacerLogin.php">
                              
                              <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>
                              <label for="usuario" class="sr-only">Usuario</label>
                              <input type="text" id="usuario"  name="usuario"class="form-control" placeholder="tu usuario" required autofocus>
                              <label for="contraseña" class="sr-only">Clave</label>
                              <input type="password" id="contraseña" name="contraseña" class="form-control" placeholder="tu contraseña" required>
                              <div class="checkbox mb-3">
                                <label>
                                  <input type="checkbox" value="remember-me"> Recordarme
                                </label>
                              </div>
                              <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                              <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
                              </form>
                            



            <?php 
              }
            ?>

    </main>
      
     <footer class="footer">
    <?php
        include "../componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
