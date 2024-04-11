<?php

session_start();

class Session 
{
    public function getIntro()
    {

        if(isset($_GET['Route'])) //ESTE FUNCIONA PARA CREAR LAS RUTAS DE LAS PAGINAS
        {
            switch($_GET['Route']) 
            {


                case 'usuario':
                   include_once 'view/module/Admin/usuario.php';
                break;
     
              case 'Admin':
                include_once 'view/module/Admin/dashboard.php';
            break; 
    
                case 'bienvenidos':
                    include_once 'view/module/bienvenidos.php';
                break; 
    
                case 'menu':
                    include_once 'view/module/menu.php';
                   break;
    
                case 'nosotros':
                    include_once 'view/module/nosotros.php';
                break;
    
                case 'reserva':
                    include_once 'view/module/reserva.php';
                break;
    
                case 'registro':
                    include_once 'view/module/registro.php';
                break;
    
                case 'login':
                    include_once 'view/module/inicio_sesion.php';
                break; 
    
                case 'carrito':
                    include_once 'view/module/carrito.php';
                break;
    
                default:
                include_once 'bienvenidos.php';
                break;
            }
    
        }
          else
          {
            include_once 'view/module/bienvenidos.php';
          }
        // if(isset($_SESSION['Admin']) and $_SESSION['Admin'] == true)
        // {
        //       include_once 'view/module/Admin/dashboard.php';

        // }
        if (isset($_SESSION['login']) and $_SESSION['login'] == true)
         { include_once 'view/module/bienvenidos.php'; }
    
       //else
    //{
    
      //  include_once 'view/module/header.php';

    //}





    }


    
}

?>

