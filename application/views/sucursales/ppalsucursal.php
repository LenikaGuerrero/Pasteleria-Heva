<body style="width:100%;height:100px;overflow:auto;">
  <br>
  <br>
   <center><img class="d-block w-100" src="http://localhost:8080/PROYECTO/img/sucursales.jpg" alt="pastel"></center>
   <br>
   <center><p align="justify"><h2>!Estamos a su disposición ven y conócenos!</h2> </p></center>
    <div class="container" align="justify" style="border: black 4px outset;">
      <CENTER>
            <!-- Example row of columns -->
            <div class="row">
              <?php
            
                if($DATA_SUCURSALES!=false)
                {
                  foreach ($DATA_SUCURSALES->result() as $row) 
                  {
                      echo '<div class="col-md-12">';
                        echo '<h2 class="text-danger">';
                        echo $row->nombre;
                        echo '</h2>';
                        echo '<br>';
                        echo 'Dirección: ';
                        echo $row->direccion;
                        echo '<br>';
                        echo 'Ciudad: ';
                        echo $row->ciudad;
                        echo '<br>';
                        echo 'Teléfono: ';
                        echo $row->telefono;
                        echo '<br>';
                        echo '<br>';
                        echo '</ul>';
                      echo '</div>';

                  }
                }
              ?>
              
      </div> <!-- /container --><center><a href="https://www.google.com.mx/maps/place/Bacobampo+1233,+Camino+Real,+83178+Hermosillo,+Son./@29.1196046,-111.0099684,17z/data=!3m1!4b1!4m5!3m4!1s0x86ce814851bc723b:0x740898bc51f08983!8m2!3d29.1196046!4d-111.0077797?hl=es"  target="_blank">Ubicación </a></center>
      </CENTER>
    </div>
    <br>
</body>

