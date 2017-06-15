<?php include 'end/m-config.php';header("X-XSS-Protection: 0");header('Access-Control-Allow-Origin: *');?><!DOCTYPE html>
<html lang="es" ng-app="mainApp">
  <head>
    <title>Webmasters Area</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Hey men, you dont have anything to do here!">
    <meta name="keywords" content="no, entres, aqui, si, no, eres, webmaster, ;D">
    <meta name="author" content="Lynild">
    <meta name="robots" content="no-index, no-follow">
    <link rel="icon" href="<?=$serv?>src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="node_modules/angular/angular.min.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/angular-route/angular-route.min.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery-lazyload/jquery.lazyload.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body class="page-overview">
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <div id="fullpage">
      <div class="wrapp section">
        <div ng-view></div>
      </div>
    </div>
  </body>
  <script src="<?=$serv?>node_modules/angular-aria/angular-aria.js"></script>
  <script src="node_modules/angular-animate/angular-animate.min.js"></script>
  <script src="<?=$serv?>node_modules/angular-material/angular-material.js"></script>
  <script src="<?=$serv?>node_modules/filestyle/src/jquery-filestyle.min.js" async></script>
  <link rel="stylesheet" href="<?=$serv?>node_modules/filestyle/src/jquery-filestyle.min.css" async>
  <script type="text/javascript" src="<?=$serv?>node_modules/ng-file-upload/dist/ng-file-upload.min.js" async></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/ng-file-upload/dist/ng-file-upload-shim.min.js" async></script>
  <script type="text/javascript" src="js/controller.js"></script>
  <script type="text/javascript" src="js/dash.js" async></script>
</html>