<?php
session_start();
// Cómo subir el archivo
$fichero = $_FILES["file"];
$seccion = $_POST["nombreSeccion"];

$ruta = "../areas/".$_SESSION["area_usr"]."/".$seccion."/".$fichero['name'];

// Cargando el fichero en la carpeta "subidas"
//move_uploaded_file($fichero["tmp_name"], "protocolos/".$fichero["name"]);

//move_uploaded_file($fichero["tmp_name"], "secciones/$carpeta/".$fichero["name"]);

move_uploaded_file($fichero["tmp_name"], $ruta);


echo $ruta;

//move_uploaded_file($fichero["tmp_name"], $carpeta."/".$fichero["name"]);
// Redirigiendo hacia atras
header("Location: " . $_SERVER["HTTP_REFERER"]);
 ?>
