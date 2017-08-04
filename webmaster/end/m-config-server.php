<?php
  $server = 'localhost:3306';
  $user = 'limbocit_webmast';
  $pass = 'gVF-cR6-sp2-eSx';
  $db = 'limbocit_tutoriales';
  $db2 = 'limbocit_x3';
  $conexion = new mysqli($server, $user, $pass, $db);
  $conexion2 = new mysqli($server, $user, $pass, $db2);
  $conexion->set_charset('utf8');
  $conexion2->set_charset('utf8');
  if ($conexion->connect_errno) {
  	echo "An error has ocurred while try to connect with the DB {$conexion->connect_errno}";
  }
  $serv='https://limbocity.xyz/';
?>
