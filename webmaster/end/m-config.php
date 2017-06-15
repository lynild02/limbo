<?php
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'tutoriales';
  $db2 = 'x3';
  $conexion = new mysqli($server, $user, $pass, $db);
  $conexion2 = new mysqli($server, $user, $pass, $db2);
  $conexion->set_charset('utf8');
  if ($conexion->connect_errno) {
  	echo "An error has ocurred while try to connect with the DB {$conexion->connect_errno}";
  }
  $serv='/projects/limbocity/';

  function evaluar($valor)
  {
  	$nopermitido = array("'",'\\','<','>',"\"");
  	$valor = str_replace($nopermitido, "", $valor);
  	return $valor;
  }
?>
