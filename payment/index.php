<?php include 'end/m-config.php';header("Content-Type: text/html;charset=utf-8");?><!DOCTYPE html>
<html lang="es" ng-app="lcPay">
  <head>
    <title>LC | Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="author" content="author">
    <meta name="robots" content="no-index, no-follow">
    <link rel="icon" href="src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="<?=$serv?>css/font.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300" async>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800,900" async>
    <link rel="stylesheet" href="<?=$serv?>css/payment.index.min.css">
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="node_modules/angular/angular.min.js"></script>
    <script type="text/javascript" src="node_modules/angular-route/angular-route.min.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body class="page-overview">
    <div id="fullpage">
      <div class="section">
        <div ng-view></div>
      </div>
    </div>
  </body>
  <script src="<?=$serv?>node_modules/angular-aria/angular-aria.js"></script>
  <script src="<?=$serv?>node_modules/angular-animate/angular-animate.min.js"></script>
  <script src="<?=$serv?>node_modules/angular-material/angular-material.js"></script>
  <script type="text/javascript" src="js/controller.js"></script>
  <script type="text/javascript" src="js/dash.js" async></script>
</html>