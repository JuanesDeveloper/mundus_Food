<?php

class CarritoModel
{

    private $id_carrito;
    private $producto;
    private $precio;
    private $cantidad;
    private $total;
    
    

    public function __construct($objDtoCarrito)
    {

        $this->id_carrito =  $objDtoCarrito->getId_carrito();
        $this->producto =  $objDtoCarrito->getProducto(); //Esto manipula la informacion del DTO
        $this->precio = $objDtoCarrito->getPrecio();
        $this->cantidad = $objDtoCarrito->getCantidad();
        $this->total = $objDtoCarrito->getTotal();
        
        
    }


    public function crearCarrito()
    {
        $sql = "CALL PCrearCarrito(?, ? , ? , ? )"; //Llamar los procedimientos almacenados en sql P=Procedimiento almacendao
        $validacion = false;

        try {
            $objConection = new Conexion(); //LLAMAR LA CONEXION

            $stmt  = $objConection->get_connect()->prepare($sql);
            $stmt->bindParam(1, $this->producto, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->precio, PDO::PARAM_INT); //enviar parametros 
            $stmt->bindParam(3, $this->cantidad, PDO::PARAM_INT);
            $stmt->bindParam(4, $this->total, PDO::PARAM_INT);
            $validacion = $stmt->execute();
        } catch (PDOException $e) //Extension para acceder a la base de datos (valida si se creo o no el usuario)
        {
            echo " Error al crear la reserva" . $e->getMessage();
        }

        return $validacion;
    }

    public function mostrarCarrito()
    {
        $estado = false;
        $sql = 'CALL PMostrarCarrito()';
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