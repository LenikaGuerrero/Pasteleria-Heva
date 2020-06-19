<form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/sucursales/crear_sucursal">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Agregar Sucursal</h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" maxlength="25" minlength="3" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Direccion:</label>
						<input type="text" name="direccion" maxlength="50" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Ciudad:</label>
						<input type="text" name="ciudad" onKeypress="if (event.keyCode < 64 || event.keyCode > 122) event.returnValue = false;" minlength="4" class="form-control" maxlength="50" required>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" name="telefono" class="form-control" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
						<input type="cancel" value="Cancelar" class="btn btn-danger" onclick="location.href='<?=base_url()?>index.php/sucursales'">
					</div>
				</td>
			</tbody>
		</table>
	</center>
</form>