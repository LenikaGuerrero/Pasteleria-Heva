<body>
	<center style="padding: 2%">
		<table class="table table-bordered" >
			<tr class="text-light" style="background-color: rgb(198, 46, 95);">
				
				<th>No.Pedido</th>
				<th>Nombre de Sucursal</th>
				<th>Nombre de Cliente</th>
				<th>Nombre de Producto</th>
				<th>Cantidad</th>
				<th>Precio total</th>
				<th>Fecha</th>
			</tr>
			<tbody>
				<?php
				
				if($DATA_PEDIDOS!=false)
				{
					foreach ($DATA_PEDIDOS->result() as $row) 
					{
						echo '<tr>';
							echo '<th>';
								echo $row->uno;
							echo '</th>';

							echo '<th>';
								echo $row->dos;
							echo '</th>';

							echo '<th>';
								echo $row->tres;
							echo '</th>';

							echo '<th>';
								echo $row->cuatro;
							echo '</th>';

							echo '<th>';
								echo $row->cinco;
							echo '</th>';

							echo '<th>';
								echo $row->seis;
							echo '</th>';
							echo '<th>';
								echo $row->siete;
							echo '</th>';
						echo '<tr>';
					}
				}
				?>
			</tbody>
		</table>
	</center>
</body>