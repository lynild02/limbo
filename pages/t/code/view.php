
<?php
include '../../../m-config.php';
$id  = evaluar($_GET['id']);
$cdb  = $tconexion->query("SELECT * FROM tcode WHERE id=$id");
$row = $cdb->fetch_assoc();
$tit = $row['title'];
?><!DOCTYPE html>
<html lang="es">
  <head>
    <title>LC&nbsp;&mdash;&nbsp;<?php echo $row['title'];?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Tutoriales, concejos y notas acerca de programacion en varios lenguajes, seguridad informatica, correcto uso de nuestros dispositivos y cuidado en redes sociales e internet en general.">
    <meta name="keywords" content="limbo,city,pro,angel,web,design,diseño,programming,program,programacion,sitio,internet,pagina,tutoriales,html,css,js,javascript,izucar,matamoros,puebla,mexico,seguridad,concejos,social,redes">
    <meta name="author" content="Angel de jesus gomez juarez, lynild02">
    <meta name="robots" content="index, follow">
    <meta property="fb:app_id" content="441144079589506">
    <meta property="og:title" content="<?php echo 'LC - ' . $tit; ?>">
    <meta property="og:url" content="<?php echo 'http://limbocity.xyz/pages/t/code/view.php?id=' . $id; ?>">
    <meta property="og:site_name" content="LimboCity - Notas, Concejos y tutoriales.">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="<?php echo $row['img'];?>">
    <meta property="og:description" content="Freelance Web Designer - Diseño y programacion Web, Tutoriales gratuitos para que aprendas a hacerlo tu mismo!">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@lil_bayonetta">
    <link rel="icon" href="<?=$serv?>src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/normalize.css">
    <link rel="stylesheet" href="<?=$serv?>Skeleton/css/skeleton.css">
    <link rel="stylesheet" href="../css/view.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300" async>
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="<?=$serv?>js/fb.js"></script>
    <script type="text/javascript" async>
      var _prvar=_prvar||new Object();
      (function(pa,s){if(document.getElementById('pr444a070e'))return false;
      
      pa=document.createElement('script');pa.type='text/javascript';pa.async=true;pa.id='pr444a070e';pa.src='//prscripts.com/pub.js';
          s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(pa,s);})();
      
    </script>
  </head>
  <body class="page-overview">
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <article class="container cont-main">
      <header>
        <div id="logo"></div>
        <nav>
          <ul>
            <li>Inicio<a href="<?=$serv?>"></a></li>
            <li>Portafolio<a href="<?=$serv?>/pages/p"></a></li>
            <li>Tutoriales<a href="<?=$serv?>/pages/t"></a></li>
            <li>Dibujo y mas<a href="<?=$serv?>/pages/a"></a></li>
            <li>Acerda de...<a href="<?=$serv?>/pages/h"></a></li>
          </ul>
        </nav>
        <div class="section-soc"></div>
      </header>
      <div class="title-space">
        <h3><? echo $row['title'];?></h3>
        <p>Por&nbsp;<span class='auth'><? echo $row['nau'];?></span>&nbsp;&mdash;&nbsp;<? echo $row['date'];?></p>
      </div>
      <div class="all-body">
        <div class="main-content">
          <div class="body">
            <div class="img-container"><img data-original="<?php echo $row['img'];?>" class="lazy">
            </div>
            <div class="fast-description">
              <p><? echo $row['description'];?></p>
            </div>
            <h3><? echo $row['title'];?></h3>
            <div><? echo $row['body'];?></div>
          </div>
          <div class="author-f">
            <div class="img-c"><img data-original="<? echo $row["imgusr"];?>" class="lazy"></div>
            <div class="inf-c"><span class="nau"><a href="<? echo $row["lau"];?>"><? echo $row['nau'];?><br></a></span>
              <p><? echo $row['iau'];?></p>
              <p class="tt"><a href="<? echo $row["mau"];?>"><? echo $row['mau'];?>&nbsp;&mdash;&nbsp;</a></p>
            </div>
          </div>
          <div id="bdonativo">
            <p>Por que sabemos que tu corazon es GRANDE :D</p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
              <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea."><img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
          <div class="last-art">
            <div class="row"><?php
               $query="SELECT * FROM tnotes ORDER BY date DESC LIMIT 0, 3";
               $do = $tconexion->query($query);while($row=$do->fetch_assoc()){ ?>
              <div class="columns four samehw">
                <figure class="rr">
                  <div class="img-cc"><img src="<? echo $row['img'];?>"></div>
                  <figcaption><? echo $row['title'];?></figcaption><a href="<? echo $row['lnk'];?>" title="<? echo $row['title'];?>"></a>
                </figure>
              </div><?php } ?>
            </div>
          </div>
          <div id="disqus_thread">
            <script>
              /**
              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
              /*
              var disqus_config = function () {
              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              */
              (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://limbo-city.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          </div>
        </div>
        <div class="second-content">
          <div class="publc">
            <div data-href="https://www.facebook.com/limbocity/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" class="fb-page">
              <blockquote cite="https://www.facebook.com/limbocity/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/limbocity/">Limbo City</a></blockquote>
            </div>
          </div>
          <div id="bdonativo">
            <p>Por que sabemos que tu corazon es GRANDE :D</p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
              <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea."><img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
          <div class="notes">
            <p class="llt"><span>+</span> NOTAS</p>
            <div class="row"><?php
               $quer="SELECT * FROM tnotes ORDER BY date DESC LIMIT 0, 5";
               $doo = $tconexion->query($quer);
              ?><?php while($row=$doo->fetch_assoc()){ ?>
              <figure class="rr secondrr">
                <div class="img-scc"><img src="<?php echo $row['img'];?>"></div>
                <figcaption><? echo $row['title'];?></figcaption><a href="../notes/<? echo $row['lnk'];?>" title="<? echo $row['title'];?>"></a>
              </figure><?php } ?>
            </div>
          </div>
        </div>
      </div>
    </article>
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
  <script type="text/javascript" src="<?=$serv?>node_modules/angular/angular.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/loaders.css/loaders.css.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/imagesloaded/imagesloaded.pkgd.min.js" async="async"></script>
  <script type="text/javascript" src="<?=$serv?>node_modules/jquery-lazyload/jquery.lazyload.js"></script>
  <script type="text/javascript" src="../js/view.js" async="async"></script>
  <script id="dsq-count-scr" src="//limbo-city.disqus.com/count.js" async></script>
  <script src="http://ogoser.com/tools/js/custom-file-input.js" async></script>
  <script>
    $(document).ready(function(){
      $("img.lazy").lazyload();
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