<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/primer-sistema/config.php");

include_once(MODELO . 'autos-modelo.php');

$auto = new auto();

$resultado = $auto->buscarAuto('fiat');

echo json_encode($resultado);