<?php

class ReservaController{


    public function setCrearReserva($id_usuario,$mesa, $cant_personas, $fecha, $hora){

        try 
        {
            $objDtoReserva = new Reserva(); //llamando al DTO 
            $objDtoReserva -> setId_Usuario($id_usuario);
            $objDtoReserva -> setMesa($mesa);
            $objDtoReserva -> setCant_personas($cant_personas);
            $objDtoReserva -> setFecha($fecha);
            $objDtoReserva -> setHora($hora);
            

            $objDaoReserva = new ReservaModel($objDtoReserva); //Enviando informacion al dao
            
            if ($objDaoReserva -> crearReserva()){ //Valida confirmacion de creacion de usuario
                echo "<script>
                Swal.fire(
                    'Guardado',
                    'Reserba insertada',
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
}
?>