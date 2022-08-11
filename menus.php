

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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SICI</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/img/logo.png" />
    </head>


    <body id="page-top">
  
    <!-- Navigation-->
    <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-primary fs-3" href="menus.php" > <span class="navbar-brand fas fa-user-graduate text-primary"></span>SICI</a>
              <button class="navbar-toggler text-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <?php echo $USUARIO_NOMBRE;?>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Gracias por visitar SICI</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                  <form class="d-flex justify-content-center">
                    <a  class="btn btn-warning" href="./cerrar_sesion.php"> Cerrar Sesion</a>
                  </form>
              </div>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 350px ;">
                <img src="assets/img/menu21.jpg" class="d-block w-100 img-fluid"alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>S.I.C.I</h5>
                  <p>Sistema de Informacion y Comunicacion Institucional</p>
                </div>
              </div>
              <div class="carousel-item" style="height: 350px ;">
                <img src="./assets/img/imagen menu.png" class="d-block w-100 mg-fluid"   alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Estamos para ayudarnos</h5>
                  <p>Sabemos que la educacion de los jovenes es lo mas importante</p>
                </div>
              </div>
              <div class="carousel-item" style="height: 350px ;">
                <img src="assets/img/menu17.jpg" class="d-block w-100" img-fluid  alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Es bueno encontranos</h5>
                  <p>Todas las posibilidades al alcance de un click</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        

        <!-- Services-->
        <section class="page-section bg-light" id="services">
            <div class="container" >
                <div class="text-center">
                    <h2 class="text-uppercase">¿Que desea consultar?</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-award fa-stack-1x fa-inverse"></i>
                        </span>
                        <a class="nav-link" href="notas.php" ><h4 class="my-3" style="color: rgb(27, 26, 26)">Calificaciones</h4></a>
                        <p class="text-muted">Consulta las notas de las evaluaciones del estudiante en todas las materias</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                        <a class="nav-link" href="informe.php" ><h4 class="my-3" style="color: rgb(27, 26, 26)">Informes Actitudinales</h4></a>
                        <p class="text-muted">Profundiza sobre el seguimiento actitudinal que realizan los docentes al estudiante</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-check fa-stack-1x fa-inverse"></i>
                        </span>
                        <a class="nav-link" href="asistencia.php" ><h4 class="my-3" style="color: rgb(27, 26, 26)">Planillas de Asistencias</h4></a>
                        <p class="text-muted">Revisa el registro de asistencias a clase del estudiante durante todo el año</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-paste fa-stack-1x fa-inverse"></i>
                        </span>
                        <a class="nav-link" href="tramite.php" ><h4 class="my-3" style="color: rgb(27, 26, 26)">Tramites Escolares</h4></a>
                        <p class="text-muted">Realiza solicitudes de diferentes tipos de documentacion al establecimiento educativo</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                        </span>
                        <a class="nav-link" href="contactoinstitucion.php" ><h4 class="my-3" style="color: rgb(27, 26, 26)">Comuniquese con la institucion</h4></a>
                        <p class="text-muted">Dejanos tus dudas, comentarios y sugerencias</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-mobile-screen fa-stack-1x fa-inverse"></i>
                        </span>
                        <a class="nav-link" href="contactodocente.php" ><h4 class="my-3" style="color: rgb(27, 26, 26)">Comuniquese con un docente</h4></a>
                        <p class="text-muted">Comunicate con los docentes, acuerda reuniones. </p>
                    </div>
                </div>
            </div>
        </section>

          <!-- About-->
          <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-uppercase text-primary">CALENDARIO ESCOLAR 2022</h2>
                </div><br>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/clases.webp" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="color: orange">Inicio de clases</h4>
                                <h4 class="subheading"> 16 de Marzo</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Luego de un merecido descanso nos volvemos a encontrar para transitar juntos un nuevo ciclo lectivo, con muchas ganas de aprender juntos.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/primer_cuatri1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="color: orange">Primer Cuatrimestre</h4>
                                <h4 class="subheading">16 de Marzo al 15 de Julio</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">En esta primer etapa del año retomaremos todos los contenidos trabajados en el 2021 y los aprovecharemos como herramientas para construir nuevos conocimientos</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="color: orange">Mesas de examenes (I)</h4>
                                <h4 class="subheading">  Semana del 15 Abril</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Durante esta semana aquellos estudiantes que esten en condiciones de rendir sus previas y/o equivalencias podran hacerlo, es fundamental contarse con los docentes unos dias antes para acordar las pautas de los examenes.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vacaciones.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="color: orange">Receso Invernal</h4>
                                <h4 class="subheading">18 de Julio al 1 de Agosto</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nos tomamos dos semanas para descansar de la rutina y recargar pilas, sin embargo es importante approvechar este tiempo para fortalecer aquellos aspectos que nos haran dar nuestro maximo potencial.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/segundo_cuatri.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="color: orange">Segundo Cuatrimestre</h4>
                                <h4 class="subheading"> 1 de Agosto al 25 de Novimbre</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Volvemos a las aulas y esta vez con mas ganas que antes, retomaremos los conocimientos abordados el cutrimestre anterior y nos encaminaremos a reliazar nuestras producciones finales para el cierre del ciclo lectivo</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="color: orange">Mesas de Examenes (II)</h4>
                                <h4 class="subheading">Semana del 3 de Octubre</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Una nueva opurtunidad para sacrnos de encima aquellas materias pendientes, a aprevechar estas fechas para poder tener una vacaciones de vereno mas largas y relajadas.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/mesas.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="color: orange">P.A.I.R</h4>
                                <h4 class="subheading"> 28 de Noviembre al 5 de Diciembre</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">El año esta finalizando y para retomar todas las vivencias trancitadas realizaremos la etapa de recuperacion e integracion.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                               FELICES
                                <br />
                              VACACIONES!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
                        
 <!-- Team-->
 <section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class=" text-uppercase text-primary">EQUIPO DOCENTE DEL MES</h2>
            <h4 class=" text" style="color: orange">Conoce a una pequeña parte de nuestra gran familia</h4>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Junto con los estudiantes, cada mes selecionamos a tres docentes diferentes para que los conozcas mejor</p></div>
            <div class="col-lg-8 mx-auto text-center"><p class="large text" style="font-size: large">Los nominados de este mes son...</p></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/profesora.jpg" alt="..." />
                    <h4>Sandra Gomez</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning btn-xl" data-bs-toggle="modal" data-bs-target="#MasInfo1" style="color: white">Conocela mas</button>
  
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/profesor (1).jpg" alt="..." />
                    <h4>Victor Moreno</h4>
                    <button type="button" class="btn btn-warning btn-xl" data-bs-toggle="modal" data-bs-target="#MasInfo2" style="color: white">Conocelo mas</button>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/profesor.jpg" alt="..." />
                    <h4>Hugo Ruffini</h4>
                    <button type="button" class="btn btn-warning btn-xl" data-bs-toggle="modal" data-bs-target="#MasInfo3" style="color: white">Conocelo mas</button>
                    
                </div>
            </div>
    </div>
        
</section>
  
   <!-- Modal1-->
   <div class="modal fade" id="MasInfo1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profesora de Historia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                   <p>
                    Profesora de Ciencias Sociales e Historia con experiencia tanto en el sector público como en el privado. Actualmente trabaja con grupos de alumnos de diferentes niveles y edades, sobre todo en educación secundaria, educación para adultos y enseñanza universitaria. Especialista en técnicas de investigación en Historia Moderna.
                    </p>
                    <p><u>Formación</u>  </p>
                    <p>2000-2005. Profesorado en Historia Universidad Nacional de Formosa</p>
                    <p>2008-2012. Licenciatura en Historia. Universidad de Cordoba.</p>
                    <p><u> Habilidades Profesionales</u></p>
                    <p>Especializado en técnicas de investigación en Historia Moderna.</p> 
                    <p>Capacidad de análisis y síntesis.</p>
                    <p>Aplicación de estrategias mixtas en investigación (cualitativas y cuantitativas)</p>     
                </form>
            </div>
        </div>
    </div>
 </div>
 <!-- Modal2-->
 <div class="modal fade" id="MasInfo2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profesor de Matematica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                   <p>Profesor Licenciado en Matemática, especializado en la metodología del aprendizaje para estudiantes universitarios. Ha desarrollado un método propio para crear clases amenas y facilitar el uso de fórmulas. Los alumnos aprenden de manera entretenida, a la vez que aumentan el rendimiento académico. El 97% de los estudiantes aprueba el curso y el 70% de ellos con un promedio superior a 7 puntos.
                    </p>
                    <p><u>Formación</u>  </p>
                    <p>1997-2000. Profesorado en Matematica Universidad Nacional de Formosa</p>
                    <p>2008-2012. Licenciatura en Matematica. Universidad de Salta.</p>   
                </form>
            </div>
        </div>
    </div>
 </div>

 <!-- Modal3-->
 <div class="modal fade" id="MasInfo3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profesor de Informatica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                   <p>Profesor de Informatica con 2 años de especialización en métodos de pedagogía activa. Su pasion es  estimular el talento del estudiante  mediante la utilización de nuevas estrategias de aprendizaje tecnologicas implícito a través de la experiencia y la creatividad.
                    </p>
                    <p><u>Formación</u>  </p>
                    <p>2014-2019. Licenciado en tecnologias de la informacion y comunicacion</p>
                    <p>2020-2022. Especializacion en docencia Universitaria</p>   
                </form>
            </div>
        </div>
    </div>
 </div>
                                
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script>
            const myCarouselElement = document.querySelector('#carouselExampleCaptions')
             const carousel = new bootstrap.Carousel(myCarouselElement, {
                interval: 3000,
                })
        </script>
    </body>
</html>
