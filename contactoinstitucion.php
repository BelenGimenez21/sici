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


<body id=contactoCuerpo>       
    <!-- Contacto-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase " style="color: #e08206">Contactenos</h2>
                <h3 class="section-subheading" style="color: white">No dude en compartir con la institución todas sus dudas e
                    inquietudes, estamos para ayudarnos.</h3>
            </div>
            <form id="contactForm">
                <div class="row align-items-stretch mb-5 justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- input-->
                            <input class="form-control" id="asunto" type="text" placeholder="Asunto"  />
                        </div>
                            <div class="form-group">
                                <!-- Message input-->
                                <textarea class="form-control" id="msje" placeholder="Escriba aquí su mensaje"></textarea>
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
            <script src="js/contactoinstitucion.js"></script>
</body>

</html>