<?php
    require_once("utils/seg.php");
    class pagprincipal_controler {
        public static function index() {
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            if(isset($_COOKIE["user"])){
            $_SESSION["user"] = seg::decodificar($_COOKIE["user"]);
            $_SESSION["nombre"] = seg::decodificar($_COOKIE["nombre"]);
            }
            require_once("views/templates/navbar.php");
            require_once("views/templates/header.php");
            require_once("views/formulario.php");
            
        }
    }
?>