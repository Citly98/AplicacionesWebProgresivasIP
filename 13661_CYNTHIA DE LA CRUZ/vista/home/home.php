<?php
include("../menu/top.php");
?>
<link href="configuraciones/css/purple.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>

  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
<h1>HOLA BIENVENIDA A TU ESTETICA PREFERIDA</h1>

<a href="pag_2" class="btn btn-info">ABRIR 2A PAGINA</a>

<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="../configuraciones/imagenes/corto.jpg" alt="Los Angeles" width="1100" height="500">
    <div class="carousel-caption">
      <h3>¡Bienvenida!</h3>
      <p class="bg-secondary text-white">Bienvenida a <strong>Tu estetica Lucy</strong>, en esta página encontrarás los mejores servicios de cortes de cabello que necesitas para lucir de forma segura y fácil.</p>
      <p class="emoji" style="font-size:1.5em;text-align:center;">🙋😍👩💜💗</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../configuraciones/imagenes/luck.jpg" alt="Chicago" width="1100" height="500">
    <div class="carousel-caption">
    <h3>¡Bienvenida!</h3>
    <p class="bg-secondary text-white">Bienvenida a <strong>Tu estetica Lucy</strong>, en esta página encontrarás los mejores servicios de cortes de cabello que necesitas para lucir de forma segura y fácil.</p>      <p class="emoji" style="font-size:1.5em;text-align:center;">🙋😍👩💜💗</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../configuraciones/imagenes/moda.jpg" alt="New York" width="1100" height="500">
    <div class="carousel-caption">
      <h3>¡Bienvenida!</h3>
      <p class="bg-secondary text-white">Bienvenida a <strong>Tu estetica Lucy</strong>, en esta página encontrarás los mejores servicios de cortes de cabello que necesitas para lucir de forma segura y fácil.</p>      <p class="emoji" style="font-size:1.5em;text-align:center;">🙋😍👩💜💗</p>
    </div>
  </div>
</div>



<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>










<?php
include("../menu/bot.php");
?>
