<?php
session_start();
//session_unset();
//Variables Super Globales
if(!isset($_SESSION["arrhay"])){
    $_SESSION["arrhay"] = array();//Inicializa el array 
}

//$_SESSION["arrhay"] =;
//$_GET --> sirve para obtener la data del metodo

//var_dump($_GET);

//$nombre = $_GET["nombre"];

//echo $nombre;

//isset($_GET["nombre"]);//para saber si podemos usar el array
//------------------------------------------------------------------------------

include_once "./clases/persona.php";
include_once "./clases/alumno.php";
require_once "./clases/funciones.php";

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
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['cantidad']) && !empty($_POST['cantidad'])) {
//         $cant = $_POST['cantidad'];
        
//         $i=0;
        
//         while ($i < $cant) {
            
//             $i++;
//             //$alumno;
//             $alumno->toObject();
            
//         }
//     }
// }

// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     if (isset($_GET["nombre"]) && isset($_GET["apellido"])) {
//         $_nombre = $_GET["nombre"];
//         $_apellido = $_GET["apellido"];
//         $alumno = new Alumno($_nombre, $_apellido);
        
//         //$arr = [];
//         $arr = $_SESSION["arrhay"];
//         array_push($arr,$alumno);
//         $alumno->toJson($arr);
        
//     }


// }
//-----------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && !empty($_SESSION["arrhay"])) {
        $_nombre = $_POST["nombre"];
        $_apellido = $_POST["apellido"];
        
        //Preparar para usar metodos por POST
        $alumno = new Alumno($_nombre, $_apellido);   
        // $arr = [];
        // $arr = $_SESSION["arrhay"];
        // array_push($arr,$alumno);
        // $alumno->toJson($arr);
        Funciones::Guardar($alumno);
        
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["nombre"]) && isset($_GET["apellido"])) {
        //Preparar para usar metodos por GET
        $i=0;
        //$cant = $_SESSION["arrhay"];
        while ($i < $cant) {
            
            $i++;
            //$alumno;
            //$alumno->toObject();
            
        }
    }


}
#---------------------------
