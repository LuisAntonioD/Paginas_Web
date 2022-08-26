/*function validar ( e ){
	e.preventDefault();
	
	if (document.getElementById("renglones").value =="") {
		alert("Los renglones no deben ir vacios");
trs = false;
	}
	return true;
}*/

$( document ).ready( function() {

	$( "#form-tabla-multiplicar" ).submit( function( obj ) {

		if ( $( "#renglones" ).val() == "" ) {
			alert( "los renglones no deben estar vacÃ­os" );
			$( "#renglones" ).focus();
			return false;
		}
		else if ( !$.isNumeric( $( "#renglones" ).val() ) ) {
			alert( "No se permiten caracteres no numericos" );
			$( "#renglones" ).focus();
			return false;
		}
		else if ( $( "#renglones" ).val() <= 0 ) {
			alert( "Los renglones deben ser mayor que cero" );
			$( "#renglones" ).focus();
			return false;
		}

		else if ( $( "#columnas" ).val() == "" ) {
			alert( "las columnas no deben estar vacÃ­os" );
			$( "#columnas" ).focus();
			return false;
		}
		else if ( !$.isNumeric( $( "#columnas" ).val() ) ) {
			alert( "No se permiten caracteres no numericos" );
			$( "#columnas" ).focus();
			return false;
		}
		else if ( $( "#columnas" ).val() <= 0 ) {
			alert( "Las columnas deben ser mayor que cero" );
			$( "#columnas" ).focus();
			return false;
		}

		return true;

	});

});