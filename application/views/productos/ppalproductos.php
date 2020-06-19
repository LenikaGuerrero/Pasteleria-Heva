<head><style>
 rosa{
  color:red;
 } 
</style>
</head>
<br>

<body style="width:100%;height:100px;overflow:auto;">
  
  <br>
   <center><img class="d-block w-100" src="http://localhost:8080/PROYECTO/img/productos.jpg" alt="pastel"></center>
<br>
  </div>
</center>
<div class="pos-f-t">

  
  <nav class="navbar navbar-dark" style="background-color: rgb(198, 46, 95);">
    <button class="navbar-toggler btn-block text-light" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" style="background-color: rgb(198, 46, 95);" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      Porciones
    </button>
  </nav>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4" style="background-color: rgb(255, 226, 235);">
        <div class="container">
          <div class="row">
            <div class="col"><h3>Especificaciones</h3></div>
            <div class="col"><h3>Dimensiones</h3></div> 

            <div class="w-100" style="border-bottom: pink 1px solid" ></div><!--------------------------------------------------------->
            
            <div class="col align="center" >
              <img class="featurette-image img-fluid mx-auto" data-src="holder.js/300x300/auto" alt="300x300" style="width: 190px; height: 153px;" src="<?=base_url()?>img/rosca_porciones.png" data-holder-rendered="true">
            </div>
            <!--12-->
            <div class="col" ><p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/tenedor.png" data-holder-rendered="true" >12 porciones</p>

              <p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/diametro.png" data-holder-rendered="true" >Diámetro:24 cm</p>

              <p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/alto.png" data-holder-rendered="true" >Alto: 10 cm</p>
            </div>

            <div class="w-100" style="border-bottom: black 1px solid"></div><!--------------------------------------------------------->

              <div class="col align="center">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/300x300/auto" alt="300x300" style="width: 190px; height: 153px;" src="<?=base_url()?>img/15_porciones.png" data-holder-rendered="true">
              </div>
<!--15-->
              <div class="col align="center"><p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/tenedor.png" data-holder-rendered="true" >15 porciones</p>

                <p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/diametro.png" data-holder-rendered="true" >Diámetro:23 cm</p>

                <p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/alto.png" data-holder-rendered="true" >Alto: 10 cm</p>
            </div>

            <div class="w-100" style="border-bottom: black 1px solid"></div><!--------------------------------------------------------->

            <div class="col align="center">
              <img class="featurette-image img-fluid mx-auto" data-src="holder.js/300x300/auto" alt="300x300" style="width: 190px; height: 153px;" src="<?=base_url()?>img/20_porciones.png" data-holder-rendered="true">
            </div>
<!--20-->
            <div class="col align="center"><p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/tenedor.png" data-holder-rendered="true" >20 porciones</p>

              <p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/diametro.png" data-holder-rendered="true" >Diámetro:25 cm</p>

              <p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/alto.png" data-holder-rendered="true" >Alto: 12 cm</p>
            </div>

            <div class="w-100" style="border-bottom: black 1px solid"></div><!--------------------------------------------------------->

            <div class="col align="center">
              <img class="featurette-image img-fluid mx-auto" data-src="holder.js/300x300/auto" alt="300x300" style="width: 190px; height: 153px;" src="<?=base_url()?>img/30_porciones.png" data-holder-rendered="true">
            </div>
            
<!--30-->
            <div class="col align="center"><p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/tenedor.png" data-holder-rendered="true" >30 porciones</p>

              <p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/diametro.png" data-holder-rendered="true" >Diámetro:27 cm</p>

              <p><img  class="" style="width: 24.2px; height: 22.4px" data-src="holder.js/300x300/auto" alt="300x300"  src="<?=base_url()?>img/alto.png" data-holder-rendered="true" >Alto: 12 cm</p>
            </div>                        
           
          </div>
        </div>
    </div>
  </div>
</div>
   <br>

  <main role="main">
      <div class="container" style="margin-top: 100px;">
        <?php
                if($DATA_PRODUCTOS!=false)
                {
                  foreach ($DATA_PRODUCTOS->result() as $row) 
                  {
                      echo '<div class="row featurette ">';
                      echo '<div class="col-md-7">';
                        echo '<h2 class="featurette-heading text-danger">';
                        echo $row->nombre;
                        echo '</h2>';
                        echo'<p class="lead">';
                        echo $row->descripcion;
                        echo '</p>';
                        echo'<p class="lead">Porciones: ';
                        echo $row->porciones;
                        echo '</p>';
                        echo'<p class="lead">Precio: $';
                        echo $row->precio;
                        echo '</p>';
                        echo '<p><a class="btn btn-secondary" href="'.base_url().'index.php/productos/pedido/'.$row->id_producto.'" role="button">Ordenar &raquo;</a></p>';
                      echo '</div>';
                      echo '<div class="col-md-5">';
                      echo '<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 400px; height: 400px;" src="'.$row->imagen.'">';
                      echo '</div>';
                      echo '</div>';
                      echo' <hr> ';

                  }
                }
              ?>
      </div> <!-- /container -->
    </main>
</body>
