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

            if(isset($_POST['dni']) && isset($_POST['pass'])){

                include_once(MODELO . "operador-modelo.php");

                $ope = new operador();

                $ope->setDni($_POST['dni']);
                $ope->setPass($_POST['pass']);

                $ope->loginOperador();
                
            }else{
                include_once(VISTA . "principal-vista.php");
            }
            
            

        } else if($_GET['log'] == 'chofer'){
            
            include_once(MODELO . "chofer-modelo.php");

            //todo para loguear al chofer

        }
        
    }else{

        include_once(VISTA . "principal-vista.php");
    
    }
}

?>