<?php 
	//echo $id_materia;
	if($DATA_CLIENTES!=FALSE){
		foreach ($DATA_CLIENTES->result() as $row) {
			$id_cliente=$row->id_cliente;
			$nombre=$row->nombre;
			$apellidos=$row->apellidos;
			$telefono=$row->telefono;
			$correo=$row->correo;
		}
	}
 ?>
 <form id="editar" name="editar" method="post" action="<?=base_url()?>index.php/clientes/actualizar_info/<?=$id_cliente?>">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Modificar Cliente</h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control" minlength="3" maxlength="50" onKeypress="if (event.keyCode < 64 || event.keyCode > 122) event.returnValue = false;" value="<?=$nombre?>" required>
					</div>
					<div class="form-group">
						<label>Apellidos:</label>
						<input type="text" name="apellidos" minlength="3" maxlength="50" class="form-control" onKeypress="if (event.keyCode < 64 || event.keyCode > 122) event.returnValue = false;" value="<?=$apellidos?>" required>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" name="telefono" maxlength="10" minlength="8" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" class="form-control" placeholder="6622001122" value="<?=$telefono?>" required>
					</div>
					<div class="form-group">
						<label>Correo:</label>
						<input type="text" name="correo" class="form-control" placeholder="pastel@ejemplo.com" maxlength="50" minlength="18" value="<?=$correo?>" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
						<input type="cancel" value="Cancelar" class="btn btn-danger" onclick="location.href='<?=base_url()?>index.php/clientes'">
					</div>
				</td>
			</tbody>
		</table>
	</center>
</form>