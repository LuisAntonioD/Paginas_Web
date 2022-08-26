function click_button(){
    muestra_resultado( "Presionaste el botón (normal)");
}

function click_reset( e ){
    muestra_resultado( "" );
}

function muestra_resultado( texto ){
    document.getElementById( "resultado" ).innerHTML = texto;
}

function click_submit( e ){
    e.preventDefault(); //Evita el comportamiento por default del evento
    //console.log(document-getElementById( "regular" ).checked);

    var texto_html = "NOMBRE: " + document.getElementById( "nombre" ).value;
    texto_html = texto_html + "<br>CONTRASEÑA:" + document.getElementById( "contra" ).value;
    texto_html += "<br>OCULTO:" + document.getElementById( "oculto" ).value;
    texto_html += "<br>REGULAR:" +
    (document.getElementById( "regular" ).checked ? "Si" : "No");

    var beca = "No tiene";
    if(document.getElementById( "beca1" ).checked){
        beca = "Academica";
    }
    else if(document.getElementById( "beca2" ).checked){
        beca = "Economica";
    }
    else if(document.getElementById( "beca3" ).checked){
        beca = "Manutencion";
    }
    texto_html += "<br>BECA: " + beca;

    texto_html += "<br>GRUPO " + document.getElementById( "grupo" ).value;
    texto_html += "<br>PASATIEMPO(S): ";
	// Recorrido sobre el arreglo "options" del select
	for ( var i = 0; i < document.getElementById( "pasatiempo" ).options.length; i++ ) {
		if ( document.getElementById( "pasatiempo" ).options[ i ].selected &&
			  document.getElementById( "pasatiempo" ).options[ i ].value != "" ) {
			texto_html += document.getElementById( "pasatiempo" ).options[ i ].value + ", ";
		}
	}
    texto_html += "<br>COMENTARIO: " + document.getElementById( "comentario" ).value;
    muestra_resultado( texto_html);
    return true; //El evento resulto exitoso
}

function salir() { 
    location.href = ".";
}