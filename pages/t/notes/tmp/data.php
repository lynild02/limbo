<?php
include 'm-config.php';
$id  = evaluar($_GET['id']);
$cdb  = $tconexion->query("SELECT * FROM tnotes WHERE id=$id");
$row = $cdb->fetch_assoc();
$fbody = $row['id'];
  echo $fbody;
?>
