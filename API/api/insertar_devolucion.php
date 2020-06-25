<?php


include_once 'apidevolucion.php';

$api = new Apiproyecto();

// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);
$id = $data->variables->id;
$fecha_devolucion = $data->variables->fecha_devolucion;


// Sirve para mostrar los datos que se reciben en los logs
/*
error_log(print_r($fecha_devolucion, true));
error_log(print_r($id, true));
*/


echo $api->actualizar($id, $fecha_devolucion);


// Recibimos los datos necesarios para realizar el update, es decir, el id correspondiente y la fecha y hora de la devolucion de la llave


?>

