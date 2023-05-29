<?php
$host="localhost:33065";
$bd="sitop";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>