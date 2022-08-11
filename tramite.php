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

<body id=tramiteCuerpo>

         <!-- Tramites-->
      <section class="page-section" id="tramit">
          <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase" style="color: #e08206">Tramites</h2>
                  <h3 class="section-subheading" style="color: white">Estamos para ayudarlo</h3>
              </div>
              <form id="tramitForm" >
                  <div class="row align-items-stretch mb-5 justify-content-center">
                      <div class="col-md-6">
                          <div class="form-group">
                              <!-- Name tutor input-->
                              <input class="form-control" id="nombreT" type="text" placeholder="Nombre y Apellido del Tutor"  />
                          </div>
                          <div class="form-group">
                              <!-- Name alumno input-->
                              <input class="form-control" id="nombreE" type="text" placeholder="Nombre y Apellido del Estudiante"  />
                          </div>
                          <div class="form-group">
                              <!-- Email address input-->
                              <input class="form-control" id="email" type="email" placeholder="Correo Electrónico" />
                          </div>
                          <div class="form-group ">
                              <!-- Phone number input-->
                              <input class="form-control" id="celular" type="tel" placeholder="Celular de Contacto (*)"  />
                          </div>
                          <div class="form-group ">
                              <select class="form-select form-select-lg mb-3 selectramite" aria-label="Default select example" id="tramite" >
                                  <option value="0" selected >Tipo de tramite...</option>
                                  <option value="1">Certificado de Escolaridad</option>
                                  <option value="2">Certificado de Titulo en Tramite</option>
                                  <option value="3">Formulario de salida de campo</option>
                                </select>
                          </div>
                          <div ><span type="text" style="color: white">*Campo opcional</span>
                          <div class="form-btn">
                              <button type="button" class="btn btn-success btn-lg btn-block" onclick="solicitarTramite()">Enviar</button>
                          </div>
                      </div>
                      <div class="alert alert-success" id= "alerta" role="alert" hidden></div>
                      </div>  
              </form>
     
       
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="./js/tramite.js"></script>
    </body>
</html>
