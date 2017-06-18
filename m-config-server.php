<?php
  $server = 'localhost:3306';
  $user = 'limbocit_webmast';
  $pass = 'gVF-cR6-sp2-eSx';
  $db = 'limbocit_tutoriales';
  $pdb = 'limbocit_development';
  $tconexion = new mysqli($server, $user, $pass, $db);
  $tconexion->set_charset('utf8');
  if ($tconexion->connect_errno) {
  	echo "An error has ocurred while try to connect with the DB {$conexion->connect_errno}";
  }
  $conexion = new mysqli($server, $user, $pass, $pdb);
  $conexion->set_charset('utf8');
  $serv='http://limbocity.xyz/';

  function evaluar($valor)
  {
  	$nopermitido = array("'",'\\','<','>',"\"");
  	$valor = str_replace($nopermitido, "", $valor);
  	return $valor;
  }
?>
