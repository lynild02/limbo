<?php include 'm-config.php';
  if(isset($_POST['send'])){
    $data = json_decode(file_get_contents("php://input"));
    $title = $_POST['title'];
    $table = $_POST['table'];
    $desc = $_POST['description'];
    $img = $_POST['img'];
    $date = $_POST['date'];
    $nau = $_POST['nau'];
    $iau = $_POST['iau'];
    $body = addslashes(file_get_contents($_FILES['body']['tmp_name']));
    $query="INSERT INTO $table VALUES(null,'$title','$img','$date','$nau','$iau','$desc','$body',null)";
    $write=$tconexion->query($query);
    $im=$tconexion->query("SELECT MAX(id) AS id FROM $table");
    $row = $im->fetch_row();
    $id = trim($row[0]);
    $link = "view.php?id=$id";
    $query="UPDATE $table SET lnk = '$link' WHERE id = $id";
    $tconexion->query($query);
    echo "Hecho!";
  }
?>
