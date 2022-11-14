<?php
    if(session_status() == 1) session_start();
    require_once("./models/usuario.php");
    class sesion_controler{
        public static function login(){
            if($_POST){
                if(!isset($_POST["token"]) || !seg::validarsession($_POST["token"])){
                    echo "Acceso Restringido";
                    exit();
                }

                $obj = new usuario($_POST["user"],$_POST["pass"],"","");
                $result = $obj->validar_user();
                if(count($result)>0){
                    $_SESSION["user"] = $result["user"];
                    $_SESSION["nombre"] = $result["nombre"];
                    if(isset($_POST["chkrecordar"])){
                        setcookie("user", seg::codificar($result["user"]), time()+60);
                        setcookie("nombre", seg::codificar($result["nombre"]), time()+60);
                    }
                    require_once("views/templates/navbar.php");
                    require_once("views/templates/header.php");
                    require_once("views/index.php");
                } else {
                    header("location:index.php?C=".seg::codificar("pagprincipal")."&M=".seg::codificar("index")."&msg=UsuarioOrcontrasena incorrecta");
                }
            }
        }

    public static function cerrar(){
            session_destroy();
            setcookie("user", seg::codificar($_SESSION["user"]), time()-60);
            setcookie("nombre", seg::codificar($_SESSION["nombre"]), time()-60);
            header("location:index.php");
        }
    }
?>