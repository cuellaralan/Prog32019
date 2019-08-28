<?php

class Funciones
{
    public static function Guardar($al)
    {
        array_push($_SESSION["arrhay"], json_encode($al));
    }

    // public static TraerListado(){

    // }
}
