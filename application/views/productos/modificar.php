<?php 
	//echo $id_materia;
	if($DATA_PRODUCTOS!=FALSE){
		foreach ($DATA_PRODUCTOS->result() as $row) {
			$id_producto=$row->id_producto;
			$nombre=$row->nombre;
			$descripcion=$row->descripcion;
			$porciones=$row->porciones;
			$precio=$row->precio;
			$categoria=$row->categoria;
			$imagen=$row->imagen;
		}
	}
 ?>
 <form id="editar" name="editar" method="post" action="<?=base_url()?>index.php/productos/actualizar_info/<?=$id_producto?>">
	<center style="padding: 1%">
		<table>
			<tbody>
				<td colspan="3">
					<h1>Modificar Producto</h1>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="nombre" class="form-control" maxlength="30" value="<?=$nombre?>" required>
					</div>
					<div class="form-group">
						<label>Descripcion:</label>
						<input type="text" name="descripcion" class="form-control" value="<?=$descripcion?>" required>
					</div>
					<div class="form-group">
						<label>Categoria:</label>
						
						<select id="categoria" name="categoria" class="form-control" value="<?=$categoria?>" required>
							<?php
							switch ($row->categoria) {
								case 'Pasteles':
											echo '<option value="Pasteles">Pasteles</option>';
											echo '<option value="Cheesecake">Cheesecake</option>';
											break;
										
								case 'Cheesecake':
											echo '<option value="Cheesecake">Cheesecake</option>';
											echo '<option value="Pasteles">Pasteles</option>';
											break;
										
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label>Porciones:</label>
						<input type="text" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="7" name="porciones" class="form-control" value="<?=$porciones?>" required>
					</div>
					<div class="form-group">
						<label>Precio:</label>
						<input type="text" name="precio" class="form-control" value="<?=$precio?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" step="0.01" maxlength="7" required>
					</div>
					<div class="form-group">
						<label>URL de imagen:</label>
						<input type="url" name="imagen" class="form-control" value="<?=$imagen?>" maxlength="200" required>
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