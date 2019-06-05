<?php 

    include_once(MODELO . "chofer-modelo.php");
/*
    $operador = new operador();

    if (count($_POST) > 0) {
        if($_POST['visibilidad'] == 'true'){
            $visibilidad = TRUE;
        }else{
            $visibilidad = FALSE;   
        }
        $operador->setNombre($_POST['nombre']);
        $operador->setApellido($_POST['apellido']);
        $operador->setTelefono($_POST['telefono']);
        $operador->setEmail($_POST['email']);
        $operador->setDireccion($_POST['direccion']);
        $operador->setDni($_POST['dni']);
        $operador->setVisibilidad($visibilidad);

        $res = $operador->actualizarOperador();

        if ($res) {
            $array_operadores = $operador->getOperadores();

            include_once(VISTA . 'operadores-vista.php'); 
        } else {
            $operador->getOperadorXId();
  
            include_once(VISTA . 'editar-operadores-vista.php');
        }
        

    } else {
        $operador->getOperadorXId();
  
        include_once(VISTA . 'editar-operadores-vista.php');
    }
*/
?>