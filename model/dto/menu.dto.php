<?php

class Menu
{
    private $id_plato;
    private $nombre_plato;
    private $descripcion;
    private $precio;

    public function getId_plato()
    {
        return $this -> id_plato;//Recibe parametro de id_usuario
    }

    public function getNombre_plato()
    {
        return $this -> nombre_plato; //Recibe parametro de el nombre de usuario del usuario
    }

    public function getDescripcion()
    {
        return $this -> descripcion; //Recibe parametro de el apellido ingresado por el usuario
    }

    public function getPrecio()
    {
        return $this -> precio; //Recibe parametro de el correo electronico puesto por el usuario
    }



    public function setId_Plato($id_plato)
    {
        $this -> id_plato = $id_plato;
    }

    public function setNombre_plato($nombre_plato)
    {
        $this -> nombre_plato = $nombre_plato;
    }

    public function setDescripcion($descripcion)
    {
        $this -> descripcion = $descripcion;
    }

    public function setPrecio($precio)
    {
        $this -> precio = $precio ;
    }

}




?>