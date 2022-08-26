<?php
/*
    BIBLIOTECA: mysql.lib.php
    AUTOR: Luis Antonio Arredondo Deanda
    FECHA: Julio 2022
*/

function conectar(){
    $server="localhost";
    $user="root";
    $passwd="rootadmin01";
    $dbname="electrodomex";
    return new mysqli($server, $user, $passwd, $dbname );
}

function query( $sql ){
    global $mysqli;
    $rs =  $mysqli->query ($sql) or die ("Error: ".$mysqli->error);
    return $rs;

}

function desconectar(){
    global $mysqli;
    $mysqli->close();

}

function verifica_usuario( $usuario,$password ){
    $sql = "select * from usuario
    where
    usuario like binary '$usuario' and
    password like binary '$password'";
     
    $rs = query( $sql );
    return $rs -> num_rows > 0;
}
    
    ?>