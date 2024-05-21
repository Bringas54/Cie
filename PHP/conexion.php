<?php
$server="localhost";
$db="cie";
$user="root";
$pass="";

$conexion = new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno){
    die("Conexion Fallida". $conexion->connect_errno);
}else{
    echo"conectado";
}
$conexion->close();
?>