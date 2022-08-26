function validar( e ) {
	e.preventDefault();

	document.getElementById( "mensaje-nombre" ).innerHTML   ="";
	document.getElementById( "mensaje-matricula" ).innerHTML   ="";
	document.getElementById( "mensaje-correo" ).innerHTML   ="";

	var trs = false;

	if (document.getElementById("nombre").value =="") {
		document.getElementById("mensaje-nombre").innerHTML =
		"El nombre no debe ir vacio";
		document.getElementById("mensaje").innerHTML = 
	"";
		trs = true;
	}

	if (document.getElementById("matricula").value =="") {
		document.getElementById("mensaje-matricula").innerHTML =
		"El nombre no debe ir vacio";
		document.getElementById("mensaje").innerHTML = 
	"";
		trs = true;
	}

	else if(!document.getElementById("matricula").value.match( /^\d+/ )){
		document.getElementById("mensaje-matricula").innerHTML = 
		"La matricula debe llevar solo nÃºmeros";
		document.getElementById("mensaje").innerHTML = 
	"";
		trs = true;
	}

	if (document.getElementById("correo").value =="") {
		document.getElementById("mensaje-correo").innerHTML =
		"El nombre no debe ir vacio";
		document.getElementById("mensaje").innerHTML = 
	"";
		trs = true;
	}

	if(trs){
		return false;
	}

	document.getElementById("mensaje").innerHTML = 
	"Los datos son Correctos";


	return true;
}
