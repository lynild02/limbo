<?php include '../../m-config.php';?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>Angel Gomez | Freelance Web Designer & Developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Portafolio - Los trabajos de diseño y programacion Web que hemos realizado, ademas de algunos proyectos personales y mas">
    <meta name="keywords" content="limbo,city,pro,angel,web,design,diseño,programming,program,programacion,sitio,internet,pagina,tutoriales,html,css,js,javascript,izucar,matamoros,puebla,mexico,seguridad,concejos,social,redes,portafolio,trabajos,clientes,empresas,asociaciones,portfolio,portafolio,mi,trabajo,proyecto,sitios,hechos,terminados,proceso">
    <meta name="author" content="Angel de jesus gomez juarez, lynild02">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Limbo City PRO - Portafolio">
    <meta property="og:url" content="http://limbocity.xyz/pages/p">
    <meta property="og:site_name" content="LimboCity">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="http://limbocity.xyz/img/og.png">
    <meta property="og:description" content="Conoce mi trabajo y proyectos que tengo aun en proceso!">
    <link rel="icon" href="<?=$serv?>src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/css3-animate/css/animations.css">
    <link rel="stylesheet" href="<?=$serv?>css/font.css">
    <link rel="stylesheet" href="css/style.min.css">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.min.js" attr></script>
    <script type="text/javascript" src="js/main.js" attr></script>
  </head>
  <body class="page-overview">
    <div class="grid"><span class="first"></span><span class="second"></span><span class="thirt"></span><span class="fourth"></span><span class="fiveth"></span><span class="sixth"></span><span class="seventh"></span><span class="eighth"></span></div>
    <div class="page-nav"><a href="#about" class="page-scroll"><span>ABOUT</span></a><a href="#work" class="page-scroll"><span>work</span></a></div>
    <div class="wrapp animatedParent">
      <div id="logo-ag" class="animated fadeInDownShort"></div>
      <div id="particles-js"></div>
      <div id="title-text" class="container animatedParent animateOnce">
        <h2 class="animated fadeInDownShort delay-500">diseño & desarrollo digital, profesional y amigable. Freelance.</h2>
        <h1 class="animated fadeInUpShort">Limbo City, profesional.</h1>
      </div>
    </div>
    <div id="work" class="section">
      <article class="container">
        <div class="wrapper-sticky">
          <div class="work-bg sticker"><img src="<?=$serv?>img/portfolio-bg.svg"></div>
        </div><?php
         $query="SELECT * FROM projects ORDER BY date ASC";
         $do = $conexion->query($query);
        ?><?php while($row=$do->fetch_assoc()){ ?>
        <div class="animatedParent animateOnce work-item">
          <div data-tilt class="js-tilt work-image animated fadeIn delay-250"><img src="data:image/png;base64,<?php echo base64_encode($row['image']);?>" title="<?php echo $row['title'];?>" attr class="equalheight"></div>
          <div class="c-text work-info-wrapper equalheight">
            <div class="c-content animated fadeInRightShort delay-500 work-info"><span class="tt"><?php echo $row['title'];?></span>
              <h2 class="pp2"><?php echo $row['description'];?></h2><a href="<?php echo $row['url'];?>" target="_blank">Explorar Proyecto</a>
            </div>
          </div>
        </div><?php } ?>
      </article>
    </div>
    <div id="about" class="section animatedParent animateOnce">
      <article class="container">
        <div class="about-bg"><img src="<?=$serv?>img/about-bg.svg"></div>
        <h1 class="animated fadeInUpShort delay-250"><b>Bueno,<br>Hola!</b></h1><br><br>
        <div class="wrapper">
          <p class="animated fadeInUpShort delay-500">Hola, Mi nombre es Angel de Jesus Gomez Juarez, pueden llamarme <b>Lynild</b>. He estado diseñando sitios web desde hace 3 años y contando, todo desde Mexico!<br><br>He trabajado con algunas empresas y franquisias locales. Todo como Freelancer.<br><br>Mi trabajo principalmente se basa en diseños minimalistas, pero al cliente lo que pida.<br><br>Si estas buscando a un diseñador profesional y amigable, espero ser tu primera opción.</p>
        </div>
        <div class="skills animated fadeInUpShort delay-750">
          <h3>Que puedo hacer por ti?</h3>
          <div class="list">
            <p>
              Diseño & Desarrollo de Sitio Web
              <br> 
              Direccion Creativa
              <br> 
              Branding
              <br> 
              Diseño Movil/App
            </p>
          </div>
        </div>
      </article>
    </div>
    <div id="talk" class="section">
      <h3>Estemos en contacto!</h3>
      <div class="row"><span class="columns six"><a href="mailto:info@limbocity.xyz">info@limbocity.xyz</a></span></div>
      <div class="row"><span class="columns six"><a href="tel:+522431162653">Hablemos!</a></span></div>
      <div class="row"><span class="columns six separated">&copy;&nbsp;Limbo City 2017</span></div>
    </div>
  </body>
  <script type="text/javascript" src="<?=$serv?>node_modules/sticky/jquery.sticky.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/tilt.js/dest/tilt.jquery.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/jquery-match-height/dist/jquery.matchHeight-min.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/css3-animate/js/css3-animate-it.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/particles.js/particles.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/jquery-smooth-scroll/src/jquery.smooth-scroll.js"></script>
</html>