<?php



require_once($_SERVER['DOCUMENT_ROOT'] . "/primer-sistema/config.php");

if(!isset($_SESSION)){
    session_start();
}else{
    session_regenerate_id();
}

if(isset($_GET['logout']) && $_GET['logout'] == true){
    unset($_SESSION['user']);
}

// al ejecutarse siempre el index todo lo que se incluya aca se puede usar en todos lados.

if (isset($_GET['view']) && isset($_SESSION['user']) && $_GET['view'] != "") {
    include_once 'controlador/' . $_GET['view'] . '-controlador.php';
} else {
    include_once 'controlador/principal-controlador.php';
}