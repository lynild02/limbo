<?php include '../../m-config.php';?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>LC - Tutoriales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Tutoriales, concejos y notas acerca de programacion en varios lenguajes, seguridad informatica, correcto uso de nuestros dispositivos y cuidado en redes sociales e internet en general.">
    <meta name="keywords" content="limbo,city,pro,angel,web,design,diseño,programming,program,programacion,sitio,internet,pagina,tutoriales,html,css,js,javascript,izucar,matamoros,puebla,mexico,seguridad,concejos,social,redes">
    <meta name="author" content="Angel de jesus gomez juarez, lynild02">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Limbo City PRO">
    <meta property="og:url" content="http://limbocity.xyz">
    <meta property="og:site_name" content="LimboCity">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="http://limbocity.xyz/img/og.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:description" content="Freelance Web Designer - Diseño y programacion Web, Tutoriales gratuitos para que aprendas a hacerlo tu mismo!">
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
          <li>Portafolio<a href="../p"></a></li>
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
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-70395856-1', 'auto');
    ga('send', 'pageview');
  </script>
</html>