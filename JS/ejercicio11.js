/*CODIGO JAVASCRIPT*/
//los comentarios son los mismos que se usan en java

function Bienvenida(){
    alert('Bienvenido a eventos de JavaScript');
    pidenombre();//Invoca una funcion que pide nombre
    }

    function pidenombre(){
        var  minombre = prompt("Dame tu nombre:");

        if(minombre != ""){
            document.getElementById("nombre").innerHTML = "Hola " + minombre;
        }
        else{
            document.getElementById("nombre").innerHTML = "Debes escribir tu nombre... ";
        }
    }

function cambiarimagen(obj, nombreimagen){

    //document.getElementById( "imagen1" ).src = "images/fondo.jpg";

    //This se recibe como referencia la objeto  que genera 
    obj.src = "./images/" + nombreimagen;
}


function avisoimagen(obj){
    alert("Hiciste click en: " + obj.id + "\nRuta:" + obj.src);

}


function salir() { 
    location.href = ".";
}