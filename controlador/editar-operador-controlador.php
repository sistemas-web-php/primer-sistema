<?php 




    include_once(MODELO . "operador-modelo.php");

    $operador = new operador();

    $operador->getOperadorXId();
  
    include_once(VISTA . 'editar-operadores-vista.php'); 
?>