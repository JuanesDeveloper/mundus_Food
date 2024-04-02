<?php

class UserModel
{

    private $id_usuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $contrasena;

    public function __construct($objDtoUser)
    {

        $this->id_usuario =  $objDtoUser->getId(); //Esto manipula la informacion del DTO
        $this->nombre =      $objDtoUser->getNombre();
        $this->apellido =    $objDtoUser->getApellido();
        $this->correo =      $objDtoUser->getCorreo();
        $this->telefono =    $objDtoUser->getTelefono();
        $this->contrasena =  $objDtoUser->getContraseña();
    }

    public function  getLogin() //recibe la info de la base de datos
    {

        $sql = "SELECT * FROM Usuario WHERE nombre = ? AND contraseña = ?";
        try {

            $objConection = new Conexion();

            $stmt  = $objConection->get_connect()->prepare($sql); //va recibir todos los datos
            $stmt->bindParam(1, $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->contrasena, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt;
        } catch (Exception $e) {

            echo " Error Al Iniciar Sesion" . $e->getMessage();
        }

        return $resultado;
    }

    public function crearUsuario()
    {
        $sql = "CALL PCrearUsuario(?, ? , ? , ? ,?)"; //Llamar los procedimientos almacenados en sql
        $validacion = false;

        try {
            $objConection = new Conexion(); //LLAMAR LA CONEXION

            $stmt  = $objConection->get_connect()->prepare($sql);
            $stmt->bindParam(1, $this->nombre, PDO::PARAM_STR); //enviar parametros 
            $stmt->bindParam(2, $this->apellido, PDO::PARAM_STR);
            $stmt->bindParam(3, $this->correo, PDO::PARAM_STR);
            $stmt->bindParam(4, $this->contrasena, PDO::PARAM_STR);
            $stmt->bindParam(5, $this->telefono, PDO::PARAM_INT);
            $validacion = $stmt->execute();
        } catch (PDOException $e) //Extension para acceder a la base de datos (valida si se creo o no el usuario)
        {
            echo " Error al crear el usuario" . $e->getMessage();
        }

        return $validacion;
    }
}