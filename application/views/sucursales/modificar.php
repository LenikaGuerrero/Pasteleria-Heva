<?php 
	//echo $id_materia;
	if($DATA_SUCURSALES!=FALSE){
		foreach ($DATA_SUCURSALES->result() as $row) {
			$id_sucursal=$row->id_sucursal;
			$nombre=$row->nombre;
			$direccion=$row->direccion;
			$ciudad=$row->ciudad;
			$telefono=$row->telefono;
		}
	}
 ?>
 <form id="editar" name="editar" method="post" action="<?=base_url()?>index.php/sucursales/actualizar_info/<?=$id_sucursal?>">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Modificar Cliente</h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control" minlength="3" maxlength="25" value="<?=$nombre?>" required>
					</div>
					<div class="form-group">
						<label>Direccion:</label>
						<input type="text" name="direccion" class="form-control" maxlength="50" value="<?=$direccion?>" required>
					</div>
					<div class="form-group">
						<label>Ciudad:</label>
						<input type="text" name="ciudad" class="form-control" onKeypress="if (event.keyCode < 64 || event.keyCode > 122) event.returnValue = false;" minlength="4" maxlength="50" value="<?=$ciudad?>" required>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" name="telefono" class="form-control" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10" value="<?=$telefono?>" maxlength="30" required>
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