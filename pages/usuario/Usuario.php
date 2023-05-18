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

    function findAll()
    {

        $sql = " SELECT * FROM  usuarios";
        return mysqli_query($this->conexion, $sql);
    }

    function findOne($id)
    {
        $sql = " SELECT * FROM usuarios WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params)
    {

        $id = $params['id'];
        $usuario = $params['usuario'];
        $contrasena = $params['contrasena'];
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $servicio = $params['servicio'];
        $estado = "Registrado";

        $sql = " UPDATE usuarios set usuario = '$usuario', contrasena= '$contrasena', nombres = '$nombres', apellidos='$apellidos', 
        email='$email', celular='$celular', servicio='$servicio', estado='$estado' WHERE id=$id";

        return mysqli_query($this->conexion, $sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM usuarios where id = $id";
        return mysqli_query($this->conexion, $sql);
    }

    function login($params)
    {
        $usuario = $params['usuario'];
        $contrasena = $params['contrasena'];
        $sql = "SELECT * FROM usuarios WHERE usuario= '$usuario' AND contrasena='$contrasena'";
        return mysqli_query($this->conexion, $sql);
    }

}


?>