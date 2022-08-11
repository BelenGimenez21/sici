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

<body id="informesCuerpo">   
    <div class="container">
      <br><br><br><br><br><br><br>
    <div class="row" style="background-color: orange;">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5 text-dark" >Informe Actitudinal</h1>
        <p class="lead" style="background-color: white;">Juan Pablo Lezcano</p><br>
        <p>Es un alumno muy atento y participativo en las clases, por lo general comprende las consignas con facilidad, pero cuando no lo logra se muestra algo tímido para pedir ayuda, por lo que estamos focalizando en ese aspecto. En el transcurso de este trimestre ha presentado sus tareas en tiempo y forma, ¡lo alentamos a continuar así!</p>
      </div>
    </div>
  </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
