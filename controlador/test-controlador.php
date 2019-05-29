<?php

include_once(MODELO . "operador-modelo.php");

$opera = new operador();

$arrayList = $opera->test();

echo $arrayList[1]->getApellido();