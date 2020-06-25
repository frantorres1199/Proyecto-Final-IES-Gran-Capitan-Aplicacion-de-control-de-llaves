<?php

include_once 'datos.php';


// Archvivo en el cual estan todas las funciones de la api

class ApiProyecto{


	function gethistorico(){

		$proyecto = new Proyecto();
		$devolucion = array();

		$res = $proyecto->obtenerdatos();

		if($res->rowCount()){

			while($row = $res->fetch(PDO::FETCH_ASSOC)){

				$item =array(
					'aula' => $row['aula'],
					'dia' => $row['dia'],
					'hora' => $row['hora'],
					'profesor' => $row['profesor'],
					'descripcion' => $row['descripcion'],
					'fecha_entrega' => $row['fecha_entrega'],
					'devolucion' => $row['devolucion'],
				);

				array_push($devolucion, $item);

		}

		echo json_encode($devolucion);

		}
/*else{

			echo json_encode(array('mensaje' => 'No hay elementos registrados'));
		}
*/

	}


 function getProfesores(){

                $proyecto = new Proyecto();
                $devolucion = array();

                $res = $proyecto->obtenerProfesores();
		$profesores = array ();

                	if($res->rowCount()){

                        	while($row = $res->fetch(PDO::FETCH_ASSOC)){

				$profesores[]=$row['profesor'];

                		}

			}
                		return json_encode($profesores);

          }


function getReservas($profesor){

$proyecto = new Proyecto();
                $devolucion = array();

                $res = $proyecto->obtenerreservas($profesor);

                if($res->rowCount()){

                        while($row = $res->fetch(PDO::FETCH_ASSOC)){

                                $item =array(
                                        'id' => $row['id'],
                                        'aula' => $row['aula'],
                                        'dia' => $row['dia'],
                                        'hora' => $row['hora'],
                                        'profesor' => $row['profesor'],
					'fecha' => $row['fecha'],
                                        'descripcion' => $row['descripcion'],
                                );

                                array_push($devolucion, $item);

                }

                echo json_encode($devolucion);

                }


}



 function getProfesores2(){

                $proyecto = new Proyecto();
                $devolucion = array();


                $res = $proyecto->obtenerprofesores2();
                $profesores = array ();

                        if($res->rowCount()){

                                while($row = $res->fetch(PDO::FETCH_ASSOC)){

                                $profesores[]=$row['profesor'];

                                }

                        }
                                return json_encode($profesores);

          }






 function getdevoluciones(){

                $proyecto = new Proyecto();
                $devolucion = array();

                $res = $proyecto->obtenerdevoluciones();
                $profesores = array ();

                        if($res->rowCount()){

                                while($row = $res->fetch(PDO::FETCH_ASSOC)){

                                $profesores[]=$row['profesor'];

                                }

                        }
                                return json_encode($profesores);

          }



function getdevoluciones2($profesor2){
		$proyecto = new Proyecto();
                $devolucion = array();

                $res = $proyecto->obtenerdevoluciones2($profesor2);

                if($res->rowCount()){

                        while($row = $res->fetch(PDO::FETCH_ASSOC)){

                                $item =array(
                                        'id' => $row['id'],
                                        'aula' => $row['aula'],
                                        'dia' => $row['dia'],
                                        'hora' => $row['hora'],
                                        'profesor' => $row['profesor'],
                                        'fecha_entrega' => $row['fecha_entrega'],
                                        'descripcion' => $row['descripcion'],
                                );

                                array_push($devolucion, $item);

                }

                echo json_encode($devolucion);

                }
/*else{

                        echo json_encode(array('mensaje' => 'No hay datos con ese nombre'));
                }
*/


}


function getinsertar($aula, $dia, $hora, $profesor, $fecha_entrega, $descripcion){

                $proyecto = new Proyecto();
                $devolucion = array();

                $res = $proyecto->insertar($aula, $dia, $hora, $profesor, $fecha_entrega, $descripcion);

}

function actualizar($id, $fecha_devolucion){

		$proyecto = new Proyecto();
                $devolucion = array();

                $res = $proyecto->actualizar($id, $fecha_devolucion);

}




}
?>
