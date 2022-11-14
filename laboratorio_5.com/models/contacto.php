<?php 

    class contacto {

        private $nombre;
        private $numero;
        private $correo;
        private $fechanacimiento;
        private $genero;
        private $ecivil;

        public function __construct($nombre, $numero, $correo, $fechanacimiento, $genero, $ecivil){
            $this->nombre = $nombre;
            $this->numero = $numero;
            $this->correo = $correo;
            $this->fechanacimiento = $fechanacimiento;
            $this->genero = $genero;
            $this->ecivil = $ecivil;

        }

        public function getDatos(){
            return ["nombre"=>$this->nombre, "numero"=>$this->numero, "correo"=>$this->correo, "fechanacimiento"=>$this->fechanacimiento, "genero"=>$this->genero, "ecivil"=>$this->ecivil];
        }

    }

?>