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

    <!-- Contacto-->

<body id="contactoCuerpo2">      
    
    <section class="page-section" id="contact2">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase " style="color: #e08206">Comuniquese</h2>
                <h3 class="section-subheading" style="color: white">Transmita sus consultas a los profesores.</h3>
            </div>
            <form id="contactForm">
                <div class="row align-items-stretch mb-5 justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <select class="form-select form-select-lg mb-3 selectramite" aria-label="Default select example" id="profesor" >
                                <option value="0" selected >Seleccione la materia que dicta el profesor...</option>
                                <option value="1">Lengua</option>
                                <option value="2">Matematicas</option>
                                <option value="3">Ingles</option>
                                <option value="4">Geografia</option>
                                <option value="5">Biologia</option>
                                <option value="6">Artistica</option>
                                <option value="7">Educacion Fisica</option>
                                <option value="8">Etica y Ciudadania</option>
                                <option value="9">Informatica</option>
                                <option value="10">Fisicoquimica</option>
                                <option value="11">Historia</option>
                              </select>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- input-->
                            <input class="form-control" id="asunto" type="tel" placeholder="Asunto" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="msje" placeholder="Escriba aquí su mensaje"></textarea>
                        </div>
                    </div>
                    &nbsp
                    <div class="form-btn">
                        <button type="button" class="btn btn-success btn-lg btn-block"
                            onclick="enviarMensaje()">Enviar</button>
                    </div>
                    <div class="alert alert-success" id="alerta" role="alert" hidden></div>
                </div>
               
            </form>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="js/contactodocente.js"></script>
</body>

</html>