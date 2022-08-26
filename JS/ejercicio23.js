function valida(){
    document.getElementById( "mensaje" ).innerHTML = "";

    if ( document.getElementById( "usuario" ).value == "") {
        alerta( "warning", "El usuario es obligatorio" );
        return false;
    }

    return true;
}

function alerta( tipo, mensaje ){
    document.getElementById( "mensaje" ).innerHTML = 
    '<div class="alert alert-' + tipo +
    ' alert-dismissible fade show" role="alert"><strong>¡AVISO!</strong> ' + mensaje +
    '.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}