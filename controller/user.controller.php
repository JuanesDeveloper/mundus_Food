<?php

class UserController{

public function getVerifyPass( $user, $pass){

    try{
        
        $objDtoUser = new User();
        $objDtoUser -> setCorreo($user);
        $objDtoUser -> setContraseña($pass);

        $objDaoUser = new UserModel($objDtoUser);

        if (gettype($objDaoUser -> getLogin() -> fetch()) == 'boolean'){

            echo "<script>
            swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Contraseña errada!'
            })
            </script>
            ";

        }else
        {
            $_SESSION['login'] = true;
            header('location: index.php');
        }

    } catch(Exception $e){
        echo "Error on the creation of the controller" . $e->getMessage(); //va a enviar como mensaje

    }
}
    public function SetCrearUsuario($nombre, $apellido, $correo, $telefono, $contraseña){

        try 
        {
            $objDtoUser = new User(); //llamando al DTO 
            $objDtoUser -> setNombre($nombre);
            $objDtoUser -> setApellido($apellido);
            $objDtoUser -> setCorreo($correo);
            $objDtoUser -> setContraseña($contraseña);
            $objDtoUser -> setTelefono($telefono);

            $objDaoUser = new UserModel($objDtoUser); //Enviando informacion al dao
            
            if ($objDaoUser -> crearUsuario()){ //Valida confirmacion de creacion de usuario
                echo "<script>
                Swal.fire(
                    'Guardado',
                    'Registro insertado',
                    'success'
                  )
                </script>";

            }
        }
        catch(Exception $e)
        {
            echo "Error al crear el usuario" . $e->getMessage();
        }
    }

    public function ValidUsuario()
    {
       $respuesta = false;

       try
       {

        $objDtoUser = new User();
            $objDaoUser = new UserModel($objDtoUser);
            $respuesta = $objDaoUser -> mldSearchAllUser()->fetchAll();

       }

       catch(PDOException $e)
       {

        echo "Error on the creation of the 
            controller of show all " . $e->getMessage();

       }

       return $respuesta;
    }
}
?>