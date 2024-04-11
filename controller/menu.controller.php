<?php

class MenuController{


    public function SetCrearMenu($id_plato, $nombre_plato,$descripcion,$precio){

        try 
        {
            $objDtoMenu = new Menu(); //llamando al DTO 
            $objDtoMenu -> setId_Plato($id_plato);
            $objDtoMenu -> setNombre_plato($nombre_plato);
            $objDtoMenu -> setDescripcion($descripcion);
            $objDtoMenu -> setPrecio($precio);
            

            $objDaomenu = new MenuModel($objDtoMenu); //Enviando informacion al dao
            
            if ($objDaomenu -> crearMenu()){
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

    public function mostrarMenu()
    {
        $respuesta = false;
        try
        {
          $objDtoCarrito = new Menu();
          $objDaoCarrito = new MenuModel($objDtoCarrito);
          $respuesta = $objDaoCarrito -> mostrarMenu()->fetchAll();
        }

        catch(PDOException $e)
        {
          
            echo "Hubo Un Error Al Ingresar ". $e -> getMessage();

        }

        return  $respuesta;

    }
}
?>