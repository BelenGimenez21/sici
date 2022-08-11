var mensajes = [];

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

function validarFormulario(asunto,msje,profesor){
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
    if (profesor == "0") {
        mostrarMensaje("error","Falta seleccionar una materia")
        return false;
    }
    return true;
}

function enviarMensaje(){
    let msje = document.getElementById("msje").value.trim() ;
    let asunto = document.getElementById("asunto").value.trim();
    let profesor = document.getElementById("profesor").value;
  

    if (!validarFormulario(asunto,msje,profesor)){  
        return; } 
     
        mensajes.push([asunto,msje,profesor]);
        mostrarMensaje("ok","Gracias por comunicarse con nosotros.Le responderemos a la brevedad.");
       
        
}