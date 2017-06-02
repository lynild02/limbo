<?php
  $server = 'localhost:3306';
  $user = 'limbocit_webmast';
  $pass = 'gVF-cR6-sp2-eSx';
  $db = 'limbocit_development';

  $conexion = new mysqli($server, $user, $pass, $db);
  $conexion->set_charset('utf8');
  if ($conexion->connect_errno) {
  	echo "An error has ocurred while try to connect with the DB {$conexion->connect_errno}";
  }

  $serv='http://limbocity.xyz/';

  function evaluar($valor)
  {
  	$nopermitido = array("'",'\\','<','>',"\"");
  	$valor = str_replace($nopermitido, "", $valor);
  	return $valor;
  }
?>
