<?php  include'../sesiones/verificar_sesion.php';
$idNombre=$_SESSION["nCompleto"];
$idUsuario=$_SESSION["idUsuario"];
?>	
		<section class="contenedor iconos fondo">
			<ul class="nav-pills pull-right menu-bar">
				<li class="list-unstyled">
					<a href="#" class="color  borde" id="menuV">
						<i class="fas fa-bars"></i>
					</a>
				</li>
				<li class="list-unstyled">
					<a href="#" class="color borde">
						<i class="far fa-user-circle"></i>
					</a>
				</li>
				<li class="list-unstyled">
					<a href="#" onclick="cambioContra();" class="color borde">
						<i class="fas fa-unlock-alt"></i>
					</a>
				</li>

				<li class="list-unstyled">
					<a href="#" onclick="salir();" class="color borde">
						<i class="fas fa-sign-out-alt"></i>
					</a>
				</li>
				<li class="list-unstyled">
					<p  class="user fondo">
						<?php echo $nCompleto; ?>
					</p>
				</li>
			</ul>
		</section>