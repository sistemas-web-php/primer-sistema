<?php 

    include_once(MODELO . "operador-modelo.php");

  if ($_POST) {
    $nuevo_operador = new operador();

    $nuevo_operador->setNombre($_POST['nombre']);
    $nuevo_operador->setApellido($post['apellido']);
    $nuevo_operador->setDireccion($post['direccion']);
    $nuevo_operador->setDni($post['dni']);
    $nuevo_operador->setTelefono($post['telefono']);
    $nuevo_operador->setEmail('email');

  } else {
    # code...
  }
  

    $operador = new operador();

    $array_operadores = $operador->getOperadores();

    include_once(VISTA . 'operadores-vista.php'); 
  
?>