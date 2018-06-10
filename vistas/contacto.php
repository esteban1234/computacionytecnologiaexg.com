<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

  <div style="padding: 2% 0%; overflow: hidden;">
    <div class="logo pull-left">
      <img src="../img/exg.png" alt="EXG" class="img-responsive">
    </div>

    <nav class="pull-right">
      <ul>
        <a class="selector" href="../index.php">INICIO</a>
        <a class="selector" href="nosotros.php">NOSOTROS</a>
        <a class="selector" href="servicios.php">SERVICIOS</a>
        <a class="selector" id="select" href="contacto.php">CONTACTO</a>
      </ul>
    </nav>
     <div class="openclose">
      <i class="fa fa-bars open" aria-hidden="true"></i>
      <i class="fa fa-times close" aria-hidden="true"></i>
    </div>
  </div>

  <div>
    <div class="contentext pull-left">
      <h2>¿Quieres que hablemos?</h2>
      <p>Si quieres que nos conozcamos y te asesoremos, completa este formulario y nos pondremos en contacto contigo.</p>
    </div>
    <figure class="imagenc pull-right">
      
    </figure>
  </div>

  <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.1413957920736!2d-89.63962137084755!3d21.010039599125545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567411fe5d1ef9%3A0x651ff377a33e9cc9!2sCalle+26%E1%B4%B0+162A%2C+Chuburn%C3%A1+de+Hidalgo%2C+97205+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1528324903868" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <div class="container animated fadeIn">

  <div class="row">
    <h1 class="header-title"> Formulario de contacto </h1>
    <hr class="hr-delete"> <br class="delete-br"><br class="delete-br">
    <div class="col-sm-12" id="parent">
      

      <div class="col-md-12">
        <form class="contact-form" method="post" onSubmit="return false">
  
            <div class="form-group">
              <input type="text" class="form-control" id="txtNOMBRE" name="nm" placeholder="Nombre" required="">
            </div>
        
        
            <div class="form-group form_left">
              <input type="email" class="form-control" id="txtCORREO" name="em" placeholder="Correo" required="">
            </div>
        
          <div class="form-group">
               <input type="text" class="form-control" id="txtTELEFONO" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Teléfono" required="">
          </div>
          <div class="form-group">
          <textarea class="form-control textarea-contact" rows="5" id="txtCOMENTARIO" name="FB" placeholder="Comentario" required=""></textarea>
          <br>
            <div id="_AJAX_PRE_"></div>
            <button class="btn btn-default btn-send" onclick="sendCORREO()"> <span class="glyphicon glyphicon-send"></span> ENVIAR </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container second-portion">
  <div class="row">
        <!-- Boxes de Acoes -->
      <div class="col-sm-6 col-md-3">
      <div class="box">             
        <div class="icon">
          <!-- <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div> -->
          <div class="info">
            <h3 class="title">CORREO</h3>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; info@computacionytecnologiaexg.com
              <br>
              <br>
              <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; www.computacionytecnologiaexg.com
            </p>
          
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-sm-6 col-md-3">
      <div class="box">             
        <div class="icon">
          <!-- <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div> -->
          <div class="info">
            <h3 class="title">CONTACTO</h3>
              <p>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp; PENDIENTE
              
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
       <div class="clearfix visible-sm"></div>
        <div class="col-sm-6 col-md-3">
      <div class="box">             
        <div class="icon">
          <!-- <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div> -->
          <div class="info">
            <h3 class="title">DIRECCION</h3>
              <p>
               <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; C. 26D #162A POR 23 Y 25 COL. VILLAS DE CHUBURNA, MERIDA, YUCATAN. C.P. 97207
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>        

    <div class="col-sm-6 col-md-3">
      <div class="box">             
        <div class="icon">
          <!-- <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div> -->
          <div class="info">
            <h3 class="title">HORARIO</h3>
              <p>
               <i class="fa fa-clock" aria-hidden="true"></i> &nbsp; Lunes a Viernes de 9 am a 6 pm
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div> 
   
  </div>
</div>

</div>
	
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<!-- <script src="../js/funciondthc.js"></script> -->
<script src="../js/menu.js"></script>
</body>
</html>
