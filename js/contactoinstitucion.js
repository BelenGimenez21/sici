var mensajesIns = [];

function mostrarMensaje(tipo, mensaje){
    document.getElementById("alerta").hidden = true;
    document.getElementById("alerta").innerHTML = mensaje;
    switch (tipo){
        case 'error':
            document.getElementById("alerta").className = 'alert alert-danger ';            
            break;
        case 'ok':
            document.getElementById("alerta").className = 'alert alert-success ';
            break;
        case 'info':
            document.getElementById("alerta").className = 'alert alert-info ';
            break;
    }
    document.getElementById("alerta").removeAttribute("hidden");
}

function validarFormulario(asunto,msje){
    if ((msje.trim()) == ""){
        mostrarMensaje("error","El mensaje no puede ser vacio");
        return false;
    }
    if ((asunto.trim()) == ""){
    mostrarMensaje("error","El mensaje no posee asunto ");
    return false; 
    }
    if(msje.length>=300){
        mostrarMensaje("error","El mensaje no puede tener una longitud mayor a 300 caracteres");
        return false;
    }
    return true;
}

function enviarMensaje(){
    let msje = document.getElementById("msje").value.trim() ;
    let asunto = document.getElementById("asunto").value.trim();
   
  

    if (!validarFormulario(asunto,msje)){  
        return; } 
     
        mensajesIns.push([asunto,msje]);
        mostrarMensaje("ok","Gracias por comunicarse con nosotros.Le responderemos a la brevedad.");
       
        
}