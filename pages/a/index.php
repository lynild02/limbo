<?php include '../../m-config.php';?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>LC - Draw</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Freelance Web Designer - Diseño y programacion Web, Tutoriales gratuitos para que aprendas a hacerlo tu mismo!">
    <meta name="keywords" content="limbo,city,pro,angel,web,design,diseño,programming,program,programacion,sitio,internet,pagina,tutoriales,html,css,js,javascript,izucar.matamoros,puebla,mexico">
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
    <link rel="stylesheet" href="<?=$serv?>css/font.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js" async="async"></script>
  </head>
  <body onload="function($('.loader-c').fadeOut('slow'))" class="page-overview"></body>
  <script type="text/javascript" src="js/main.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/angular/angular.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
  <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css" async="async">
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/vendors/scrolloverflow.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js" async="async"></script>
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