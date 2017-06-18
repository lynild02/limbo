<?php include 'm-config.php';?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>Limbo City PRO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Freelance Web Designer - Diseño y programacion Web, Tutoriales gratuitos para que aprendas a hacerlo tu mismo e información acerca de buenas practicas en la red.">
    <meta name="keywords" content="limbo,city,pro,angel,gomez,juarez,lynild,web,design,diseño,programming,program,programacion,sitio,internet,pagina,tutoriales,html,css,js,javascript,izucar,matamoros,puebla,mexico">
    <meta name="author" content="Angel de jesus gomez juarez, lynild02">
    <meta name="robots" content="index, follow">
    <meta property="fb:app_id" content="441144079589506">
    <meta property="og:title" content="Limbo City PRO">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://limbocity.xyz">
    <meta property="og:site_name" content="LimboCity">
    <meta property="og:locale" content="es_es">
    <meta property="og:image" content="http://limbocity.xyz/img/og.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">
    <meta property="og:description" content="Freelance Web Designer - Diseño y programacion Web, Tutoriales gratuitos para que aprendas a hacerlo tu mismo e información acerca de buenas practicas en la red.">
    <link rel="icon" href="src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="Skeleton/css/normalize.css">
    <link rel="stylesheet" href="Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
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
          <li>Portafolio<a href="<?=$serv?>pages/p"></a></li>
          <li>Tutoriales<a href="<?=$serv?>pages/t"></a></li>
          <li>Dibujo y mas<a href="<?=$serv?>pages/a"></a></li>
          <li>Acerda de...<a href="<?=$serv?>pages/h"></a></li>
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
        <div data-share="true" data-width="450" data-show-faces="true" style="text-align: center;" class="fb-like u-full-width"></div>
        <hr>
        <div class="content-wrapper">
          <p class="indief">Diseñador Web Independiente&nbsp;&mdash;&nbsp;desde M&eacute;xico</p>
          <p class="indief i">Freelance Web Designer&nbsp;&mdash;&nbsp;from M&eacute;xico</p>
          <p id="present">
            Hola! Soy <b><a href='<?=$serv?>/pages/t/aboutme.php'>Lynild</a></b>. Se puede decir que soy el <i>'fundador/creador/gato/lo-que-sea'</i> de <b>Limbo City</b>; para los que tengan interes en saber de que va todo esto les dejare un link en el que se describe todo acerca del proyecto <b><i>Limbo City</i></b> justo... <a href='pages/h/theidea.php'>aqui.</a><br><br>
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
            <figure class="columns four"><img src="img/tw.png" title="twitter" alt="twitter" attr><a href="" target="_blank"></a></figure>
            <figure class="columns four"><img src="img/be.png" title="behance" alt="behance" attr><a href="https://www.behance.net/lynild02" target="_blank"></a></figure>
          </div>
        </div>
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
  </body>
  <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/scrollflow/scrollflow.js" async></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-70395856-1', 'auto');
    ga('send', 'pageview');
    
  </script>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '441144079589506',
        xfbml      : true,
        version    : 'v2.9'
      });
      FB.AppEvents.logPageView();
    };
    
    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>
</html>