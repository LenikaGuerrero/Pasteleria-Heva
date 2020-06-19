<body>
	<center style="padding: 2%">
		<table class="table table-bordered" style="">
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th>Opciones</th>
			</tr>
			<tbody>
				<?php
				
				if($DATA_CLIENTES!=false)
				{
					foreach ($DATA_CLIENTES->result() as $row) 
					{
						echo '<tr>';
							echo '<th>';
								echo $row->nombre;
							echo '</th>';

							echo '<th>';
								echo $row->apellidos;
							echo '</th>';

							echo '<th>';
								echo $row->telefono;
							echo '</th>';

							echo '<th>';
								echo $row->correo;
							echo '</th>';

							echo '<th>';
								echo '<a class="btn btn-dark" role="button" href="'.base_url().'index.php/clientes/eliminar_cliente/'.$row->id_cliente.'">Eliminar<a>';
								echo"\n \n";
								echo '<a class="btn btn-secondary" role="button" href="'.base_url().'index.php/clientes/modificar/'.$row->id_cliente.'">Modificar<a>';
							echo '</th>';

						echo '<tr>';
					}
				}
				?>
			</tbody>
		</table>
		<button class="btn btn-secondary btn-lg btn-block" type="button" style="background-color: rgb(198, 46, 95);"  onclick="location.href='<?=base_url()?>index.php/clientes/agregar_cliente'">Agregar Clientes</a>
	</center>
</body>