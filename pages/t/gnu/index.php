<?php include '../../../m-config.php';?><!DOCTYPE html>
<html lang="es" ng-app>
  <head>
    <title>LC - GNU|Linux</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Tutoriales, concejos y notas acerca de programacion en varios lenguajes, seguridad informatica, correcto uso de nuestros dispositivos y cuidado en redes sociales e internet en general.">
    <meta name="keywords" content="limbo,city,pro,angel,web,design,diseño,programming,program,programacion,sitio,internet,pagina,tutoriales,html,css,js,javascript,izucar,matamoros,puebla,mexico,seguridad,concejos,social,redes">
    <meta name="author" content="Angel de jesus gomez juarez, lynild02">
    <meta name="robots" content="index, follow">
    <meta property="fb:app_id" content="441144079589506">
    <meta property="og:title" content="LimboCity - Notas, Concejos y tutoriales.">
    <meta property="og:type" content="artice">
    <meta property="og:url" content="http://limbocity.xyz/pages/t/">
    <meta property="og:site_name" content="LimboCity - Notas, Concejos y tutoriales.">
    <meta property="og:locale" content="es_ES">
    <meta property="og:description" content="Pocos usan Linux, por que no ser uno mas?!!!">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@lil_bayonetta">
    <link rel="icon" href="<?=$serv?>src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery-lazyload/jquery.lazyload.js"></script>
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
    <div id="initm">
      <h3 class="dot">GNU|Linux</h3>
      <hr>
      <h2>Siente la libertad en la sangre, siente Linux en la sangre...</h2>
      <p>Ten presente que puedes enviar un mensaje siempre que quieras a <a href='mailto:info@limbocity.xyz'>este correo</a> o nuestras <a href='<?=$serv?>social'>redes sociales</a>, para hacer cualquier petición.</p>
    </div>
    <div id="pub"></div><?php
     $query="SELECT * FROM tnotes WHERE type = 'gnu' ORDER BY date DESC";
     $do = $tconexion->query($query);
    ?>
    <div id="container" class="grid"><?php while($row=$do->fetch_assoc()){ ?>
      <div class="grid-sizer"></div>
      <div class="grid-item"><img src="<?php echo $row["img"];?>" title="title" alt="alt" attr class="lazy">
        <figcaption><?php echo $row['title'];?></figcaption><a href="<?php echo "../notes/" . $row["lnk"];?>" title="<?php echo $row['title'];?>"></a>
      </div><?php } ?>
    </div>
    <footer>
      <article class="container">
        <div class="row">
          <div class="columns three">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">About ME</a></li>
              <li><a href="https://privacy.limbocity.xyz">Privacidad</a></li>
              <li><a href="#">Responsabilidad</a></li>
            </ul>
          </div>
          <div class="columns three">
            <ul>
              <li><a href="https://www.facebook.com/limbocity/" title="Facebook" target="_blank">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Google +</a></li>
              <li><a href="https://www.behance.net/lynild02" target="_blank">Behance</a></li>
            </ul>
          </div>
          <div id="mc_embed_signup" class="columns six">
            <p><strong>Suscribete para recibir actualizaciones</strong> Recibe las noticias y mensajes lo mas pronto posible.</p>
            <form id="mc-embedded-subscribe-form" action="//xyz.us12.list-manage.com/subscribe/post?u=1f3f3272787af7763f0467cdd&amp;amp;id=b2c233b12a" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate class="row validate">
              <div class="columns eight">
                <input id="mce-EMAIL" type="email" value="" name="EMAIL" placeholder="Correo Electronico" required class="u-full-width email">
              </div>
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_1f3f3272787af7763f0467cdd_b2c233b12a" tabindex="-1" value="">
              </div>
              <div class="columns four">
                <input id="mc-embedded-subscribe" type="submit" name="subscribe" value="Suscribir" class="button-primary button">
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <p class="indief i">Creado por <strong>Angel de Jesus Gomez Juarez, Lynild</strong>. <strong>Limbo City 2017</strong></p>
        </div>
      </article>
    </footer>
  </body>
  <script type="text/javascript" src="<?=$serv?>node_modules/angular/angular.js" async></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js" async></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/masonry-layout/dist/masonry.pkgd.min.js" async></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/imagesloaded/imagesloaded.pkgd.min.js" async></script>
  <script type="text/javascript" src="js/main.js" async></script>
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