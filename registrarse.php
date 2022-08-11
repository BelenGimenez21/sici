<?php

  
    if(isset($_POST['registro'])){
        registrar();
   }
   

   function registrar(){
      global $conn;

      $id = "";
      $nombre = trim($_POST['nombreUsuario']); //Nombre de Usuario    
      $apellido = trim($_POST['apellidoUsuario']);
      $dni = trim($_POST['dniAlumno']);
      $email = trim($_POST['email']); //Email    
      $celular = trim($_POST['cel']); //cel
      $contra = trim($_POST['contrasenia']); //Password   
      $contraConfirm = trim($_POST['contraseniaConfirm']); //Confirmación de Password  
     
   
      if ($contra != $contraConfirm) {        
          echo "<script> alert('Las contraseñas no coinciden')  </script>";
         return;             
      } 
  
      if (($nombre == "") || ($apellido == "") || ($dni == "") || ($email == "") || ($celular == "") || ($contra == "") || ($contraConfirm == "")) {
          echo "<script> alert('Debe completar todos los campos')  </script>";
         return;
      }
      
      if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
          echo "<script> alert('El correo no es valido')  </script>";
          return;             
      } 
    
      $sqlAlumno = "SELECT alumno_dni,id_alumno FROM alumnos
      WHERE alumno_dni= '".$dni."'";
      $alumnos_rst = $conn->query($sqlAlumno); 
  
     if($alumnos_rst->rowCount() > 0){
          $alumnos_assoc = $alumnos_rst->fetchAll();
          foreach ($alumnos_assoc as $row => $columns) {
              $idAlumno = $columns["id_alumno"];
          }
      }else{
          echo "<script> alert('El dni del alumno ingresado no se encuentra registrado en esta institucion.')  </script>";
       }
        
  
      $sqlemail = $conn->query("Select * From persona Where persona_correo = '{$email}'")->fetch(PDO::FETCH_ASSOC);
      if (is_array($email)) {
          echo "<script> alert('El correo ya se encuentra registrado') </script>";
          return;       
      }
    
      $sqlInsertPersona = $conn->prepare("INSERT INTO persona(id_persona, persona_nombre, persona_apellido, persona_correo, persona_celular) 
                                        VALUES ('','".$nombre."','".$apellido."','".$email."','".$celular."')");
      $sqlInsertPersona->execute();
      $ultimoIdPersona = $conn->lastInsertId();
  
      $sqlInsertUsuario = $conn->prepare("INSERT INTO usuario(id_usuario, usuario_password, rela_persona) 
                                        VALUES ('','".$contra."','".$ultimoIdPersona."')");
       $sqlInsertUsuario->execute();
       $ultimoIdUsuario = $conn->lastInsertId();
  
  
      $sqlInsertAlumnos = $conn->prepare("INSERT INTO alumnos_padres(id_alumnos_padres, rela_alumnos, rela_usuarios) 
                                        VALUES ('','".$idAlumno."','".$ultimoIdUsuario."')");
      $sqlInsertAlumnos->execute();
      
  
      $count = $sqlInsertAlumnos->rowCount();        
  
      if ($count == 1) {
          echo "<script> alert('Registro exitoso') </script>";
          return;
      } else {
          echo "<script> alert('Error') </script>";
          return;
      }
   }
?>
