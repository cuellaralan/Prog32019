<?php
//include_once "../poo.php";
// include_once "../index.php";


class Persona
{

    public $_nombre;

    public function construct__($nombre){
        $nombre = $this->_nombre;
    }

    public function Saludar(){
        echo "Hola " . $this->_nombre;
    }
}