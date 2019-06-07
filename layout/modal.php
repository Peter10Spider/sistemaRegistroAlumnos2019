 <!-- Modal content-->
	  
	<div id="modalEditarI" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-md">

	    <form id="frmActulizaI">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Editar la contraseña</h4>
	      </div>
	      <div class="modal-body">
				<input type="text" id="idI" value="<?php echo $idUsuario; ?>">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="contraI">Nueva Contraseña:</label>
							<input type="password" id="contraI" class="form-control " required="" placeholder="Escribe la contraseña">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="vContraI">Verificar Contraseña:</label>
							<input type="password" id="vContraI" class="form-control " required="" placeholder="Vuelve a esrcribir la contraseña">
						</div>
					</div>
					<hr class="linea">
				</div>
	      </div>
	      <div class="modal-footer">
				<div class="row">
					<div class="col-lg-12">
						<button type="button" id="btnCerrar" class="btn btn-login  btn-flat  pull-left" data-dismiss="modal">Cerrar</button>
						<button type="button" id="btnMostrarI" class="btn btn-login  btn-flat  pull-left" onclick="mostrarContraI()" value="oculto">
						<i class="far fa-eye fa-lg" id="icoMostrar"></i>
						</button>
						<input type="submit" class="btn btn-login  btn-flat  pull-right" value="Actualizar Información">	
					</div>
				</div>
	      </div>
	    </div>
		</form>

	  </div>
	</div>
	<!-- Modal -->