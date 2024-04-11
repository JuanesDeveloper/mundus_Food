<?php 

class Carrito
{
    private $id_carrito;
    private $producto;
    private $precio;
    private $cantidad;
    private $total;
   
    
    public function getId_carrito()
    {
        return $this -> id_carrito;//Recibe parametro de id_usuario
    }

    public function getProducto()
    {
        return $this -> producto; //Recibe parametro de el nombre de usuario del usuario
    }

    public function getPrecio()
    {
        return $this -> precio; //Recibe parametro de el apellido ingresado por el usuario
    }

    public function getCantidad()
    {
        return $this -> cantidad; //Recibe parametro de el correo electronico puesto por el usuario
    }

    public function getTotal()
    {
        return $this -> total; //Recibe parametro de numero telefonico que ponga el usuario
    }


    public function setId_carrito($id_carrito)
    {
        $this -> id_carrito = $id_carrito;
    }

    public function setProducto($producto)
    {
        $this -> producto = $producto;
    }

    public function setPrecio($precio)
    {
        $this -> precio = $precio;
    }

    public function setCantidad($cantidad)
    {
        $this -> cantidad = $cantidad ;
    }

    public function setTotal($total)
    {
        $this -> total = $total;
    }

}




?>