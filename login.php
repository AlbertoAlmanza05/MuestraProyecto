

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="../css/style.css"> -->
        <link rel="stylesheet" href="css/style.css">
    
        <title>Sign In</title>
        <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
      </head>

    <header>
          <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <a class="navbar-brand" href="https://www.unibarranquilla.edu.co/">
              <img style="float: left; width: 150px; margin-top: -5px;" class="icono" src="../img/logo.png" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Inicio<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="registrarse.php"  >Sign Up<span class="sr-only"></span></a>
                </li>
                
              </ul>
            </div>
          </nav>
    </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">

      <body>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/sweetalert2.all.min.js"></script>

        <br> <br> <br> 
        <div class="titulo">
          <h1>Sistema de Egresados</h1>
        </div>
          
          <br> <br> <br> 
          
        <center><form method="post" action="registrarse.php">
          <div class="form-group">
            <!-- <h4> <label for="exampleInputEmail1">Correo</label> </h4> -->
            <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingrese su Correo Electrónico">
          </div>
          <br> <br>
          <div class="form-group">
            <!-- <h4><label for="exampleInputPassword1">Contraseña</label> </h4> -->
            <input type="password" class="form-control" id="contraseña" placeholder="Ingrese su Contraseña">
          </div>
          <br> <br>
          <input type="button" class="btn btn-primary form-control" onclick="login()" onclick="dateBase.php" value="Entrar">
        </form> </center>
                
      </body>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
      <!-- <script src="../js/AppLogin.js"></script> -->
      <!-- <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script> -->
      <script src="js/AppLogin.js"></script> 
      <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script> -->
      <!-- <script src="../js/sweetalert2.all.min.js"></script> -->
      <script src="js/sweetalert2.all.min.js"></script>
    <footer>
      <div class="redes">
        <a class="soc-facebook" href="https://www.facebook.com/UniBarranquilla/"><img style='font-size:24px' src="https://img.icons8.com/color/48/null/facebook-new.png" alt="facebook"></a>

        <li><a class="soc-instagram soc-icon-last" href="https://www.instagram.com/UniBarranquilla_/"><img style='font-size:24px' src="https://img.icons8.com/fluency/48/null/instagram-new.png" alt="instagram"></a></li>

        <a class="soc-twitter" href="https://twitter.com/UniBarranquilla"><img style='font-size:24px' src="https://img.icons8.com/color/48/null/twitter--v4.png" alt="twitter"></a>

        <li><a class="soc-youtube soc-icon-last" href="https://www.youtube.com/channel/UC76E4EukC9lbFQ4_rUD5nLw"><img style='font-size:24px' src="https://img.icons8.com/color/48/null/youtube-play.png" alt="youtube"></a></li>
      </div>
      <hr>

      <div class="container">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">

          <div class="container2">
            <img src="../img/4.jpg" class="final">
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
          <div class="container3">
            <a href="https://www.gov.co/">Conoce GOV.CO aquí</a>
          </div>
        </div>
      </div>
      <hr>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <div class="descripcion">
          <p>Institución Pública de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional; © 2017, NIT: 802.011.065-5</p>
        </div>
      </div>
    </footer>
  </div>
</html>
