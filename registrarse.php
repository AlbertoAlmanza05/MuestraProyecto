<?php 

  $servidor = 'localhost';
  $usuario = 'root';
  $clave = '';
  $baseDatos = 'proyectoegresados';

  $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
  
?>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registrarse.css">
    
    <title>Sign Up</title>
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
            <a class="nav-link" href="login.php">Sign In<span class="sr-only"></span></a>
          </li>
                
        </ul>
      </div>
    </nav>
  </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
      <body>
        <!-- <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/sweetalert2.all.min.js"></script> -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/sweetalert2.all.min.js"></script>

        <?php if(!empty($message)): ?>
        <p><?= $message ?> </p>
        <?php endif; ?>

        <h1 class="mb-3 pt-5">Nuevo Usuario</h1>
        
                <!--action="login.php"-->
         <center> <form  class="mb-3 pt-3" method="post"> 
          <div class="mb-3">
            <!-- <h4><label for="exampleInputtext" class="form-label">Nombres</label></h4> -->
            <input type="text" class="form-control"  name="nombres" aria-describedby="Ingrese sus nombres" placeholder="Ingrese su(s) Nombre(s)">
          </div>
            
          <div class="mb-3 pt-2">
            <!-- <h4><label for="exampleInputtext" class="form-label">Apellidos</label></h4> -->
            <input type="text" class="form-control"  name="apellidos" aria-describedby="Ingrese sus apellidos" placeholder="Ingrese sus apellidos">
          </div>
          
          <div class="mb-3 pt-2">
            <select class="form-select form-select-md mb-3 pt-3" aria-label=".form-select-lg" name="genero">
              <h6> <option selected disabled> Género </option> </h1>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>

          

          <select class="form-select form-select-md mb-3  pt-3" aria-label=".form-select-lg" name="tipoUsuario">
            <h6> <option selected disabled>Tipo de Usuario</option> </h6>
            <option value="Egresado">Egresado</option>
          </select>

          

          <select class="form-select form-select-md mb-3  pt-3" aria-label=".form-select-lg" name="tipoFormacion">
            <h6> <option selected disabled>Escoja tipo de formación:</option>
            <option value="Pregrado">Pregrado</option>
            <option value="Posgrado">Posgrado</option>
          </select>

         

          <select class="form-select form-select-md mb-3 pt-3" aria-label=".form-select-lg example" >
            <h6><option selected>Escoja su nivel de formación:</option></h6>
            <option value="Técnico">Técnico
              <option value="Tecnólogo">Tecnólogo</option>
              <option value="Universitario">Universitario</option>
            </option>

            <option value="2">
              <option>Sistemas Automáticos de Control</option>
              <option>Gerencia en Sistemas Integrados de Gestión</option>
              <option>Gerencia en Logística Internacional</option>
              <option>Administración de Sistemas Telemáticos</option>
            </option>
          </select>

          

          <select class="form-select form-select-md mb-3 pt-3" aria-label=".form-select-lg example" name="programa">
            <h6><option selected>Escoja su programa:</option></h6>
            <option value="1">
              Operaciones del Comercio Exterior
              <option>Producción Gráfica y Multimedial</option>
              <option>Mantenimiento de Sistemas Informáticos</option>
              <option> Instalación y Mantenimiento de Redes de Telecomunicaciones</option>
              <option>Mantenimiento Electrónico Industrial</option>
              <option>Mantenimiento Electromecánico</option>
              <option>Operación de Procesos Industriales</option>
            </option>

            <option value="2">
              <option>Gestión Gráfica Multimedial</option>
              <option>Gestión de Sistemas Informáticos</option>
              <option>Gestión de Redes de Telecomunicaciones</option>
              <option>Automatización Electrónica Industrial</option>
              <option>Gestión de Sistemas Electromecánicos</option>
              <option>Gestión de Procesos Industriales</option>
              <option>Gestión Administrativa</option>
              <option>Gestión de Seguridad y Salud en el Trabajo</option>
            </option>

            <option value="3">
              <option>Administración de Negocios Internacionales
              <option>Diseño Gráfico</option>
              <option>Ingeniería Telemática</option>
              <option>Ingeniería Mecatrónica</option>
              <option>Ingeniería Industrial</option>
              <option>Programa Licenciatura en Educación Básica Primaria</option>
              <option>Inteligencia de Negocios</option>
              <option>Ingeniería en Seguridad y Salud en el Trabajo</option>
            </option>
          </select>

         

          <div class="mb-3  pt-2">
            <!-- <h2><label for="inputZip" class="form-label">Número de Contacto</label></h2> -->
            <input type="text" class="form-control" name="telefono" placeholder="Ingrese su Número de celular">
          </div>
          
          <div class="mb-3  pt-2">
            <!-- <h2> <label for="exampleInputEmail1" class="form-label">Correo electrónico</label></h2> -->
            <input type="email" class="form-control"  name="correo" aria-describedby="emailHelp" placeholder="Ingrese su Correo Electrónico: ejemplo@gmail.com">
          </div>
          
          <div class="mb-3 pt-2">
            <!-- <h2><label for="exampleInputPassword1" class="form-label">Contraseña</label></h2> -->
            <input type="password" class="form-control"  name="contraseña" placeholder="Ingrese su Contraseña">
          </div>
          
          <div class="mb-3 pt-2">
            <!-- <h2><label for="exampleInputPassword1" class="form-label">Repita la Contraseña</label></h2> -->
            <input type="password" class="form-control"  name="confirmarContraseña" placeholder="Repita su Contraseña">
          </div>
          
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="check">
            <h4> <label class="form-check-label" for="exampleCheck1">Acepta términos y condiciones</label>
            <input type="submit" class="btn btn-primary form-control mt-3" onclick="registarUsuario()"  name="Registrar"> 

          </div> 
          
          
        </form> </center>           
        
    
      </body>
      
      
      <script src="js/AppRegistrarse.js"></script>
      <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script> -->
      <script src="js/sweetalert2.all.min.js"></script>
    </div>
    
    <div class="mb-3 pt-5">

    </div>

    <div class="separar mb-3 pt-4">

    </div>

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
            <!-- <img src="../img/4.jpg" class="final"> -->
            <img src="/img/4.jpg" class="final">
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


<?php 
  if( !empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['genero']) && !empty($_POST['tipoUsuario']) && !empty($_POST['tipoFormacion']) && !empty($_POST['programa']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['contraseña']) && !empty($_POST['confirmarContraseña'])){    


    if(isset($_POST['Registrar'])){
      $nombres=$_POST['nombres'];
      $apellidos=$_POST['apellidos'];
      $genero=$_POST['genero'];
      $tipoUsuario=$_POST['tipoUsuario'];
      $tipoFormacion=$_POST['tipoFormacion'];
      $programa=$_POST['programa'];
      $telefono=$_POST['telefono'];
      $correo=$_POST['correo'];
      #$con = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
      $contraseña=$_POST['contraseña'];

      $insertar = "INSERT INTO usuario VALUES('', '$nombres', '$apellidos', '$genero', '$tipoUsuario', '$tipoFormacion', '$programa', '$telefono', '$correo', '$contraseña')" ;

      $enlace = mysqli_query($enlace, $insertar);
      echo '<script>alert("Datos Registrados")</script>';
    }

  } else{
    echo '<script>alert("Error: No se pudo crear cuenta, Hay campos vacíos")</script>';
    echo "<script src='js/sweetalert2.all.min.js'></script>";
  }

?>
