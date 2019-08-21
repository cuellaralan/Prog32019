<?php

include_once "./clases/persona.php";
include_once "./clases/alumno.php";


$_nombre = $_GET["nombre"];
//var_dump($_nombre);

$persona = new Persona();

//var_dump($persona);
$persona->_nombre = $_nombre;
$persona->Saludar();


?>