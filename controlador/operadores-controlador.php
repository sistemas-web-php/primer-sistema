<?php 

    include_once(MODELO . "operador-modelo.php");

    $operador = new operador();

    $array_operadores = $operador->getOperadores();

    include_once(VISTA . 'operadores-vista.php'); 
  
?>