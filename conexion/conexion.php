<?php

$servidor="localhost";
$usuario="root";
$password="";
$bd="crud_php";

$conex=mysqli_connect($servidor,$usuario,$password,$bd);

If (!$conex) {
    echo "Error: No se pudo conectar a la BD MySQL<br>";
    exit;
} 
mysqli_set_charset($conex,"utf8");
?>