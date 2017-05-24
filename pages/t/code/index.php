<?php include '../../../m-config.php';?><!DOCTYPE html>
<html lang="es" ng-app>
  <head>
    <title>LC - Code -Tutorials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="author" content="author">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
  </head>
  <body class="page-overview">
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <header>
      <nav>
        <ul>
          <li>Inicio<a href="<?=$serv?>"></a></li>
          <li>Portafolio<a href="<?=$serv?>/pages/p"></a></li>
          <li>Tutoriales<a href="<?=$serv?>/pages/t"></a></li>
          <li>Dibujo y mas<a href="<?=$serv?>/pages/a"></a></li>
          <li>Acerda de...<a href="<?=$serv?>/pages/h"></a></li>
        </ul>
      </nav>
    </header>
  </body>
  <script type="text/javascript" src="js/main.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/angular/angular.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js" async="async"></script>
  <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css">
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/vendors/scrolloverflow.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js" async="async"></script>
  <script>
    $(document).ready(function(){
      $('#fullpage').fullpage();
    });
  </script>
  <link rel="stylesheet" href="<?=$serv?>css/font.css">
</html>