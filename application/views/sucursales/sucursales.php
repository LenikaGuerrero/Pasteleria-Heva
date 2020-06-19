<body>
	<center>
		<table class="table table-bordered " style="">
			<tr class="text-light" style="background-color: rgb(198, 46, 95);">
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Ciudad</th>
				<th>Telefono</th>
				<th>Opciones</th>
			</tr>
			<tbody>
				<?php
				
				if($DATA_SUCURSALES!=false)
				{
					foreach ($DATA_SUCURSALES->result() as $row) 
					{
						echo '<tr>';
							echo '<th>';
								echo $row->nombre;
							echo '</th>';

							echo '<th>';
								echo $row->direccion;
							echo '</th>';

							echo '<th>';
								echo $row->ciudad;
							echo '</th>';

							echo '<th>';
								echo $row->telefono;
							echo '</th>';

							echo '<th>';
								echo '<a class="btn btn-dark" role="button" href="'.base_url().'index.php/sucursales/eliminar_sucursal/'.$row->id_sucursal.'">Eliminar<a>';
								echo"\n \n";
								echo '<a class="btn btn-secondary" role="button" href="'.base_url().'index.php/sucursales/modificar/'.$row->id_sucursal.'">Modificar<a>';
							echo '</th>';
						echo '<tr>';
					}
				}
				?>
			</tbody>
		</table>
		<button class="btn btn-secondary btn-lg btn-block" style="background-color: rgb(198, 46, 95);" type="button" onclick="location.href='<?=base_url()?>index.php/sucursales/agregar_sucursal'">Agregar Sucursal</a>
	</center>
</body>