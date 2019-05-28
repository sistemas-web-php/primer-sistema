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

                $dni = $_POST['dni'];
                $pass = $_POST['pass'];

                if ($dni != "" && $pass != "") {
                    if (is_int($pass)) {

                        $ope->setDni($dni);
                        $ope->setPass($pass);

                        $login = $ope->loginOperador();

                        if(!$login){

                            header("location:" . WEB . "?err=1");
                        
                        }else{

                            header("location:" . WEB);

                        }
                    } else {
                        header("location:" . WEB . "?err=1");
                    }
                    
                } else {
                    header("location:" . WEB . "?err=1");
                }
                

                $ope->setDni($_POST['dni']);
                $ope->setPass($_POST['pass']);

                $login = $ope->loginOperador();

                if(!$login){

                    header("location:" . WEB . "?err=1");
                
                }else{

                    header("location:" . WEB . "principal-operador-vista.php");

                }

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