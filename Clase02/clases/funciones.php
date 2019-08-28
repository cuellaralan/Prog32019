<?php

class Funciones
{
    public static function Guardar($al)
    {
        if(is_array($_SESSION["arrhay"])){
            array_push($_SESSION["arrhay"],$al);
        }
        
    }

    public static function TraerListado(){
        if(is_array($_SESSION["arrhay"])){
            foreach($_SESSION["arrhay"] as $value){
                echo $val[];
            }

        }
    }   
}
