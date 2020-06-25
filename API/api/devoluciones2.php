<?php


include_once 'apidevolucion.php';

$api = new Apiproyecto();

// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);
$profesor2 = $data->variables->profesor;

// Sirve para mostrar los datos que recibimos a traves de los logs
//error_log(print_r($profesor2, true));

echo $api->getdevoluciones2($profesor2);


// Sirve para enviar los datos del profesor que fue seleccionado en devolucion1.php

?>

