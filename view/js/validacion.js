

function valid(e)
{
    e.preventDefault();
    let registro = document.getElementById('registro')
    let nombre = document.getElementById('nombre')
    let apellido = document.getElementById('apellido')
    let correo = document.getElementById('correo')
    let telefono = document.getElementById('telefono')
    let contrasena = document.getElementById('contrasena')
    let valid = true;
    if (nombre.value==""){
        nombre.style.borderColor="red";
        valid = false;
    }

    if (apellido.value==""){
        apellido.style.borderColor="red";
        valid = false;
    }
    
    if (apellido.value==""){
        apellido.style.borderColor="red";
        valid  = false;
    }

    if (correo.value==""){
        correo.style.borderColor="red";
        valid  = false;
    }

    if (telefono.value==""){
        telefono.style.borderColor="red";
        valid  = false;
    }

    if (contrasena.value==""){
        contrasena.style.borderColor="red";
        valid  = false;
    }
    if (valid==true){
        registro.submit();
    }

}

