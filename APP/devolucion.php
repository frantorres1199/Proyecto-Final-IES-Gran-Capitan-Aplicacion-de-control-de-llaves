<?php

include('funciones.php');

// Elementos donde se almacenan los datos que van a ser enviados a la api
if(isset($_GET['aula'])){

//Zona horaría

        date_default_timezone_set('Europe/Madrid');
        $fecha_devolucion=date("d-n-Y H:i:s");


//Obtencion de variables desde url devolucion.php y guardandolas en un array

        $id=($_GET['id']);
        $aula=($_GET['aula']);
        $dia=($_GET['dia']);
        $hora=($_GET['hora']);
        $profesor=($_GET['profesor']);
        $fecha=($_GET['fecha']);
        $descripcion=($_GET['descripcion']);

$insertar_devolucion=[
	   'id'  =>  $id,
           'fecha_devolucion' => $fecha_devolucion,
           ];


inserccion_devolver($insertar_devolucion);

}

?>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Control de Llaves Automatizado</title>
	<!-- favicon -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

<!-- Banda header  -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar-collapse" aria-expanded="true"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>IES Gran Capitan</span> Control de Llaves</a>
			</div>
		</div>
	</nav>

<!--Menu-->

<div id="sidebar-collapse" class="col-sm-2 col-lg-1 sidebar collapse in" aria-expanded="false" style="">

	<div class="divider"></div>

	<ul class="nav menu">

        <li><a href="index.html"><em class="glyphicon glyphicon-home">&nbsp;</em>Portada</a></li>
        <li><a href="entrega1.php"><em class="glyphicon glyphicon-log-out">&nbsp;</em>Entregar</a></li>
        <li class='active'><a href="devolucion1.php"><em class="glyphicon glyphicon-log-in">&nbsp;</em>Devolucion</a></li>
        <li><a href="historico.php"><em class="glyphicon glyphicon-list">&nbsp;</em>Historico</a></li>

	</ul>
</div>

<!--Indicador-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Devoluciones</li>
		</ol>
	</div>

	<div class="row">
</div>


<!--Tablas-->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">

				<strong>
				<?php
					$profesor2=($_GET['profesor']);

					echo $profesor2;
				?>
				</strong>
			</div>
		<div class="panel-body">
			<div class="canvas-wrapper">
				<table class="table table-striped">
					<thead>
                                             <tr>
						<th scope="col">Aula</th>
                                                <th scope="col">Hora</th>
                                                <th scope="col">Devolucion</th>
                                             </tr>
                                        </thead>
						<tbody>
							<?php
								$devoluciones=devolucion2($profesor2);
								if(!empty($devoluciones)){

									foreach($devoluciones as $devolucion){

										$descripcion_carrito= array('aula1'=>'SUM',
										                      'aula2'=>'Aula de Audiovisuales',
										                      'carro1'=>'Carrito A ',
										                      'carro2'=>'Carrito B',
										                      'carro3'=>'Carrito C (Tabletas)',
										                      'carro4'=>'Carrito D',
										                      'carro5'=>'Carrito E',
										                      'carro6'=>'Carrito F',
										                      'carro7'=>'Carrito H',
										                      'carro8'=>'Carrito I',
										                      'carro9'=>'Carrito J',
										                      'carro10'=>'Carrito K',
										                      'carro11'=>'Carrito L');
										if(!empty($devolucion['aula']))
										{
										$descripcion_modificada=($descripcion_carrito[$devolucion['aula']]);
										}
										$descripcion_hora=array('1' => '1º Mañana',
										                        '2' => ' 2º Mañana',
										                        '3' => ' 3º Mañana',
										                        '4' => ' Recreo Mañana',
										                        '5' => ' 4º Mañana',
										                        '6' => ' 5º Mañana',
										                        '7' => ' 6º Mañana',
										                        '8' => ' 1º Tarde',
										                        '9' => ' 2º Tarde',
										                        '10' => ' 3º Tarde',
										                        '11' => ' Recreo Tarde',
										                        '12' => ' 4º Tarde',
										                        '13' => ' 5º Tarde',
										                        '14' => ' 6º Tarde');
										if(!empty($devolucion['hora']))
										{
										$hora_modificada=($descripcion_hora[$devolucion['hora']]);
										}

											echo "<tr>";

											echo "<td>".$descripcion_modificada."</td>";

											$fecha1=$devolucion['fecha_entrega'];
											$fecha1=date("".$fecha1."",strtotime($fecha1. "+ 1 hour + 10 minutes"));
											$fecha2=date("Y-m-d H:i:s");
											if($fecha2 > $fecha1)
											{
											        echo "<td bgcolor='E9E44A'>".$hora_modificada."</td>";
											}
											else
											{
												echo "<td>".$hora_modificada."</td>";
											}

											if(!empty($devolucion['id']))
											{
											echo "<td><a href='devolucion.php?id=".$devolucion['id']."&aula=".$devolucion['aula']."&hora=".$devolucion['hora']."&profesor=".$profesor2."'><button type='button' class='btn btn-danger'>Devolver</button></a></td>";
											}
											echo "</tr>";
                                    

                                     }
								}                                                                
                                			else {

													echo "<h4><strong>No tiene llaves para devolver</strong></h4>";
													?>
													<?php
                                                }
													?>
                        </tbody>
                    </table>
							<canvas class="main-chart" id="line-chart" height="508" width="1526" style="width: 10px; height: 508px;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

<!--Footer-->		
	<div class="row">
			<div class="col-sm-12">
				<p class="back-link"> ©Software realizado por: Rafael Carlos Díaz y Francisco Alberto Torres</p>
			</div>
	</div>
</div>


</body>
</html>