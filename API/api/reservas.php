<?php


include_once 'apidevolucion.php';

$api = new Apiproyecto();


// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);
$profesor=$data->variables->profesor;


// Sirve para ver que datos recibimos a traves del log
//error_log(print_r($data, true));

echo $api->getReservas($profesor);


// Sirve para enviar los datos correspondientes de las reservas que tienen el profesor el cual fue solicitado en entrega1.php


?>
