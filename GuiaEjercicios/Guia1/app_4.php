<?php
#Region Ejercicio 4
#Sumar números
// Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
// supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
// se sumaron

function Sumar($A, $B){

    return $A + $B;
}

$resultado = 0;
$contador = 0;


    while($resultado < 1000 ){
        $resultado = Sumar(1,$contador);

        echo $resultado . "<br/>";

        $contador += 1;
    }



echo "Se sumaron ..." . $contador . "numeros";
