<?php
$servidor="localhost";
$nombreBD="carrito";
$usuario="root";
$pass="";

$conexion=new mysqli($servidor,$usuario,$pass,$nombreBD);
if($conexion -> connect_error){
    die("No se puede conectar a la base de datos");
}