<?php

class CarritoController{


    public function SetCrearCarrito($producto,$precio, $cantidad, $total){

        try 
        {
            $objDtoCarrito = new Carrito(); //llamando al DTO 
            $objDtoCarrito -> setProducto($producto);
            $objDtoCarrito -> setPrecio($precio);
            $objDtoCarrito -> setCantidad($cantidad);
            $objDtoCarrito -> setTotal($total);
            

            $objDaoCarrito = new CarritoModel($objDtoCarrito); //Enviando informacion al dao
            
            if ($objDaoCarrito -> crearCarrito()){ //Valida confirmacion de creacion de usuario
                echo "<script>
                Swal.fire(
                    'Guardado',
                    'Compra insertada',
                    'success'
                  )
                </script>";

            }
        }
        catch(Exception $e)
        {
            echo "Error al crear Reservar " . $e->getMessage();
        }
    }

    public function mostrarCarrito()
    {
        $respuesta = false;
        try
        {
          $objDtoCarrito = new Carrito();
          $objDaoCarrito = new CarritoModel($objDtoCarrito);
          $respuesta = $objDaoCarrito -> mostrarCarrito()->fetchAll();
        }

        catch(PDOException $e)
        {
          
            echo "Hubo Un Error Al Ingresar ". $e -> getMessage();

        }

        return  $respuesta;

    }
}
?>