<?php  

class Conexion 
{
    private $host;  //  Donde esta localizado el proyecto
    private $drive; //  Tipo de Base de Datos
    private $base;  //  Nombre de la base de datos
    private $user;  //  Nombre de Usuario
    private $pass;  //  Contraseña
    private $url;   // Fusion de todos los datos anteriores, asi el programa encuentra la base de datos
    private $charset; // UTF-8

    public function __construct ()
    {
        $this -> host   = "localhost"; // Estamos llamando todas las variables globales, el host es localhost, al ser un proyecto local
        $this -> drive  = "mysql";   //Este es el tipo de base de datos
        $this -> base   = "restaurantedb"; // Aqui va el nombre de la base de datos
        $this -> user   = "root"; //Nombre de usuario
        $this -> pass   = ""; //Contraseña del usuario
        $this -> url    = $this -> drive . ":host=" //Url tiene asignado los datos de drive, host y base
                        . $this -> host . ";dbname=" 
                        . $this -> base;
        $this -> charset="UTF8";
    }


    public function get_connect ()
    {

        try 
        {
            $conect = new PDO($this -> url, $this-> user, $this-> pass);
            echo "Conectado Exitosamente";
        }
        catch(Exception $e) 
        {
           echo "Error al Conectarme" . $e->getMessage();
           

        }

        return $conect; 
    }
}

  

?>