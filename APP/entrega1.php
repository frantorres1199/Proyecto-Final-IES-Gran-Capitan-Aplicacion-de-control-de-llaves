<?php

include('funciones.php');

?>
<!--Interfaz-->
<html><head>
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

<!--Barra header-->
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
	<div class="divider">
	</div>
		<ul class="nav menu">
			<li><a href="index.html"><em class="glyphicon glyphicon-home">&nbsp;</em>Portada</a></li>
	        <li class='active'><a href="#"><em class="glyphicon glyphicon-log-out">&nbsp;</em>Entrega llaves</a></li>
	        <li><a href="devolucion1.php"><em class="glyphicon glyphicon-log-in">&nbsp;</em>Devolucion</a></li>
	        <li><a href="historico.php"><em class="glyphicon glyphicon-list">&nbsp;</em>Historico</a></li>
		</ul>
</div>

<!--Identificador-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Entrega</li>
		</ol>
	</div>

<div class="row">
</div>

<!--Tabla-->
<div class="row">
	<div class="col-md-20">
		<div class="panel panel-default">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<div class="canvas-wrapper">
					<table class="table table-striped">
						<thead>
                         	<tr>
                              <th scope="col">Profesores</th>
                              <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $devoluciones=profesores($a);					
									if(!empty($devoluciones)){
                                        
                                        foreach($devoluciones as $devolucion){
                                                echo "<tr>";
												echo "<td>".$devolucion."</td>";

												/*Boton*/				
												echo "<td><a href='entrega.php?profesor=".$devolucion."'><button type='button' class='btn btn-success'>Abrir</button></a></td>";
                                                echo "</tr>";
                                        }

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