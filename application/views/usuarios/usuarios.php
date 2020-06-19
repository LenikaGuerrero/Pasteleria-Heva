<body>
	<center style="padding: 2%">
		<table class="table table-bordered" >
			<tr class="text-light" style="background-color: rgb(198, 46, 95);">
				<th>Nombre</th>
				<th>Correo</th>
				<th>Contraseña</th>
				<th>Opciones</th>
			</tr>
			<tbody>
				<?php
				
				if($DATA_USUARIOS!=false)
				{
					foreach ($DATA_USUARIOS->result() as $row) 
					{
						echo '<tr>';
							echo '<th>';
								echo $row->nombre;
							echo '</th>';

							echo '<th>';
								echo $row->correo;
							echo '</th>';

							echo '<th>';
								echo $row->contrasena;
							echo '</th>';

							echo '<th>';
								echo '<a class="btn btn-dark" role="button" href="'.base_url().'index.php/usuarios/eliminar_usuario/'.$row->id_usuario.'">Eliminar<a>';
								echo"\n \n";
								//echo '<a class="btn btn-secondary" role="button" href="'.base_url().'index.php/usuarios/eliminar_usuario_logico/'.$row->id_usuario.'">Eliminar_Logico<a>';
								//echo"\n \n";
								echo '<a class="btn btn-secondary" role="button" href="'.base_url().'index.php/usuarios/modificar/'.$row->id_usuario.'">Modificar<a>';
							echo '</th>';

						echo '<tr>';
					}
				}
				?>
			</tbody>
		</table>
		<button class="btn btn-secondary btn-lg btn-block" style="background-color: rgb(198, 46, 95);" type="button" onclick="location.href='<?=base_url()?>index.php/usuarios/agregar_usuario'">Agregar Usuario</a>
	</center>
</body>