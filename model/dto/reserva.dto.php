<?php 

class Reserva
{
    private $id_usuario;
    private $id_reserva;
    private $cant_personas;
    private $mesa;
    private $fecha;
    private $hora;
    
    public function getId_reserva()
    {
        return $this -> id_reserva;//Recibe parametro de id_usuario
    }

    public function getId_Usuario($id_usuario)
    {
        $this -> id_usuario= $id_usuario;
    }

    public function getCant_personas()
    {
        return $this -> cant_personas; //Recibe parametro de el nombre de usuario del usuario
    }

    public function getMesa()
    {
        return $this -> mesa; //Recibe parametro de el apellido ingresado por el usuario
    }

    public function getFecha()
    {
        return $this -> fecha; //Recibe parametro de el apellido ingresado por el usuario
    }

    public function getHora()
    {
        return $this -> hora; //Recibe parametro de el correo electronico puesto por el usuario
    }


    public function setId_reserva($id_reserva)
    {
        $this -> id_reserva = $id_reserva;
    }

    

    public function setId_Usuario($id_usuario)
    {
        $this -> id_usuario = $id_usuario;
    }

    public function setMesa($mesa)
    {
        $this -> mesa = $mesa;
    }

    public function setCant_personas($cant_personas)
    {
        $this -> cant_personas = $cant_personas;
    }

    public function setFecha($fecha)
    {
        $this -> fecha = $fecha;
    }

    public function setHora($hora)
    {
        $this -> hora= $hora;
    }

    

    

    
}


?>