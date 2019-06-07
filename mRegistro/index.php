<!DOCTYPE html>
<html>
<head>
	<title>BIENVENIDOS</title>

    <!--Estilos -->
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../plugins/fontawesome-free-5.8.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">

	<!-- Alertify	 -->
	<link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
</head>
<body>
	
	<div class="container">
		<div class="col-md-auto login-box contenido borde sombra">
			<center><h3>Registro</h3></center>
			<hr>
			<br>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
		<div class="row">
			<label>Matricula:</label>
			<br>
	        <input type="text" id="matricula" class="matricula form-control" onkeyup="selecion(event);">
		</div>
		<br>
		<img src="img/signo.jpg" class="right" width="200" height="200" id="foto">
	</div>


	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pull-right">
										
				<div class="wrap">
			   		<div class="widget">
			   			<div class="fecha">
			   				<p id="diaSemana" class="diaSemana"></p>
			   				<p id="dia" class="dia"></p>
			   				<p>de</p>
			   				<p id="mes" class="mes"></p>
			   				<p>del</p>
			   				<p id="year" class="year"></p>
			   			</div>
			   			<div class="reloj">
			   				<i class="fab fa-wolf-pack-battalion"></i>
			   				<p id="horas" class="horas"></p>
			   				<p>:</p>
			   				<p id="minutos" class="minutos"></p>
			   				<p>:</p>
			   				<div class="caja-segundos">
			   					<p id="ampm" class="ampm"></p>
			   					<p id="segundos" class="segundos"></p>
			   				</div>
			   			</div>
			   		</div>
			   		<script src="../inicio/reloj.js"></script>
			   	</div>
									</div>

	</div>

			<div class="">
						<div class="row">
							<div class="col-md-12">

		              			<button type="button" class="btn btn-login  btn-flat  pull-right" id="btnVolver" onclick="location.href='../login/index.php'">
			              			<i class="fas fa-hand-point-left"></i>
			              			Volver
		              			</button>

	              			</div>
	            		</div><!-- /.col -->
					</div>

	</div>
	
	
	<!-- Plugin Voice -->

    <script type="text/javascript" src="../plugins/voice/responsivevoice.js"></script>

<!-- Plugins jQuery -->

    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../plugins/Preloaders/jquery.preloaders.js"></script>

<!-- alertify -->
	<script type="text/javascript" src="../plugins/alertifyjs/alertify.js"></script>

<!-- Mis funciones -->

	  <script src="funciones.js"></script>
	  <script src="../js/precarga.js"></script>

	<!--Registro -->

</body>
</html>