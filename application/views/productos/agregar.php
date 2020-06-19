<form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/productos/crear_producto">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Agregar Productos</h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control" minlength="3" maxlength="30" required>
					</div>
					<div class="form-group">
						<label>Descripcion:</label>
						<input type="text" name="descripcion" minlength="4" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Categoria:</label>
						<select id="categoria" name="categoria" class="form-control" required>
						<option selected>Pasteles</option>
						<option>Cheesecake</option>
						
						
					</select>
					</div>
					<div class="form-group">
						<label>Porciones:</label>
						<input type="text" name="porciones" class="form-control" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="2" required>
					</div>
					<div class="form-group">
						<label>precio:</label>
						<input type="text" name="precio" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" step="0.01" maxlength="7" required>
					</div>
					<div class="form-group">
						<label>URL de imagen:</label>
						<input type="url" name="imagen" value="http://localhost:8080/PROYECTO/img/" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
						<input type="cancel" value="Cancelar" class="btn btn-danger" onclick="location.href='<?=base_url()?>index.php/productos'">
					</div>
				</td>
			</tbody>
		</table>
	</center>
</form>