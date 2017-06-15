<?php include 'm-config.php'; header("X-XSS-Protection: 0");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Item</title>
    <link rel='stylesheet', href!='<?=$serv?>Skeleton/css/normalize.css'/>
    <link rel='stylesheet', href!='<?=$serv?>Skeleton/css/skeleton.css'/>
  </head>
  <body>
    <article class="container">
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
          $table = 'hentai';
          //Print
          echo $type . '<br><br>';
          echo $title . '<br><br>';
          echo $desc . '<br><br>';
          echo '<img src="' . $img . '"/><br><br>';
          echo $chap1 . '<br>';
          echo $chap2 . '<br>';
          echo $chap3 . '<br>';
          echo $chap4 . '<br>';
          echo $chap5 . '<br>';
          echo $chap6 . '<br>';
          echo $table . '<br>';
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
              echo "Done!";
              $conexion2->close();
            }
          } else {
            echo 'No mms!';
          }
        };
      ?>
    </article>
  </body>
</html>
