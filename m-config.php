<?php
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $tdb = 'tutoriales';
  $pdb = 'Development';
  $tconexion = new mysqli($server, $user, $pass, $tdb);
  $tconexion->set_charset('utf8');
  $conexion = new mysqli($server, $user, $pass, $pdb);
  if ($tconexion->connect_errno) {
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
