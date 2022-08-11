
<?php
include "db/conexion.php";
include "registrarse.php";
include "login.php";

session_start();  // inicio una session
//$_SESSION["USER"]="Juan";
//$_SESSION["TIPO"]="Alumno";
//session_destroy();
if(isset($_SESSION["USUARIO_NOMBRE"])){
    header('Location: menus.php');
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SICI Inicio</title>
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
      </head>
    <body id="inicioCuerpo">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenidos a S.I.C.I.</div>
                <div class="masthead-subheading">El Sistema de Informacion y Comunicación Institucional 
                </div>
                <div class="masthead-heading text-uppercase">Es bueno encontrarnos</div>
               
                <button type="button" class="btn btn-warning btn-xl text-uppercase" data-bs-toggle="modal" data-bs-target="#inicioSesionPadres"  >Iniciar Sesión</button>
                <br>
                <br>
                <br>
                <div class="masthead-underheading">¿No se ha registrado aún?</div>
                <button type="button" class="btn btn-outline-warning btn-xl text-uppercase" data-bs-toggle="modal" data-bs-target="#registro" >Registrarme</button>
            </div>
        </header>


     <!-- modal Inicio de sesion-->
     <div class="modal fade"  id="inicioSesionPadres" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="inicioSesionPadres">Iniciar Sesión</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
            <form action="./index.php"  method="post">
                 <div class="modal-body">
                        <div class="mb-3">
                          <i class="fas fa-at"></i>
                          <label for="inputEmailLogPadres" class="form-label">Email</label>
                          <input type="email" class="form-control"  id="email"  name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <i class="fa fa-lock"></i>
                          <label for="inputPasswordLogPadres" class="form-label">Contraseña</label>
                          <input type="password" class="form-control"  name="password" id="password">
                        </div> 
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                     <button type="submit" class="btn btn-warning" name="login">Ingresar</button>
                 </div>
             </form>
             </div>
         </div>  
     </div>

     <!-- Modal Registro-->
     <div class="modal fade" id="registro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registro">Registrarme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./index.php"  method="post">
                    <div class="mb-3">
                         <i class="fas fa-user"></i>
                         <label for="inputUser" class="form-label">Nombre</label>
                         <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" >
                       </div>
                       <div class="mb-3">
                         <i class="fas fa-user"></i>
                         <label for="inputUser" class="form-label">Apellido</label>
                         <input type="text" class="form-control" id="apellidoUsuario" name="apellidoUsuario">
                       </div>
                       <div class="mb-3">
                        <i class="fas fa-address-card"></i>
                        <label for="inputUserAlumno" class="form-label">DNI del Alumno </label>
                        <input type="text" class="form-control" id="dniAlumno" name="dniAlumno">
                       </div>
                       <div class="mb-3">
                         <i class="fas fa-mobile-retro"></i>
                         <label for="inputUser" class="form-label">Numero de Celular</label>
                         <input type="text" class="form-control" id="cel" name="cel">
                       </div>
                       <div class="mb-3">
                         <i class="fas fa-at"></i>
                         <label for="inputEmailReg" class="form-label">Email</label>
                         <input type="email" class="form-control" id="email" name="email">
                       </div>
                     
                       <div class="mb-3">
                         <i class="fa fa-lock"></i>
                         <label for="inputPassword1" class="form-label">Contraseña</label>
                         <input type="password" class="form-control" id="contrasenia" name="contrasenia">
                       </div>
                       <div class="mb-3">
                         <i class="fa fa-lock"></i>
                         <label for="inputPassword2" class="form-label">Confirmar Contraseña</label>
                         <input type="password" class="form-control" id="contraseniaConfirm" name="contraseniaConfirm">
                       </div>
                       <div class="alert alert-primary" role="alert" name="alertRegistro" hidden></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning" name="registro" >Confirmar Registro</button>
                </div>
                </form>
            </div>
        </div>
     </div>

    
        <script src="inicio.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        <script>
          function mostrarMensaje(tipo, mensaje){

              document.getElementById("alerta").hidden = true;
              document.getElementById("textAlert").innerHTML = mensaje;
              switch (tipo){
                  case 'error':
                      document.getElementById("alerta").className = 'alert alert-danger fade show';            
                      break;
                  case 'ok':
                      document.getElementById("alerta").className = 'alert alert-success  fade show';
                      break;
                  case 'info':
                      document.getElementById("alerta").className = 'alert alert-info fade show';
                      break;
              }
              document.getElementById("alerta").removeAttribute("hidden");
              }
        </script>
    </body>
</html>
