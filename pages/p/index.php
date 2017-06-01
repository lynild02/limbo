<?php include '../../m-config.php';?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>Portafolio - Limbo City</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Portafolio - Los trabajos de diseño y programacion Web que hemos realizado, ademas de algunos projectos personales y mas">
    <meta name="keywords" content="limbo,city,pro,angel,web,design,diseño,programming,program,programacion,sitio,internet,pagina,tutoriales,html,css,js,javascript,izucar,matamoros,puebla,mexico,seguridad,concejos,social,redes,portafolio,trabajos,clientes,empresas,asociaciones">
    <meta name="author" content="Angel de jesus gomez juarez, lynild02">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Limbo City PRO - Portafolio">
    <meta property="og:url" content="http://limbocity.xyz/pages/p">
    <meta property="og:site_name" content="LimboCity">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="http://limbocity.xyz/img/og.png">
    <meta property="og:description" content="Freelance Web Designer - Diseño y programacion Web, Tutoriales gratuitos para que aprendas a hacerlo tu mismo!">
    <link rel="icon" href="<?=$serv?>src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="<?=$serv?>js/contact.js"></script>
  </head>
  <body onload="funcion($('.loader-c').fadeOut('slow'))" class="page-overview">
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
          <li>Tutoriales<a href="../t"></a></li>
          <li>Dibujo y mas<a href="../a"></a></li>
          <li>Acerda de...<a href="../h"></a></li>
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
      <div class="section asect ahbd">
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
                <figure class="rr <?php echo $row["attr"];?>"><img src="data:image/png;base64,<?php echo base64_encode($row['image']);?>" title="<?php echo $row['title'];?>" attr>
                  <figcaption><?php echo $row['title'];?><br><hr><span><?php echo $row['description'];?></span></figcaption><a href="<?php echo $row['url'];?>" target="_blank"></a>
                </figure><script>$('.<?php echo $row["attr"];?>').mouseover(function(){$('.back-big-g').css({'transition':'all .5s ease-in-out','opacity':1,'background':'url(data:image/png;base64,<?php echo base64_encode($row["image"]);?>)','background-size':'contain','background-repeat':'no-repeat','background-position':'center center'})});$('.<?php echo $row["attr"];?>').mouseleave(function(){$('.back-big-g').css({'opacity':0,'transition':'all .3s ease-in-out'})});</script>
              </div><?php } ?>
            </div>
          </div>
          <h2 class="hunt">Todos mis proyectos</h2>
          <p class="indief i">All my projects</p>
          <p class="indief">Todos los projectos de mi portafolio, para clientes fisicos/reales y proyectos personales en proceso o proyectos experimentales.<br><span class='indief i'>Beware, Genius at Work :v</span></p>
        </div>
        <div class="c-fig wrapp">
          <div class="cfigt">
            <?php
             $query="SELECT * FROM projects ORDER BY date ASC";
             $do = $conexion->query($query);
            ?><?php while($row=$do->fetch_assoc()){ ?>
            <figure class="close"><img src="data:image/png;base64,<?php echo base64_encode($row['image']);?>" title="<?php echo $row['title'];?>" attr>
              <figcaption>
                <div id="c-text">
                  <p class="tt"><?php echo $row['title'];?></p>
                  <hr>
                  <p class="pp2">view</p>
                </div>
              </figcaption><a href="<?php echo $row['url'];?>" target="_blank"></a>
            </figure><?php } ?>
          </div>
        </div>
        <div id="contact" class="wrapp">
          <article class="container">
            <form id="ajax-form" action="<?=$serv?>mail-it.php" method="post" name="ajax-form">
              <div class="tcontact">
                <h2>Contacto</h2>
                <p>
                  Contactame directamente para cualquier cosa!
                  Correo:&nbsp;<a href='mailto:info@limbocity.xyz'>info@limbocity.xyz</a>&nbsp;Tel:&nbsp;<a href='tel:+522431162653'>+52 243 1162653</a>
                </p>
                <hr>
                <p>Información&nbsp;&mdash;&nbsp;Pedidos&nbsp;&mdash;&nbsp;Cotizaciones</p>
              </div>
              <div class="row">
                <input type="text" id="name" name="name" placeholder="Nombre" class="u-full-width">
                <input type="email" id="email" name="mail" placeholder="E-mail" class="u-full-width">
                <input type="text" id="tel" name="tel" placeholder="Telefono" class="u-full-width">
                <textarea name="message" rows="3" cols="40" placeholder="Mensaje" class="u-full-width"></textarea>
                <input type="submit" value="Enviar" class="columns eleven bb1 send send_message">
                <div id="err-form" class="error u-full-width">Ha habido un problema al validar el formulario.<br/>Revisa que los datos sean correctos y que hallas llenado todos los campos</div>
                <div id="err-timedout" class="error u-full-width">Error de conexion con el Servidor!</div>
                <div id="err-state" class="error u-full-width">Simplemente algo salio MAL :(</div>
              </div>
            </form>
            <div id="ajaxsuccess">Mensaje Enviado!<br><hr><br><span class='ops'>Ooops!<br>;D</span></div>
          </article>
        </div>
        <footer>
          <article class="container">
            <div class="row">
              <div class="columns three">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">About ME</a></li>
                  <li><a href="#">Privacidad</a></li>
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
      </div>
    </div>
  </body>
  <script type="text/javascript" src="<?=$serv?>js/functions.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/angular/angular.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
  <link rel="stylesheet" href="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.min.css">
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/vendors/scrolloverflow.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/fullpage.js/dist/jquery.fullpage.js"></script>
  <link rel="stylesheet" href="<?=$serv?>css/form.min.css">
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