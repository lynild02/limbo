<?php
  $server = 'localhost:3306';
  $user = 'limbocit_webmast';
  $pass = 'gVF-cR6-sp2-eSx';
  $db = 'limbocit_development';
  $conexion = new mysqli($server, $user, $pass, $db);
  $conexion->set_charset('utf8');
  $serv='https://limbocity.xyz/';

  function evaluar($valor)
  {
  	$nopermitido = array("'",'\\','<','>',"\"");
  	$valor = str_replace($nopermitido, "", $valor);
  	return $valor;
  }
?>
