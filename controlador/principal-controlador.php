<?php

include_once(VISTA . "principal-vista.php");


include_once(MODELO . "operador-modelo.php");

$ope = new operador();

$ope->setNombre('tiago123');
$ope->setApellido('tiago123');
$ope->setDni('tiago123');
$ope->setTelefono('123123');
$ope->setpass('tiago123');
$ope->setEmail('tiago123');

$ope->nuevoOperador();