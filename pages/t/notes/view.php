
<?php
include '../../../m-config.php';
$id  = evaluar($_GET['id']);
$cdb  = $tconexion->query("SELECT * FROM tnotes WHERE id=$id");
$row = $cdb->fetch_assoc();
$tl=$row['title'];
$au=$row['author'];
$dt=$row['date'];
$fdesc=$row['fdesc'];
$adesc=$row['descripton'];
$iau=$row['iau'];
$nau=$row['nau'];
$mau=$row['mau'];
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
    <link rel="stylesheet" href="../css/view.min.css">
    <link rel="stylesheet" href="<?=$serv?>node_modules/loaders.css/loaders.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower|Josefin+Slab|Old+Standard+TT|Open+Sans+Condensed:300">
    <script type="text/javascript" src="<?=$serv?>node_modules/jquery/dist/jquery.js"></script>
  </head>
  <body class="page-overview">
    <div class="loader-c">
      <div class="loader">
        <div class="ball-scale-multiple"></div>
      </div>
    </div>
    <article class="container">
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
        <h3><?=$tl?></h3>
        <p>Por&nbsp;<span class='auth'><?=$au?></span>&nbsp;&mdash;&nbsp;<?=$dt?></p>
      </div>
      <div class="all-body">
        <div class="main-content">
          <div class="body">
            <div class="img-container"><img data-original="data:image/png;base64,<?php echo base64_encode($row['img']);?>" class="lazy"></div>
            <div class="fast-description">
              <p><?=$fdesc?></p>
            </div>
            <h3><?=$tl?></h3>
            <div><?=$adesc?></div>
          </div>
          <div class="author-f">   
            <div class="img-c"><img data-original="<?=$imgau?>" class="lazy"></div>
            <div class="inf-c"><span class="nau"><a href="<?=$nau?>"><?=$nau?><br></a></span>
              <p><?=$iau?></p>
              <p class="tt"><a href="<?=$mau?>"><?=$mau?>&nbsp;&mdash;&nbsp;</a></p>
            </div>
          </div>
          <div class="last-art">
            <div class="row"><?php
               $query="SELECT * FROM tnotes ORDER BY date DESC LIMIT 0, 3";
               $do = $tconexion->query($query);
              ?><?php while($row=$do->fetch_assoc()){ ?>
              <div class="columns four samehw">
                <figure class="rr">
                  <div class="img-cc"><img data-original="data:image/png;base64,<?php echo base64_encode($row['img']);?>" class="lazy"></div>
                  <figcaption><?php echo $row['title'];?></figcaption><a href="<?php echo $row['lnk'];?>" title="<?php echo $row['title'];?>"></a>
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
            <noscript>
              Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
              
            </noscript>
          </div>
        </div>
        <div class="second-content">
          <div class="publc"></div>
          <div class="notes">
            <div class="row"><?php
               $quer="SELECT * FROM tnotes ORDER BY date DESC LIMIT 0, 3";
               $doo = $tconexion->query($quer);
              ?><?php while($row=$doo->fetch_assoc()){ ?>
              <figure class="rr">
                <div class="img-scc"><img src="data:image/png;base64,<?php echo base64_encode($row['img']);?>"></div>
                <figcaption><?php echo $row['title'];?></figcaption><a href="../notes/<?php echo $row['lnk'];?>" title="<?php echo $row['title'];?>"></a>
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