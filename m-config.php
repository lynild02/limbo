<?php
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'Development';

  $conexion = new mysqli($server, $user, $pass, $db);
  $conexion->set_charset('utf8');
  if ($conexion->connect_errno) {
  	echo "An error has ocurred while try to connect with the DB {$conexion->connect_errno}";
  }

  $serv='/projects/limbocity/';
?>
