<?php

include_once(MODELO . "autos-modelo.php");

$auto = new auto();

if(isset($_POST)){
    $auto->setMarca($_POST['marca']);
    $auto->setModelo($_POST['modelo']);
    $auto->setPatente($_POST['patente']);
    $auto->setAño_auto($_POST['año']);
    $auto->setVisibilidad(TRUE);

    $resultado = $auto->nuevoAuto();
}



$array_autos = $auto->getAutos();

include_once(VISTA . 'autos-vista.php'); 