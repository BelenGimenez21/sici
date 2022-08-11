<?php 

  if(isset($_POST['login'])){ //pregunta si existe la variable
    if(isset($_POST['email'])){
         $email = trim($_POST['email']);
         $password_validate = trim($_POST['password']);

         if($email==""){
           echo '   <script> alert("Email vacío")   </script>';
         }elseif($password_validate==""){
            echo '<script> alert("Password vacío") </script>';
         }else{
            include "db/conexion.php";
            $sql = "SELECT usuario_password,id_usuario,persona_correo,id_usuario,
            persona_nombre,persona_apellido FROM usuario,persona
            WHERE rela_persona=id_persona  and persona_correo = '".$email."'  and usuario_password='".$password_validate."'";
            $usuario_rst = $conn->query($sql); 

           if($usuario_rst->rowCount() >0){
                $usuarios_assoc = $usuario_rst->fetchAll();
                foreach ($usuarios_assoc as $row => $columns) {
                    session_start();
                    $_SESSION["ID"]=$columns["id_usuario"];
                    $_SESSION["USUARIO_NOMBRE"]=$columns["persona_nombre"]." ".$columns["persona_apellido"];
                    $_SESSION["CORREO"]=$columns["persona_correo"];
                    header('Location: menus.php');
                }

           }else{
              echo "<script> alert('El correo o contraseña son incorrectos.')  </script>";
           }
            
         }
    
    }
  }

?>