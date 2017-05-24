<?php include 'm-config.php';?><!DOCTYPE html>
<html lang="es" ng-app>
  <head>
    <title>Limbo City PRO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="description">
    <meta name="keywords" content="limbo,city,pro,angel,">
    <meta name="author" content="Angel de jesus gomez juarez, lynild02">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="Skeleton/css/normalize.css">
    <link rel="stylesheet" href="Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.js" async="async"></script>
  </head>
  <body onload="function($('.loader-c').fadeOut('slow'))" class="page-overview">
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <header>
      <nav>
        <ul>
          <li>Portafolio<a href="<?=$serv?>/pages/p"></a></li>
          <li>Tutoriales<a href="<?=$serv?>/pages/t"></a></li>
          <li>Dibujo y mas<a href="<?=$serv?>/pages/a"></a></li>
          <li>Acerda de...<a href="<?=$serv?>/pages/h"></a></li>
        </ul>
      </nav>
    </header>
    <div class="wrapper">
      <div class="hero-title"><span>Creamos y te enseñamos a crear.</span>
        <hr>
        <h4>Diseño y Programación Web &mdash; Tutoriales Gratuitos</h4>
      </div>
    </div>
    <div class="wrapp">
      <article class="container">
        <div class="hero h-wrapp">
          <div id="tittle">
            <h2>Limbo City</h2>
            <h5><i>Si no existe aún... Prográmalo!</i></h5>
          </div>
        </div>
        <h3 class="hunt">Me gusta lo dificil, me atrae lo complicado y me enamoro de lo imposible.</h3>
        <hr>
        <div class="content-wrapper">
          <p class="indief">Diseñador Web Independiente&nbsp;&mdash;&nbsp;desde M&eacute;xico</p>
          <p class="indief i">Freelance Web Designer&nbsp;&mdash;&nbsp;from M&eacute;xico</p>
          <p id="present">
            Hola! Soy <b><a href='<?=$serv?>/pages/t/aboutme.php'>Lynild</a></b>. Se puede decir que soy el <i>'fundador/creador/gato/lo-que-sea'</i> de <b>Limbo City</b>; para los que tengan interes en saber de que va todo esto les dejare un link en el que se describe todo acerca del proyecto <b><i>Limbo City</i></b> justo... <a href='h/theidea.php'>aqui.</a><br><br>
            En esta pagina, aparte de poder contratar mis servicios como diseñador/programador, tambien encontraras secciones dedicadas al arte del <b>dibujo</b>, el arte de la <b>programación</b> y <b>tutoriales</b> para aquellas personas que desean aprender un <b>poco sobre todo.</b>
          </p>
          <h3 class="hunt">Pasemos a lo bueno!</h3>
          <div id="hail">
            <p class="indief">Que quieres hacer ahora?</p>
            <p class="indief i">What do you want to do Now?</p>
            <div class="row img-row">
              <figure class="rr columns four"><img src="img/block/6.jpg" title="portfolio" alt="portafolio" attr>
                <figcaption>Portafolio</figcaption><a href="<?=$serv?>/pages/p"></a>
              </figure>
              <figure class="rr columns four"><img src="img/block/2.jpg" title="tutorials" alt="tutoriales" attr>
                <figcaption>Tutoriales</figcaption><a href="<?=$serv?>/pages/t"></a>
              </figure>
              <figure class="rr columns four"><img src="img/block/1.jpg" title="art" alt="arte" attr>
                <figcaption>Arte</figcaption><a href="<?=$serv?>/pages/a"></a>
              </figure>
            </div>
            <hr>
          </div>
          <h3 class="hunt">Redes Sociales</h3>
          <div class="row rsoc">
            <figure class="columns four"><img src="img/fb.png" title="facebook" alt="facebook" attr><a href="https://www.facebook.com/limbocity/" title="Facebook" target="_blank"></a></figure>
            <figure class="columns four"><img src="img/tw.png" title="twitter" alt="twitter" attr><a href=""></a></figure>
            <figure class="columns four"><img src="img/be.png" title="behance" alt="behance" attr><a href="https://www.behance.net/lynild02"></a></figure>
          </div>
        </div>
      </article>
    </div>
    <footer>
      <article class="container">
        <div class="row">
          <div class="columns four">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">About ME</a></li>
              <li><a href="#">Privacidad</a></li>
              <li><a href="#">Responsabilidad</a></li>
            </ul>
          </div>
          <div class="columns four"></div>
          <div class="columns four"></div>
        </div>
      </article>
    </footer>
  </body>
  <script type="text/javascript" src="node_modules/angular/angular.js"></script>
  <script type="text/javascript" src="js/functions.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js" async="async"></script>
  <script>
    $(document).ready(function(){
      $('#fullpage').fullpage();
    });
  </script>
  <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css" async="async">
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/vendors/scrolloverflow.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js" async="async"></script>
</html>