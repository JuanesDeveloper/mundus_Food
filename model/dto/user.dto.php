<?php 

class User
{
    private $id_usuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $contraseña;
    
    public function getId()
    {
        return $this -> id_usuario;//Recibe parametro de id_usuario
    }

    public function getNombre()
    {
        return $this -> nombre; //Recibe parametro de el nombre de usuario del usuario
    }

    public function getApellido()
    {
        return $this -> apellido; //Recibe parametro de el apellido ingresado por el usuario
    }

    public function getCorreo()
    {
        return $this -> correo; //Recibe parametro de el correo electronico puesto por el usuario
    }

    public function getTelefono()
    {
        return $this -> telefono; //Recibe parametro de numero telefonico que ponga el usuario
    }

    public function getContraseña()
    {
        return $this -> contraseña; //Recibe parametro de la contraseña que cree el usuario
    } 
    
    public function setId($id_usuario)
    {
        $this -> id_usuario = $id_usuario;
    }

    public function setNombre($nombre)
    {
        $this -> nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this -> apellido = $apellido;
    }

    public function setCorreo($correo)
    {
        $this -> correo = $correo;
    }

    public function setTelefono($telefono)
    {
        $this -> telefono = $telefono;
    }

    public function setContraseña($contraseña)
    {
        $this -> contraseña = $contraseña;
    }

    
}




?>