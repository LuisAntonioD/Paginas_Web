function sumar(){
    var a = document.getElementById( "valora" ).value;
    var b = document.getElementById( "valorb" ).value;

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

    var suma = parseFloat( a ) + parseFloat( b );

    document.getElementById( "resultado").innerHTML = 
    "La suma " + a + " + " + b + " = " + suma;
    }

    
}

function salir() { 
    location.href = ".";
}