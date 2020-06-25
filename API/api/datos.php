<?php


include_once 'conexion.php';

// Archivo donde se almacenan todas las consultas que se realizan a la base de datos


class Proyecto extends DB {

//conexion
	function obtenerdatos(){

		$consulta = "Select * from devoluciones";

//		error_log($consulta);

		$query = $this->connect()->query($consulta);

		return $query;

	}


//entrega1.php
function obtenerProfesores(){

	date_default_timezone_set('Europe/Madrid');
        $dia_actual=date("l");

$dias=array('Monday'=>'1',
	    'Tuesday'=>'2',
	    'Wednesday'=>'3',
	    'Thursday'=>'4',
	    'Friday'=>'5',
	    'Saturday'=>'6',
	    'Sunday'=>'7');

$dia_actual=($dias[$dia_actual]);

        $hora=date("H");

$descripcion_horas=array('08'=>'1',
                         '09'=>'2',
                         '10'=>'3',
                         '11'=>'4',
                         '12'=>'5',
                         '13'=>'6',
                         '14'=>'7',
                         '15'=>'8',
                         '16'=>'9',
                         '17'=>'10',
                         '18'=>'11',
                         '19'=>'12',
                         '20'=>'13',
                         '21'=>'14');

$hora=$descripcion_horas[$hora];
intval($hora);
$hora2=$hora+2;

	$consulta = "select profesor from (SELECT aula,dia,hora,profesor,descripcion, 'normal' as origen FROM reservas where dia='$dia_actual' union all select aula,dia,hora,profesor,unidades as descripcion, 'reserva_x' as origen FROM reservas_x where dia='$dia_actual') tabla where hora BETWEEN $hora and $hora2 GROUP by profesor";

//	error_log('$consulta');

 	$query = $this->connect()->query($consulta);
	return $query;

}

//entrega.php
function obtenerreservas($profesor){

	date_default_timezone_set('Europe/Madrid');
	$dia_actual=date("l");

$dias=array('Monday'=>'1',
            'Tuesday'=>'2',
            'Wednesday'=>'3',
            'Thursday'=>'4',
            'Friday'=>'5',
            'Saturday'=>'6',
            'Sunday'=>'7');

$dia_actual=($dias[$dia_actual]);



        $hora=date("H");

$descripcion_horas=array('08'=>'1',
                         '09'=>'2',
                         '10'=>'3',
                         '11'=>'4',
                         '12'=>'5',
                         '13'=>'6',
                         '14'=>'7',
                         '15'=>'8',
                         '16'=>'9',
                         '17'=>'10',
                         '18'=>'11',
                         '19'=>'12',
                         '20'=>'13',
                         '21'=>'14');

$hora=$descripcion_horas[$hora];
intval($hora);
$hora2=$hora+2;

	$consulta ="select id,aula,dia,hora,profesor,descripcion from (SELECT id,aula,dia,hora,profesor,descripcion, 'normal' as origen FROM reservas where dia= '$dia_actual' and profesor= '$profesor' union all select id,aula,dia,hora,profesor,unidades as descripcion, 'reserva_x' as origen FROM reservas_x where dia= '$dia_actual' and profesor= '$profesor' )tabla where hora BETWEEN $hora and $hora2 and aula not in (select aula from devoluciones where profesor = '$profesor' and devolucion is NULL)";

//	error_log($consulta);

	$query = $this->connect()->query($consulta);


	return $query;
}

// Devolucion.php
function obtenerdevoluciones2($profesor2){

        date_default_timezone_set('Europe/Madrid');
        $dia_actual=date("l");

$dias=array('Monday'=>'1',
            'Tuesday'=>'2',
            'Wednesday'=>'3',
            'Thursday'=>'4',
            'Friday'=>'5',
            'Saturday'=>'6',
            'Sunday'=>'7');

$dia_actual=($dias[$dia_actual]);

        $query = $this->connect()->query("/*SELECT * FROM devoluciones WHERE profesor='$profesor2' and devolucion is NULL*/SELECT * FROM `devoluciones` WHERE `devolucion` is null and profesor='".$profesor2."'");
        return $query;

}



// devoluciones1.php
function obtenerdevoluciones(){

	 date_default_timezone_set('Europe/Madrid');
        $dia_actual=date("l");

$dias=array('Monday'=>'1',
            'Tuesday'=>'2',
            'Wednesday'=>'3',
            'Thursday'=>'4',
            'Friday'=>'5',
            'Saturday'=>'6',
            'Sunday'=>'7');

$dia_actual=($dias[$dia_actual]);


	$query = $this->connect()->query("SELECT profesor FROM `devoluciones` WHERE devolucion is null group by profesor");

	return $query;




}


// entrega.php
function insertar($aula, $dia, $hora, $profesor, $fecha_entrega, $descripcion){

	$consulta ="INSERT INTO devoluciones (id, aula, dia, hora, profesor,  descripcion, fecha_entrega, devolucion) VALUES (NULL, '$aula', '$dia', '$hora', '$profesor', '$descripcion', '$fecha_entrega', NULL)";

//	error_log($consulta);

	$query = $this->connect()->query($consulta);


	return $query;

}

// devolucion.php
function actualizar($id, $fecha_devolucion){


date_default_timezone_set('Europe/Madrid');
        $fecha_devolucion=date("Y-n-d H:i:s");

        $consulta ="UPDATE `devoluciones` SET `devolucion`='".$fecha_devolucion."' WHERE devolucion is null and id=$id";

        //error_log($consulta);

        $query = $this->connect()->query($consulta);


        return $query;

}




}
?>
