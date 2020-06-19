<head>
    
    <title>Iniciar Sesion</title>
  </head>

  <body style="width:100%;height:100px;overflow:auto;">
<br>
  <br>
   <center><img class="d-block w-100" src="http://localhost:8080/PROYECTO_HEVA/img/iniciosesion2.jpg" alt="pastel"></center>
   <br>
  
    <form method="post" action="<?=base_url()?>index.php/login/autentificar" class="form-signin" >
      <center style="padding: 6%">
              <table>
                <tbody>
                  <td colspan="3">
                    <h1><center>Iniciar Sesión</center></h1>
                    <div class="form-group"> 
                      <label for="inputEmail">Correo Electronico:</label>
                      <input type="email" id="inputEmail"  maxlength="50" minlength="18" class="form-control" name="correo" placeholder="pastel@ejemplo.com" required="" autofocus="">
                    </div>
                    <div class="form-group">
                      
                      <label for="inputPassword">Contraseña:</label>
                      <input type="password" id="inputPassword" maxlength="15" name="contrasena" class="form-control" placeholder="********" required="">
                    </div>
                    <center>
                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Recordarme
                      </label>
                    </div>
                    
                      <button class="btn btn-lg btn-primary" style="margin-bottom: 50px" type="submit">Entrar</button>
                      <button class="btn btn-danger btn-lg " style="margin-bottom: 50px" type="button" onclick="location.href='<?=base_url()?>index.php/'">Cancelar</button>
                    </center>
                  </td>
                </tbody>
              </table>
            </center>
    </form>
  </div>
      <!--<p class="mt-5 mb-3 text-muted">© 2018-2018</p>
    </form-->
  

</body>