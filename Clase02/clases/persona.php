<?php
//include_once "../poo.php";
// include_once "../index.php";


class Persona
{

    public $_nombre;
    public $_apellido;

    public function __construct($nombre, $apellido){
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
    }

    public function datosPersona(){
        return "NOMBRE:" . $this->_nombre . ";". "APELLIDO:" . $this->_apellido . ";";
    }

    public function toJson(){
      return  json_encode($this);
    }

    public function toObject(){
        return json_decode();
    }
}