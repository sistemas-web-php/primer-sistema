<?php

include_once(MODELO . "operador-modelo.php");

$operador = new operador();

if(count($_POST) > 0){

    $operador->setNombre($_POST['nombre']);
    $operador->setApellido($_POST['apellido']);
    $operador->setEmail($_POST['email']);
    $operador->setDni($_POST['dni']);
    $operador->setPass($_POST['pass']);
    $operador->setTelefono($_POST['telefono']);
    $operador->setFecha_ingreso(date('Y-m-d'));
    $operador->setVisibilidad(1);
    $operador->setDireccion($_POST['direccion']);
    $operador->setLogin(0);

    $resultado = $operador->nuevoOperador();

}

    $array_operadores = $operador->getOperadores();

    include_once(VISTA . 'operadores-vista.php'); 