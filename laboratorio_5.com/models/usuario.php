<?php
    class usuario {
        private $user;
        private $pass;
        private $salt;
        private $nombre;
    public function __construct($user, $pass, $salt, $nombre){
        $this->user = $user;
        $this->pass = $pass;
        $this->salt = $salt;
        $this->nombre = $nombre;
    } 
    public function validar_user(){
        $tabla[]=["user"=>"jean17", "pass"=>"e0d3ca8457acd05e161940d25c5800c2bc90daf0", "salt"=>"e1c0c06aaa687", "nombre"=>"Jean Paul"];
        $tabla[]=["user"=>"paul17", "pass"=>"12345", "salt"=>"", "nombre"=>"Jean Paul"];
        foreach($tabla as $t){
            $password = sha1($this->pass.$t["salt"]);
            if($this->user == $t["user"] && $password == $t["pass"])
                return $t;
        }
        return [];

    }

    }
?>