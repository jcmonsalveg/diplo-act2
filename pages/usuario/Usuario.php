<?php

include_once('../../config/config.php');
include('../../config/Database.php');


class Usuario
{
    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }


    function save($params)
    {
        $usuario = $params['usuario'];
        $contrasena = $params['contrasena'];
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $servicio = $params['servicio'];
        $estado = "Registrado";

        $insert = " INSERT INTO usuarios VALUES (null,'$usuario', '$contrasena', ' $nombres', '$apellidos', '$email', '$celular', '$servicio','$estado')";

        return mysqli_query($this->conexion, $insert);

    }

    function findAll(){

        $sql = " SELECT * FROM  usuarios";
        return mysqli_query($this->conexion, $sql);
    }



}


?>