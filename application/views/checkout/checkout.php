<body style="width:100%;height:100px;overflow:auto;">
	<div class="container" style="margin-top: 100px;">
        <div class="row featurette" style="margin-bottom:10px;">
        	<form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/productos/agregar_orden">
        		<div class="form-group; col-md-12">
        			<h4>Agregar un nuevo producto</h4>
        			<div class="input-group mb-3">
					  <select class="custom-select" id="comboagregar" name="comboagregar">
					  	<?php
			                if($DATAPRO!=false)
			                {
			                  foreach ($DATAPRO->result() as $row) 
			                  {
			                      echo '<option value="'.$row->id_producto.'">'.$row->nombre.'</option>';
			                  }
			                }
              			?>
					  </select>
					</div>
					<button type="submit" class="btn btn-primary">Agregar Producto</button>
        		</div>
        	</form>
        	<form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/productos/orden_actualizar_cant">
	        	<div class="col-md-12" style="margin-bottom: 10px">
	        		<h1>Orden de pedido</h1>
	        	</div>
	        	<div class="col-md-12">
		        	<table class="table table-borderless" style="">
						<tr style="border-bottom: black 1px solid">
							<th>Producto</th>
							<th>Descripcion</th>
							<th>Porciones</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Actualizar</th>
							<th>Total</th>
						</tr>
						<tbody>

							<?php
							
							if($DATA_PRODUCTOS!=false)
							{
								foreach ($DATA_PRODUCTOS->result() as $row) 
								{
									echo '<tr>';
										echo '<th>';
											echo'<img height="200px" src="'.$row->imagen.'">';
										echo '</th>';

										echo '<th>';
											echo '<h3>'.$row->nombre.'</h3><br>';
											echo $row->descripcion;
										echo '</th>';

										echo '<th>';
											echo $row->porciones;
										echo '</th>';

										echo '<th>';
											echo $row->precio;
										echo '</th>';
										echo '<th>';
											echo '<div class="input-group mb-3">';

											echo '<select class="custom-select" id="combocantidad" name="combocantidad">';

											echo '<option value="'.$row->cantidad.'" selected>'.$row->cantidad.'</option>';
											echo '<option value="1">1</option>';
											echo '<option value="2">2</option>';
											echo '<option value="3">3</option>';
											echo '</select>';

											echo '</div>';
										echo '</th>';
										echo '<th>';
											echo '<input type="hidden" value="'.$row->id_producto.'" name="id_oculto" id="id_oculto" class="form-control">';
											echo'<button type="submit" class="btn btn-primary">Actualizar Cantidad</button>';
										echo '</th>';
										echo '<th>';
											echo $row->total;
										echo '</th>';
									echo '<tr>';
								}
							}
							?>
						</tbody>
					</table>
	        	</div>
        	</form>
        	<div class="col-md-9"></div>
        	<div class="col-md-3">
        		<button type="submit" class="btn btn-primary" onclick="location.href='<?=base_url()?>index.php/clientes/iniciar_sesion'" style="margin-bottom: 50px">Realizar Orden</button>
				<button class="btn btn-danger" style="margin-bottom: 50px" type="button" onclick="location.href='<?=base_url()?>index.php/productos/pproducto/'">Cancelar</a>
        	</div>  
        </div>

    </div>

</body>
