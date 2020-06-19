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
	else
		{
			$nombre="Escribe tu nombre";
			$apellidos="Escribe tus apellidos";
			$telefono="Escribe tu telefono";
			$correo="Escribe tu correo";
		}
		//var_dump($DATA_SUCURSALES);
 ?>

<body>
  <br>
  <br>
   <center><img class="d-block w-100" src="http://localhost:8080/PROYECTO/img/registro.jpg" alt="pastel"></center>
   <br>
	<div class="container">    
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
	      	 <h4 class="mb-3">Total del Pedido</h4>	
           <input type="text" class="form-control" id="total_pedido" name="nombre" value="<?=$TOTAL_PEDIDO?>" disabled="true"  required="">    	 
      		<br><br><br><br>          
        </div>

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Datos Personales</h4>
          <form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/clientes/registrar_pedido1">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$nombre?>" disabled="true"  required="">
                <input type="text"  style="visibility:hidden" class="form-control" id="id_cliente" name="nombre"  value="<?=$id_cliente?>"   required="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?=$apellidos?>" disabled="true"  required="">
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="correo" name="correo" value="<?=$correo?>" disabled="true"> 
            </div>

            <div class="mb-3">
              <label for="address">Telefono</label>
              <input type="text" class="form-control" id="telefono" name="telefono"  required="" value="<?=$telefono?>" disabled="true">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Sucursales</label>
                <select class="custom-select d-block w-100" id="sucursal" name="sucursal" required="">
                  <option value="">Elija una opcion...</option>
                  <?php
		                if($DATA_SUCURSALES!=false)
		                {
		                  foreach ($DATA_SUCURSALES->result() as $row) 
		                  {
		                      echo '<option value="'.$row->id_sucursal.'">'.$row->nombre.'</option>';
		                  }
		                }
      				?>
                </select>
              </div>

              <div class="col-md-4 mb-3">
                <label >Fecha de Entrega</label>
                <input type="date" class="form-control" id="fecha" name="fecha"  value="" required="">
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg " type="submit">Continuar con Pedido</button>
            <button class="btn btn-danger btn-lg " style="margin: 10px; type="button" onclick="location.href='<?=base_url()?>index.php/productos/pproducto/'">Cancelar</button>
          </form>
        </div>
      </div>
	</div>
</body>