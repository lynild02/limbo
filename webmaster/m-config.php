<?php
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'Development';
  $tdb = 'tutoriales';
  $wbm = 'webmaster';
  $conexion = new mysqli($server, $user, $pass, $db);
  $tconexion = new mysqli($server, $user, $pass, $tdb);
  $wconexion = new mysqli($server, $user, $pass, $wbm);
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
