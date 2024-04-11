<?php

class MenuModel
{

    private $id_plato;
    private $nombre_plato;
    private $descripcion;
    private $precio;


    public function __construct($objDtoMenu)
    {

        $this->id_plato =  $objDtoMenu->getId_plato(); //Esto manipula la informacion del DTO
        $this->nombre_plato =      $objDtoMenu->getNombre_plato();
        $this->descripcion =    $objDtoMenu->getDescripcion();
        $this->precio =      $objDtoMenu->getPrecio();
    }


    public function crearMenu()
    {

        $sql = "CALL PCrearMenu(?, ? , ? )"; //Llamar los procedimientos almacenados en sql
        $validacion = false;

        try {
            $objConection = new Conexion(); //LLAMAR LA CONEXION

            $stmt  = $objConection->get_connect()->prepare($sql);
            $stmt->bindParam(1, $this->nombre_plato, PDO::PARAM_STR); //enviar parametros 
            $stmt->bindParam(2, $this->descripcion, PDO::PARAM_STR);
            $stmt->bindParam(3, $this->precio, PDO::PARAM_INT);

            $validacion = $stmt->execute();
        } catch (PDOException $e) //Extension para acceder a la base de datos (valida si se creo o no el usuario)
        {
            echo " Error al crear el usuario" . $e->getMessage();
        }

        return $validacion;
    }

    public function mostrarMenu()
    {
        $estado = false;
        $sql = 'CALL PMostrarMenu()';
        try
        {
          $objConection = new Conexion();
          $stmt = $objConection -> get_connect() -> prepare($sql);
          $stmt -> execute();
          $estado = $stmt;

        }

        catch(PDOException $e)
        {
           echo "Hubo Un Error Al Ingresar ". $e -> getMessage();
        }

        return $estado;
    }
}
