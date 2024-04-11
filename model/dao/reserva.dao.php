<?php

class ReservaModel
{

    private $id_usuario;
    private $id_reserva;
    private $cant_personas;
    private $mesa;
    private $fecha;
    private $hora;
    

    public function __construct($objDtoReserva)
    {

        $this->id_usuario =  $objDtoReserva->getId_usuario();
        $this->id_reserva =  $objDtoReserva->getId_reserva(); //Esto manipula la informacion del DTO
        $this->cant_personas = $objDtoReserva->getCant_personas();
        $this->mesa = $objDtoReserva->getMesa();
        $this->fecha = $objDtoReserva->getFecha();
        $this->hora = $objDtoReserva->getHora();
        
    }


    public function crearReserva()
    {
        $sql = "CALL PCrearReserva(?, ? , ? , ?, ? )"; //Llamar los procedimientos almacenados en sql P=Procedimiento almacendao
        $validacion = false;

        try {
            $objConection = new Conexion(); //LLAMAR LA CONEXION

            $stmt  = $objConection->get_connect()->prepare($sql);
            $stmt->bindParam(1, $this->id_usuario, PDO::PARAM_INT);
            $stmt->bindParam(2, $this->mesa, PDO::PARAM_INT); //enviar parametros 
            $stmt->bindParam(3, $this->cant_personas, PDO::PARAM_INT);
            $stmt->bindParam(4, $this->fecha, PDO::PARAM_STR);
            $stmt->bindParam(5, $this->hora, PDO::PARAM_STR);
            $validacion = $stmt->execute();
        } catch (PDOException $e) //Extension para acceder a la base de datos (valida si se creo o no el usuario)
        {
            echo " Error al crear la reserva" . $e->getMessage();
        }

        return $validacion;
    }
}
?>