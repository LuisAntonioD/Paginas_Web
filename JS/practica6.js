function borrar_alumno( e, matricula ){
    e.preventDefault();

    if (confirm( "¿Realmente deseas borar al alumno con la matricula: " + matricula + "?" ) ) {
        window.location = "trabajo6_procesa.php?accion=baja&matricula=" + matricula;
    }
}

function valida_formulario(){
    document.getElementById( "mensaje" ).innerHTML = "";

    if (document.getElementById( "matricula" ).value == "" ) {
        alerta( "danger" ,"La matricula es obligatoria" );
        return false;
    }
    else if (document.getElementById( "nombre" ).value == "" ) {
        alerta( "success" ,"El nombre es obligatorio" );
        return false;
    }
   

    return true;
}


function alerta(tipo, mensaje){
    document.getElementById( "mensaje" ).innerHTML = '<div class="alert alert-' + tipo + ' alert-dismissible fade show" role="alert"><strong>!AVISO!</strong><br>' + mensaje + '.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

}