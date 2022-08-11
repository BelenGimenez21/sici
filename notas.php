
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

<body >      
      <br> <br>
         <br>
         <div class="content justify-content-center">
         <br> <br>
          <div class="row justify-content-center">   
             <div class="col-md-6">
             <p class="h2">Primer Cuatrimestre</p>
             <table class="table table-hover table-bordered">
              <thead>
             
                <tr>
                  <th scope="col" >Materia</th>
                  <th scope="col" >Nota Final</th>
                </tr>
              </thead>
                    <tbody>

                    <?php 
                
                        $sql = "SELECT calificaciones_nota,periodos_descri,
                        materias_descri FROM calificaciones,periodos,materias 
                        WHERE rela_periodos=id_periodos and rela_materias=id_materias and rela_periodos=1";
                        $alumnos_rst = $conn->query($sql)->fetchAll(); 
                        

                    
                        foreach ($alumnos_rst as $todosRegistros => $unRegistro) {
                          echo "<tr>";
                          echo "<td>". $unRegistro['materias_descri']."</td>";
                          echo "<td>". $unRegistro['calificaciones_nota']."</td>";
                          echo "</tr>";
                        }
                        
                        //print_r($alumnos_rst);
                      
                    ?>
                  
                    </tbody>
             </table>
            </div>
           </div>

           <div class="row justify-content-center">   
             <div class="col-md-6">
             <p class="h2">Segundo Cuatrimestre</p>
             <table class="table table-hover table-bordered">
              <thead>
             
                <tr>
                  <th scope="col" >Materia</th>
                  <th scope="col" >Nota Final</th>
                </tr>
              </thead>
                    <tbody>

                    <?php 
                
                        $sql = "SELECT calificaciones_nota,periodos_descri,
                        materias_descri FROM calificaciones,periodos,materias 
                        WHERE rela_periodos=id_periodos and rela_materias=id_materias and rela_periodos=2 ";
                        $alumnos_rst = $conn->query($sql)->fetchAll(); 
                        

                    
                        foreach ($alumnos_rst as $todosRegistros => $unRegistro) {
                          echo "<tr>";
                          echo "<td>". $unRegistro['materias_descri']."</td>";
                          echo "<td>". $unRegistro['calificaciones_nota']."</td>";
                          echo "</tr>";
                        }
                        
                        //print_r($alumnos_rst);
                      
                    ?>
                  
                    </tbody>
             </table>
            </div>
           </div>
         </div>  
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
