<?php include '../../m-config.php';?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>LC - Tutoriales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="author" content="author">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="<?=$serv?>src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
  </head>
  <body onload="function($('.loader-c').fadeOut('slow'))" class="page-overview">
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <div class="back-big-g"></div>
    <header>
      <nav>
        <ul>
          <li>Inicio<a href="../../"></a></li>
          <li>Tutoriales<a href="../t"></a></li>
          <li>Dibujo y mas<a href="../a"></a></li>
          <li>Acerda de...<a href="../h"></a></li>
        </ul>
      </nav>
    </header>
    <div id="fullpage" class="fullp">
      <div class="wrapp section">
        <div id="htitle">
          <h2>Tutoriales</h2>
          <hr>
          <h4>Por que tu tambien lo puedes hacer</h4>
        </div>
      </div>
      <div id="type" class="section">
        <figure id="tprogramming" class="square">
          <figcaption>
            <div class="tcont">
              <h3>Programación y Diseño</h3>
              <hr>
              <p>Diferentes lenguajes, diferentes sistemas</p>
            </div>
          </figcaption><a href="code"></a>
        </figure>
        <figure id="twindows" class="square">
          <figcaption>
            <div class="tcont">
              <h3>Windows</h3>
              <hr>
              <p>Aprende a darle un mejor uso a tu sistema Windows</p>
            </div>
          </figcaption><a href="win"></a>
        </figure>
        <figure id="tlinux" class="square">
          <figcaption>
            <div class="tcont">
              <h3>Linux</h3>
              <hr>
              <p>Sacale provecho a Linux.<br>Especialmente a Ubuntu y Kali Linux</p>
            </div><a href="gnu"></a>
          </figcaption>
        </figure>
        <figure id="tmac" class="square">
          <figcaption>
            <div class="tcont">
              <h3>Tienes un Mac?</h3>
              <hr>
              <p>Mantenlo fresco y sano! Ademas te enseñamos a darle el mejor uso para cualquier cosa.</p>
            </div><a href="mac"></a>
          </figcaption>
        </figure>
        <figure id="tnotes" class="square">
          <figcaption>
            <div class="tcont">
              <h3>Notas</h3>
              <hr>
              <p>Concejos sobre seguiridad en la internet en general, correcto uso de nuestros dispositivos y como aprovechar los recursos que internet nos da. ETC...</p>
            </div><a href="notes"></a>
          </figcaption>
        </figure>
        <h3 id="htt">Selecciona la categoria que necesites</h3>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/angular/angular.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
  <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css">
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/vendors/scrolloverflow.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js"></script>
  <script>
    $(document).ready(function(){
      $('#fullpage').fullpage();
    });
  </script>
  <link rel="stylesheet" href="<?=$serv?>css/font.css">
</html>