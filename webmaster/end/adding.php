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
          $title = $_POST['title'];
          $img = $_POST['img'];
          $date = $_POST['date'];
          $nau = $_POST['nau'];
          $iau = $_POST['iau'];
          $desc = $_POST['description'];
          $body = addslashes(file_get_contents($_FILES['body']['tmp_name']));
          $type = $_POST['type'];

          //Print
          echo $title . '<br><br>';
          echo '<img src="' . $img . '"/><br><br>';
          echo $date . '<br><br>';
          echo $nau . '<br><br>';
          echo $iau . '<br><br>';
          echo $desc . '<br><br>';
          echo $type . '<br>';
          //Insert
          $sql = "INSERT INTO tnotes (title, img, date, nau, iau, description, body, type) VALUES ('$title', '$img', '$date', '$nau', '$iau', '$desc', '$body', '$type')";
          $do = $conexion->query($sql);
          if($do){
            $im = $conexion->query("SELECT MAX(id) AS id FROM tnotes");
            $row = $im->fetch_row();
            $id = trim($row[0]);
            $link = "view.php?id=$id";
            $query2="UPDATE tnotes SET lnk = '$link' WHERE id = $id";
            $doo = $conexion->query($query2);
            if($doo){
              echo "Done!";
              $conexion->close();
            }
          } else {
            echo 'No mms!';
          }
        };
      ?>
    </article>
  </body>
</html>
