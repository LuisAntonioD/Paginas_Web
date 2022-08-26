function borrar_alumno( e, nombre,usuario,token ){
    e.preventDefault();

    if (confirm( "¿Realmente deseas eliminar el producto con el id: " + nombre + "?" ) ) {
        window.location = "admin_procesa.php?accion=baja&id=" + nombre +
        "&u=" + usuario + "&s=" + token;
    }
    
}

function borrar_inv( e, id,usuario,token ){
    e.preventDefault();

    if (confirm( "¿Realmente deseas eliminar el producto con el id: " + id + "  del inventario?" ) ) {
        window.location = "inventario_procesa.php?accion=baja&id=" + id +
        "&u=" + usuario + "&s=" + token;
    }
    
}




function valida_formulario(){
    document.getElementById( "mensaje" ).innerHTML = "";

    if (document.getElementById( "id" ).value == "" ) {
        alerta( "danger" ,"La id es obligatoria" );
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

