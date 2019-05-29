<?php 

    include_once(MODELO . "autos-modelo.php");

    $auto = new auto();

    $array_autos = $auto->getAutos();

    include_once(VISTA . 'autos-vista.php'); 
  
?>