function calcular(){
    var a = document.getElementById( "valora" ).value;
    var b = document.getElementById( "valorb" ).value;


	//Otra forma de seleccionar un objeto DOM es por su nombre
	//document.getElementaryById

	//console.log( document.getElementsByName( "operacion" ))

    //Agergar clase de bootstrap al resultado 
    document.getElementById( "resultado" ).classList.remove( "text-success" );
    document.getElementById( "resultado" ).classList.add( "text-danger" );

    if (a == "" || b == "") {
        document.getElementById( "resultado").innerHTML = 
        "Debes escribir ambos valores";
    } 
    else if (isNaN(parseFloat(a)) || isNaN(parseFloat(b))){
        document.getElementById( "resultado").innerHTML = 
        "Debes escribir numeros";
    }
    else {

        //Agergar clase de bootstrap al resultado 
        document.getElementById( "resultado" ).classList.remove( "text-danger" );
        document.getElementById( "resultado" ).classList.add( "text-success" );
    //Conversion de string a numero entero: parseInt()
    //Conversion de string a numero float: parseFloat()
    //Conversion de string a numero boolean: parseBoolean()
    //Conversion de numero/booleano a string: numero.toString()


	if (document.getElementsByName( "operacion" )[0].checked) {
		var suma = parseFloat( a ) + parseFloat( b );
		document.getElementById( "resultado").innerHTML = 
    	"La suma " + a + " + " + b + " = " + suma;

	}
	else if (document.getElementsByName( "operacion" )[1].checked) {
		var resta = parseFloat( a ) - parseFloat( b );
		document.getElementById( "resultado").innerHTML = 
    	"La resta " + a + " - " + b + " = " + resta;

	}
	else if (document.getElementsByName( "operacion" )[2].checked) {
		var multiplicacion = parseFloat( a ) * parseFloat( b );
		document.getElementById( "resultado").innerHTML = 
    	"La multiplicación " + a + " * " + b + " = " + multiplicacion;

	}
	else if (document.getElementsByName( "operacion" )[3].checked) {

		if (parseFloat ( b ) == 0) {
			document.getElementById( "resultado" ).classList.remove( "text-success" );
    		document.getElementById( "resultado" ).classList.add( "text-danger" );
			document.getElementById( "resultado").innerHTML = 
        	"No existe la divición entre 0";
		}
		else {
		var divicion = parseFloat( a ) / parseFloat( b );
		document.getElementById( "resultado").innerHTML = 
    	"La divición " + a + " / " + b + " = " + divicion;

		}

	}
	else if (document.getElementsByName( "operacion" )[4].checked) {
		var potencia = Math.pow( a, b );
		document.getElementById( "resultado").innerHTML = 
    	"La potencia " + a + " ^ " + b + " = " + potencia;

	}

    }

    
}

function salir() { 
    location.href = ".";
}