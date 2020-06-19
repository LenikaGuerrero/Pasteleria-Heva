	<nav class="navbar navbar-expand-md navbar-dark justify-content-between bg-dark" >
		<a class="navbar-brand " href="<?=base_url()?>index.php/"><img src="http://localhost:8080/PROYECTO_HEVA/img/icono_heva.png" width="50" height="50"  alt="pastel">Inicio</a>

       <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navarCollapse" aria-controls="navarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      	</button>

		<div class="navbar-collapse collapse" id="navarCollapse" >
	    		<ul class="navbar-nav  mr-auto" >
	    			<li class="nav-item">
			        	<a class="nav-link btn btn-light text-dark" style="margin: 10px; "href="<?=base_url()?>index.php/usuarios/">Usuarios</a>
			     	 </li>
			     	 <li class="nav-item">
			        	<a class="nav-link btn btn-light text-dark" style="margin: 10px; " href="<?=base_url()?>index.php/productos/">Productos</a>
			     	</li>
			      	<li class="nav-item">
			        	<a class="nav-link btn btn-light text-dark" style="margin: 10px; " href="<?=base_url()?>index.php/clientes/">Clientes</a>
			     	</li>
			     	<li class="nav-item">
			        	<a class="nav-link btn btn-light text-dark" style="margin: 10px; " href="<?=base_url()?>index.php/sucursales/">Sucursales</a>
			     	</li>
			     	<li class="nav-item">
			        	<a class="nav-link btn btn-light text-dark" style="margin: 10px; " href="<?=base_url()?>index.php/pedidos/">Pedidos</a>
			     	</li>
	    		</ul>
<form class="form-inline">

   			 <a href="<?=base_url()?>index.php/login/cerrar_sesion" class="btn btn-outline-light my-2 my-sm-0" role="button" aria-pressed="true">Cerrar Sesion</a>
  		</form>
	  	</div>
	  	
	 </nav> 		