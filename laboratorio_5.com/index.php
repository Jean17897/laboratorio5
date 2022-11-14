<?php
    if(session_status() == 1) session_start();
    require_once("utils/seg.php");
    require_once("controler/pagprincipal_controler.php");
    require_once("controler/contacto_controler.php");
    require_once("controler/sesion_controler.php");
    if(count($_GET)==0)
        call_user_func("pagprincipal_controler::index");
    else {
        $controlador = seg::decodificar($_GET["C"]);
        $metodo = seg::decodificar($_GET["M"]);
        call_user_func($controlador."_controler::".$metodo);
    }
?>