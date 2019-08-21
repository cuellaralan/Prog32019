<?php
#ejercicio 1
#Mostrar Variables

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];

var_dump($nombre);
var_dump($apellido);

echo $apellido .  ", " . $nombre;
