<?php 

include "db/conexion.php";


session_start();  // inicio una session
//$_SESSION["USER"]="Juan";
//$_SESSION["TIPO"]="Alumno";
//session_destroy();
if(! isset($_SESSION["USUARIO_NOMBRE"])){
    header('Location: index.php');
}

$USUARIO_NOMBRE=$_SESSION["USUARIO_NOMBRE"];



include "./cabecera_repeat.php";
?>

<body>
          <br> <br>
         <br>
         <div class="content justify-content-center">
         <br> <br>
          <div class="row justify-content-center">   
             <div class="col-md-6">
             <p class="h2">Asistencia Mes de Noviembre</p>
              <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Fecha</th>
                  <th scope="col">Condicion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Miercoles 1</th>
                  <td>Ausente</td>
                </tr>
                <tr>
                  <th scope="row"> Jueves 2</th>
                  <td>Presente</td>
                </tr>
                <tr>
                  <th scope="row">Viernes 3</th>
                  <td>Presente</td>
                </tr>
                <tr>
                  <th scope="row">Lunes 6</th>
                  <td>Presente</td>
                </tr>
                <tr>
                  <th scope="row">Martes 7</th>
                  <td>Presente</td>
                </tr>
                <tr>
                  <th scope="row">Miercoles 8</th>
                  <td>Presente</td>
                </tr>
                <tr>
                  <th scope="row">Jueves 9</th>
                  <td>Presente</td>
                </tr>
                <tr>
                  <th scope="row">Viernes 10</th>
                  <td>Ausente</td>
                </tr>
              </tbody>
            </table>

            
        
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
