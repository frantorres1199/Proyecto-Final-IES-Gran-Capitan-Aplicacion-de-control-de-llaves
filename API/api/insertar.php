<?php
include_once 'apidevolucion.php';

$api = new Apiproyecto();

// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);

// Insercciones
$aula = $data->variables->aula;
$hora = $data->variables->hora;
$dia  = $data->variables->dia;
$profesor = $data->variables->profesor;
$fecha_entrega = $data->variables->fecha_entrega;
$descripcion = $data->variables->descripcion;



//Mostrar datos por si hubiese fallo;
//error_log(print_r($insertar, true));
/*
error_log(print_r($aula, true));
error_log(print_r($hora, true));
error_log(print_r($dia, true));
error_log(print_r($profesor, true));
error_log(print_r($fecha_entrega, true));
error_log(print_r($descripcion, true));
*/

echo $api->getinsertar($aula, $dia, $hora, $profesor, $fecha_entrega, $descripcion);



// recibe los datos de la reserva en la cual fue entregada la llave


?>
