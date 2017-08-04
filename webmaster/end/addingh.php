<?php include 'm-config.php'; header("X-XSS-Protection: 0");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Erotic Item</title>
    <link rel='stylesheet', href='<?=$serv?>Skeleton/css/normalize.css'/>
    <link rel='stylesheet', href='<?=$serv?>Skeleton/css/skeleton.css'/>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '441144079589506',
          xfbml      : true,
          version    : 'v2.10'
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
  </head>
  <body>
    <article class="container">
      <div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
      <?php
        if(isset($_POST['send'])){
          if($conexion2){echo 'Conexion Establecida<br><br>';}
          $type = $_POST['type'];
          $title = $_POST['title'];
          $desc = $_POST['description'];
          $img = $_POST['img'];
          $chap1 = $_POST['chap1'];
          $chap2 = $_POST['chap2'];
          $chap3 = $_POST['chap3'];
          $chap4 = $_POST['chap4'];
          $chap5 = $_POST['chap5'];
          $chap6 = $_POST['chap6'];
          //Print
          echo '<h3>Clase de item añadido:&nbsp;<span style="color: red; font-size: .8em; text-transform: uppercase;">' . $type . '</span></h3>';
          echo '<h4>Titulo:&nbsp' . $title . '</h4>';
          echo '<div class="contenedor-desc" style="position: relative; width: 100%; min-height: 250px; padding: 0px; border: solid 1px black;">';
          echo '<img style="width: 150px; height: 250px; margin: 0px; margin-right: 5px; float: left; display: inline-block;" src="' . $img . '"/>';
          echo '<p style="float: left; margin-left: 5px; display: inline-block;">' . $desc . '</p>';
          echo '</div>';
          echo '<div class="container-frames" style="padding: 10px; margin: 0px; display: block; text-align: center;">';
          echo $chap1 . '<br>';
          echo $chap2 . '<br>';
          echo $chap3 . '<br>';
          echo $chap4 . '<br>';
          echo $chap5 . '<br>';
          echo $chap6 . '<br>';
          echo '</div>';
          //Insert
          $sql = "INSERT INTO hentai (title, img, chapter1, chapter2, chapter3, chapter4, chapter5, chapter6, type, sinopsis) VALUES ('$title', '$img', '$chap1', '$chap2', '$chap3', '$chap4', '$chap5', '$chap6', '$type', '$desc')";
          $do = $conexion2->query($sql);
          if($do){
            $im = $conexion2->query("SELECT MAX(id) AS id FROM hentai");
            $row = $im->fetch_row();
            $id = trim($row[0]);
            $link = "view.php?id=$id";
            $query2="UPDATE hentai SET lnk = '$link' WHERE id = $id";
            $doo = $conexion2->query($query2);
            if($doo){
              echo "<p>Done!<br></p>";
              echo '<div class="fb-share-button" data-href!="https://heaven-night.com/tmp/' . $link . '" data-layout="button_count"></div>';
              $conexion2->close();
            }
          } else {
            echo 'No mms!';
          }
        };
      ?>
      <a class='button-primary' href='https://webmaster.limbocity.xyz/#!/addf'>REGRESAR</a>
    </article>
  </body>
</html>
