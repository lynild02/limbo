<?php include 'end/m-config.php';?><!DOCTYPE html>
<html lang="es" ng-app="lcPriv">
  <head>
    <title>LC | Privacy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="author" content="author">
    <meta name="robots" content="no-index, no-follow">
    <link rel="icon" href="<?=$serv?>src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="<?=$serv?>css/font.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300" async>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800,900" async>
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script type="text/javascript" src="node_modules/angular-route/angular-route.min.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body style="background: url(img/naturalw.png);" class="page-overview">
    <div id="fullpage">
      <div class="section">
        <div ng-view></div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="js/controller.js"></script>
</html>