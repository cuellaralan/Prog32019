<?php
#Ejercicio 3
#Sumar dos números II

$numX = $_GET["numX"];
$numY = $_GET["numY"];

function Sumar($A, $B){

    return $A + $B;
}

echo "Numero A: " . $numX . " y " . "Numero B: " . $numY;
echo "<br/>";
echo "Resultado : " . Sumar($numX,$numY);
