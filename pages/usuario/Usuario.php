<?php

include_once('./config/config.php');
include('./config/Database.php');


class Usuario{
    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }


    function save($params){
        $usuario = $params['usuario'];
        $contrasena = $params['contrasena'];
        $nombres = $params['nombres'];
        $apellidos = $params['apellido'];
        $email = $params['email'];    
        
        $insert = " INSERT INTO usuarios VALUES (NULL, '$usuario', '$contrasena', ' $nombres', '$apellidos', '$email')";

        return mysqli_query($this->conexion, $insert);
        
    }



}


?>