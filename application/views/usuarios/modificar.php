<?php 
	//echo $id_materia;
	if($DATA_USUARIOS!=FALSE){
		foreach ($DATA_USUARIOS->result() as $row) {
			$id_usuario=$row->id_usuario;
			$nombre=$row->nombre;
			$correo=$row->correo;
			$contrasena=$row->contrasena;
		}
	}
 ?>
 <form id="editar" name="editar" method="post" action="<?=base_url()?>index.php/usuarios/actualizar_info/<?=$id_usuario?>">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Modificar Usuario</h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control" maxlength="50" onKeypress="if (event.keyCode < 64 || event.keyCode > 122) event.returnValue = false;" value="<?=$nombre?>" required>
					</div>
					<div class="form-group">
						<label>Correo:</label>
						<input type="email" name="correo" class="form-control" value="<?=$correo?>" maxlength="50" required>
					</div>
					<div class="form-group">
						<label>Contraseña:</label>
						<input type="text" name="contrasena" class="form-control" value="<?=$contrasena?>" maxlength="11" required>
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