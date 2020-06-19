  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" class=href="http://localhost:8080/PROYECTO_HEVA/img/logoheva.png">
      <img class="d-block w-100" src="http://localhost:8080/PROYECTO_HEVA/img/banner_heva.jpg" alt="pastel">

      <title>HEVA</title>
  </head>

      <nav class="navbar navbar-expand-md navbar-dark justify-content-between" style="background-color: rgb(198, 46, 95);">
        <a class="navbar-brand " href="<?=base_url()?>index.php/"><img src="http://localhost:8080/PROYECTO_HEVA/img/icono_heva.png" width="50" height="50"  alt="pastel">Inicio</a>
    
       <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navarCollapse" aria-controls="navarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
    <div class="navbar-collapse collapse" id="navarCollapse">
          <ul class="navbar-nav  mr-auto">
            
            <li class="nav-item">
                
                <a class="nav-link btn btn-light text-dark" style="margin: 10px; " href="<?=base_url()?>index.php/sucursales/psucursal/">Sucursales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light text-dark" style="margin: 10px;" href="<?=base_url()?>index.php/productos/pproducto/">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light text-dark" style="margin: 10px;" href="<?=base_url()?>index.php/clientes/registrar_cliente/">Registro</a>
            </li>
          </ul>
      </div>
   <!--   <form class="form-inline">

         <a href="<?=base_url()?>index.php/usuarios/cerrar_sesion" class="btn btn-outline-primary my-2 my-sm-0" role="button" aria-pressed="true">Cerrar Sesion</a>
      </form>-->
   </nav>   