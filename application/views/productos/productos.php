
<body style="width:100%;height:100px;overflow:auto;">
	<center style="padding: 2%">
		<table class="table table-bordered" >
			<tr class="text-light" style="background-color: rgb(198, 46, 95);">	
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Categoria</th>
				<th>Porciones</th>
				<th>Precio</th>
				<th>Ruta de Imagen</th>
				<th>Opciones</th>
			</tr>
			<tbody>
				<?php
				
				if($DATA_PRODUCTOS!=false)
				{
					foreach ($DATA_PRODUCTOS->result() as $row) 
					{
						echo '<tr>';
							echo '<th>';
								echo $row->nombre;
							echo '</th>';

							echo '<th>';
								echo $row->descripcion;
							echo '</th>';

							echo '<th>';
								echo $row->categoria;
							echo '</th>';

							echo '<th>';
								echo $row->porciones;
							echo '</th>';

							echo '<th>';
								echo $row->precio;
							echo '</th>';

							echo '<th>';
								echo'<img height="50px" src="'.$row->imagen.'">';
								
							echo '</th>';

							echo '<th>';
							echo '<center>';
								echo '<a class="btn btn-dark" role="button" href="'.base_url().'index.php/productos/eliminar_producto/'.$row->id_producto.'">Eliminar<a>';
								echo"\n \n";
								echo '<a class="btn btn-secondary" role="button" href="'.base_url().'index.php/productos/modificar/'.$row->id_producto.'">Modificar<a>';
								echo '</center>';
							echo '</th>';
						echo '<tr>';
					}
				}
				?>
			</tbody>
		</table>
		<button class="btn btn-secondary btn-lg btn-block" style="background-color: rgb(198, 46, 95);" type="button" onclick="location.href='<?=base_url()?>index.php/productos/agregar_producto'">Agregar Producto</a>
	</center>
</body>