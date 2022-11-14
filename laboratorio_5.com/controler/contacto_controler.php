<?php
    require_once("./models/contacto.php");
    class contacto_controler {

        public static function mostrar(){
        if($_POST){
            if(!isset($_POST["token"]) || !seg::validarsession($_POST["token"])){
                echo "Acceso Restringido";
                exit();
            }
            empty($_POST["txtNombre"])?$error[0]="El nombre es necesario":$nombre = $_POST["txtNombre"];
            empty($_POST["txtNumero"])?$error[1]="El numero es necesario":$numero = $_POST["txtNumero"];
            empty($_POST["txtCorreo"])?$error[2]="El correo es necesario":$correo = $_POST["txtCorreo"];
            $fechanacimiento = $_POST["txtFecha"];
            $genero = $_POST["txtGenero"];
            $ecivil = $_POST["btnradio"];

            if(isset($error)){
            require_once("views/templates/navbar.php");
            require_once("views/templates/header.php");
            require_once("views/index.php");
            }else{
            
            $nombre = filter_var($nombre, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $numero = filter_var($numero, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $correo = filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            $contacto = new contacto($nombre, $numero, $correo, $fechanacimiento, $genero, $ecivil);
            $result = $contacto->getDatos();
            require_once("views/templates/navbar.php");
            require_once("views/templates/header.php");
            require_once("views/mostrar.php");
            }
            }

        }

    }



?>