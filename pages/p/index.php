<?php include '../../m-config.php';?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>Portafolio - Limbo City</title>
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js" async="async"></script>
  </head>
  <body class="page-overview">
    <header>
      <nav>
        <ul>
          <li>Inicio<a href="../../"></a></li>
          <li>Tutoriales<a href="/t"></a></li>
          <li>Dibujo y mas<a href="/a"></a></li>
          <li>Acerda de...<a href="/h"></a></li>
        </ul>
      </nav>
    </header>
    <div id="fullpage" class="fullp">
      <div id="f-backg" class="section asect">
        <div id="way" class="title"><span>Portafolio</span>
          <hr>
          <h4>Por que los hechos cuentan mas que las palabras.</h4>
        </div>
      </div>
      <div class="section asect">
        <div class="title black"><span class="ring">All Happy By Design</span>
          <p>Como <b>diseñador y programador web</b> siempre intento dejar cada gota de empeño en mis trabajos y quiero compartir algunos contigo.</p>
        </div>
      </div>
      <div class="section fp-autoscroll whole-content">
        <div id="last">
          <div>
            <h2 class="hunt">Mis ultimos proyectos</h2>
            <p class="indief i">My last projects</p>
            <p>Mis trabajos mas recientes de Diseño y Programación WEB</p>
            <div class="row"><?php
               $query="SELECT * FROM projects ORDER BY date DESC LIMIT 0, 3";
               $do = $conexion->query($query);
              ?><?php while($row=$do->fetch_assoc()){ ?>
              <div class="columns four samehw">
                <figure class="rr"><img src="data:image/png;base64,<?php echo base64_encode($row['image']);?>" title="<?php echo $row['title'];?>" attr>
                  <figcaption><?php echo $row['title'];?><br><hr><span><?php echo $row['description'];?></span></figcaption><a href="<?php echo $row['url'];?>" target="_blank"></a>
                </figure>
              </div><?php } ?>
            </div>
          </div>
          <h2 class="hunt">Todos mis proyectos</h2>
          <p class="indief i">All my projects</p>
          <p class="indief">Todos los projectos de mi portafolio, para clientes fisicos/reales y proyectos personales en proceso o proyectos experimentales.<br><span class='indief i'>Beware, Genius at Work :v</span></p>
          <div class="c-fig">
             
            <?php
             $query="SELECT * FROM projects ORDER BY date ASC";
             $do = $conexion->query($query);
            ?><?php while($row=$do->fetch_assoc()){ ?>
            <figure class="close"><img src="data:image/png;base64,<?php echo base64_encode($row['image']);?>" title="<?php echo $row['title'];?>" attr>
              <figcaption>
                <div id="c-text">
                  <p><?php echo $row['title'];?></p>
                  <hr>
                  <p class="pp2">view</p>
                </div>
              </figcaption><a href="<?php echo $row['url'];?>" target="_blank"></a>
            </figure><?php } ?>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="<?=$serv?>node_modules/angular/angular.js" async="async"></script>
  <script type="text/javascript" src="js/main.js" async="async"></script>
  <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css">
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/vendors/scrolloverflow.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>js/functions.js" async="async"></script>
  <script>
    $(document).ready(function(){
      $('#fullpage').fullpage();
    });
  </script>
  <link rel="stylesheet" href="<?=$serv?>css/font.css">
</html>