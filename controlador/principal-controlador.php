<?php

if (isset($_SESSION['user'])) {

    if ($_SESSION['user']['tipo-user'] == 'operador') {

        include_once(VISTA . 'principal-operador-vista.php');

    } else if ($_SESSION['user']['tipo-user'] == 'chofer') {

        include_once(VISTA . 'principal-chofer-vista.php');
        
    }
    
}else{

    if (isset($_GET['log'])) {

        if ($_GET['log'] == 'operador') {
            
            include_once(MODELO . "operador-modelo.php");

        } else if($_GET['log'] == 'chofer'){
            
            include_once(MODELO . "chofer-modelo.php");

        }
        
    }else{
        include_once(VISTA . "principal-vista.php");
    }
}

?>