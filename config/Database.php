<?php

class Database{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = 'admin';
    public $db = 'bjsoftware';
    public $conexion;

    function connectToDatabase(){
        $this->conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if (mysqli_connect_error()){
            echo 'Error de conexion '.mysqli_connect_error();

        }

        return $this->conexion;
    }
}



?>