var TramitesList = [];

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

function validarFormulario(nombreT,nombreE,email,celular,tramite){
    let regExp = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    let regex = /^[0-9]*$/;
    if ((email.trim()) == ""){
        mostrarMensaje("error","El correo no puede ser vacio");
        return false;
    }
    if (!regExp.test(email)){
        mostrarMensaje("error","El correo usado no es valido") ;
        return false;
    }
    if (((nombreT.trim()) == "")|| (((nombreE.trim()) == ""))){
    mostrarMensaje("error","Falta introducir algunos de los nombres");
    }
    if ((/[0-9]/.test(nombreT)) || (/[0-9]/.test(nombreE))) {
        mostrarMensaje("error","Los nombres no pueden contener números")
        return false;
    }
    if (!regex.test(celular)){
        mostrarMensaje("error","El número de contacto no es valido")
        return false;
    }
    if (tramite == "0") {
        mostrarMensaje("error","Falta seleccionar un tipo de tramite")
        return false;
    }
    return true;
}

function solicitarTramite(){
    let tramite = document.getElementById("tramite").value ;
    let email = document.getElementById("email").value.trim() ;
    let nombreT = document.getElementById("nombreT").value.trim();
    let nombreE = document.getElementById("nombreE").value.trim();
   
  

    if (!validarFormulario(nombreT,nombreE,email,tramite,celular)){  
        return; } 
     
        TramitesList.push([nombreT,nombreE,tramite,email,celular]);
        mostrarMensaje("ok","Nos comunicaremos a la brevedad para dar respuesta a su solicitud.");
        
        document.getElementById("tramite").value="0";
        document.getElementById("email").value="";
        document.getElementById("nombreT").value="";
        document.getElementById("nombreE").value="";
        document.getElementById("celular").value="";
        
}