
<body style="width:100%;height:100px;overflow:auto;">
  <br>
  <br>
   <center><img class="d-block w-100" src="http://localhost:8080/PROYECTO_HEVA/img/iniciosesion.jpg" alt="pastel"></center>
   <br>
  

          <form id="agregar" name="agregar" method="post" action="<?=base_url()?>index.php/clientes/verificar_inicioSesion">
            <center style="padding: 1%">
              <table>
                <tbody>
                  <td colspan="3">
                    <h1><center>Iniciar Sesión</center></h1>
                    <div class="form-group">
                      <label for="email">Correo Electronico:</label>
                      <input type="email" class="form-control" maxlength="50" minlength="18" id="verifica_email" name="verifica_email" placeholder="pastel@ejemplo.com" required="">
                    </div>

                    <div class="form-group">
                      <label for="address">Teléfono:</label>
                      <input type="text"  class="form-control" id="verifica_telefono"  maxlength="10" minlength="8" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" name="verifica_telefono" placeholder="6622001122"  required="">
                    </div>

                    <center><button class="btn btn-primary btn-lg" type="submit" style="margin-bottom: 50px">Verificar</button>
                    <button class="btn btn-danger btn-lg " style="margin-bottom: 50px" type="button" onclick="location.href='<?=base_url()?>index.php/productos/pproducto/'">Cancelar</button>
                    <br>
                    <input type="button"  class="btn btn-primary btn-lg" style="margin-bottom: 50px" value="Cliente Nuevo" onclick="location.href='<?=base_url()?>index.php/clientes/registrar_ClientePedido'"></center>
                  </td>
                </tbody>
               </table>
              </center>
          </form> 
</body>
