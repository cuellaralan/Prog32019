<?php
//Variables Super Globales

//$_GET --> sirve para obtener la data del metodo

//var_dump($_GET);

//$nombre = $_GET["nombre"];

//echo $nombre;

//isset($_GET["nombre"]);//para saber si podemos usar el array
//------------------------------------------------------------------------------

include_once "./clases/persona.php";
include_once "./clases/alumno.php";

//METODO GET
// if(isset($_GET["nombre"]) && isset($_GET["apellido"])){

//     $_nombre = $_GET["nombre"];
//     $_apellido = $_GET["apellido"];

//     $persona = new Persona($_nombre,$_apellido);
// }

// $datos = $persona->datosPersona();

// $datos2 = $persona->toJson();

// //echo $datos;
// echo "<br/>";
// echo $datos2;


//METODO POST
//Cargar un array y devolver na lista de alumno
//$varSession = $_SESSION[""];
//var_dump($varSession);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cantidad']) && !empty($_POST['cantidad'])) {
        $cant = $_POST['cantidad'];
        //var_dump($_POST);
        $i=0;
        $arr = [];
        while ($i < $cant) {
            $alumno = new Alumno("Hernan", "Saraza");
            $i++;
            $alumno;
            array_push($arr,$alumno);
            
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["nombre"]) && isset($_GET["apellido"])) {
        //$_nombre = $_GET["nombre"];
        //$_apellido = $_GET["apellido"];
        $arr = [];
        $i=0;
        while($i){
            echo $alumno->toJson();
        }
        //$persona = new Persona($_nombre, $_apellido);
    }

    $datos = $persona->datosPersona();

    $datos2 = $persona->toJson();

    //echo $datos;
    echo "<br/>";
    echo $datos2;
}
