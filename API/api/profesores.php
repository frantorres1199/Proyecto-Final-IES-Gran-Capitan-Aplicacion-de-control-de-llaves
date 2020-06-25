<?php


include_once 'apidevolucion.php';

$api = new Apiproyecto();

echo $api->getProfesores();


// Se envia el nombre de los profesores los cuales tienen una solicitud realizada

?>
