<?php
#ejercicio 2
#Sumar Numeros

$numX = $_GET["numX"];
$numY = $_GET["numY"];

function Sumar($A, $B){

    return $A + $B;
}

echo Sumar($numX,$numY);
