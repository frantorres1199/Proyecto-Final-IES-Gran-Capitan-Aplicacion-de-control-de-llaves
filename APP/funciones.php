<?php

//Archivo donde se almacenan todas las funciones

function profesores()
        {

	//API URL
	$url = 'http://cpd.iesgrancapitan.org:9034/api/profesores.php';

	//create a new cURL resource
	$ch = curl_init($url);

	//setup request to send json via POST
	$data = array(
    	'username' => 'codexworld',
    	'password' => '123456'
	);
	$payload = json_encode(array("user" => $data));

	//attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

	//set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

	//return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	//execute the POST request
	$result = curl_exec($ch);

	$a = json_decode($result, true);

	return $a;

	//close cURL resource
	curl_close($ch);

}

function reservas($profesor)
        {
	//API URL
        $url = "http://cpd.iesgrancapitan.org:9034/api/reservas.php";

        //create a new cURL resource
        $ch = curl_init($url);

        //setup request to send json via POST
        $data = array(

        'profesor' => "$profesor",

        );
        $payload = json_encode(array("variables" => $data));

        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = curl_exec($ch);

        return json_decode($result, true);

 }

function inserccion($insertar){

        //API URL
        $url = "http://cpd.iesgrancapitan.org:9034/api/insertar.php";

        //create a new cURL resource
        $ch = curl_init($url);

        $payload = json_encode(array("variables" => $insertar));

        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = curl_exec($ch);

        return json_decode($result, true);

 }

function devolucion()
        {

        //API URL
        $url = 'http://cpd.iesgrancapitan.org:9034/api/devoluciones.php';

        //create a new cURL resource
        $ch = curl_init($url);

        //setup request to send json via POST
        $data = array(
        'user' => 'osos',
        );
        $payload = json_encode(array("variables" => $data));

        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = curl_exec($ch);

        $a = json_decode($result, true);

        return $a;

        //close cURL resource
        curl_close($ch);

}

function devolucion2($profesor2)
        {

        //API URL
        $url = "http://cpd.iesgrancapitan.org:9034/api/devoluciones2.php";

        //create a new cURL resource
        $ch = curl_init($url);

        //setup request to send json via POST
        $data = array(

        'profesor' => "$profesor2",

        );
        $payload = json_encode(array("variables" => $data));

        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = curl_exec($ch);

        return json_decode($result, true);

 }

function inserccion_devolver($insertar_devolucion){

        //API URL
        $url = "http://cpd.iesgrancapitan.org:9034/api/insertar_devolucion.php";

        //create a new cURL resource
        $ch = curl_init($url);

        $payload = json_encode(array("variables" => $insertar_devolucion));

        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = curl_exec($ch);

        return json_decode($result, true);

 }

function historico()
        {
        //API URL
        $url = 'http://cpd.iesgrancapitan.org:9034/api/prueba.php';

        //create a new cURL resource
        $ch = curl_init($url);

        //setup request to send json via POST
        $data = array(
        'username' => 'codexworld',
        'password' => '123456'
        );
        $payload = json_encode(array("user" => $data));

        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = curl_exec($ch);

        return json_decode($result, true);

}

?>
