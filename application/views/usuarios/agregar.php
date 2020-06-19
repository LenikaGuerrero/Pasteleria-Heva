<form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/usuarios/crear_usuario">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Agregar Usuario</h1>
					<div class="form-group">
						<label>Nombre de usuario:</label>
						<input type="text" name="nombre" onKeypress="if (event.keyCode < 64 || event.keyCode > 122) event.returnValue = false;" maxlength="50" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Correo:</label>
						<input type="email" name="correo" placeholder="pastel@ejemplo.com" maxlength="50" minlength="18" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Contraseña:</label>
						<input type="Password" placeholder="*********" name="contrasena" maxlength="15" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
						<input type="cancel" value="Cancelar" class="btn btn-danger" onclick="location.href='<?=base_url()?>index.php/usuarios'">
					</div>
				</td>
			</tbody>
		</table>
	</center>
</form>