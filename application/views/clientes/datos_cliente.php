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
          <form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/clientes/verificar_cliente">
           <h4 class="mb-3">Clientes</h4>
           <div class="col-md-12 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="verifica_email" name="verifica_email" placeholder="pastel@ejemplo.com" maxlength="50" minlength="18" required="">
              </div>

              <div class="col-md-12 mb-3">
                <label for="address">TELEFONO</label>
                <input type="text" class="form-control" id="verifica_telefono" name="verifica_telefono" maxlength="10" minlength="8" onKeypress="if (event.keyCode <= 48 || event.keyCode >= 57) event.returnValue = false;" class="form-control" placeholder="6622001122" required="">
              </div>
              <button class="col-md-12 btn btn-primary btn-lg btn-block" type="submit">Verificar</button>
          </form>

          <br><br><br><br>
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Tu pedido</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$</strong>
            </li>
          </ul>
        </div>

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Datos Personales</h4>
          <form form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/clientes/registrar_pedido">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?=$nombre?>" required="">
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">APELLIDO</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="" value="<?=$apellidos?>" required="">
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="you@example.com" value="<?=$correo?>">
            </div>

            <div class="mb-3">
              <label for="address">TELEFONO</label>
              <input type="text" class="form-control" id="telefono" name="telefono" value="<?=$telefono?>" required="">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Sucursales</label>
                <select class="custom-select d-block w-100" id="sucursal" name="sucursal" required="">
                  <option value="">Choose...</option>
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
                <label >Fecha De Retiro</label>
                <input type="date" class="form-control" id="fecha" name="fecha" min="2018-06-01" max="2018-06-20" value="" required="">
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
  </div>
</body>