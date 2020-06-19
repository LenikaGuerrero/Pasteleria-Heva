<body style="width:100%;height:100px;overflow:auto;">
  <br>
  <br>
   <center><img class="d-block w-100" src="http://localhost:8080/PROYECTO_HEVA/img/registro.jpg" alt="pastel"></center>
   <br>
<form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/clientes/nuevo_cliente">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1><center>Registro</center></h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" minlength="3" maxlength="50" class="form-control" onKeypress="if (event.keyCode < 64 || event.keyCode > 122) event.returnValue = false;" required>
					</div>
					<div class="form-group">
						<label>Apellidos:</label>
						<input type="text" name="apellidos" minlength="3" maxlength="50" class="form-control" onKeypress="if (event.keyCode < 64 || event.keyCode > 122) event.returnValue = false;" required>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" name="telefono" maxlength="10" minlength="8" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="6622001122" required>
					</div>
					<div class="form-group">
						<label>Correo:</label>
						<input type="email" name="correo" placeholder="pastel@ejemplo.com" maxlength="50" minlength="18" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
						<input type="cancel" value="Cancelar" class="btn btn-danger" onclick="location.href='<?=base_url()?>index.php'">
					</div>
				</td>
			</tbody>
		</table>
	</center>
</form>
</body>