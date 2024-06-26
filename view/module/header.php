<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="view/css/estilos.css">
  <link rel="stylesheet" href="view/css/inicio.css">
  <link rel="stylesheet" href="view/css/bootstrap.min (2).css">
  <link rel="stylesheet" href="view/css/bootstrap.min (5).css">
  <link rel="stylesheet" href="view/css/bienvenido.css">
  <link rel="stylesheet" href="view/css/bootstrap.min_reserva.css">
  <link rel="stylesheet" href="view/css/bootstrap.min_sobrenosotros.css">
  <link rel="stylesheet" href="view/css/estilo_reserva.css">
  <link rel="stylesheet" href="view/css/estilo_sobrenosotros.css">
  <link rel="stylesheet" href="view/css/estilos.css">
  <link rel="stylesheet" href="view/css/menu_mundus.css">
  <link rel="stylesheet" href="view/css/registro.css">
  <link rel="stylesheet" href="view/css/registro1.css">
  <link rel="stylesheet" href="view/css/registro2.css">
  <link rel="stylesheet" href="view/css/styleMain.css">
  <link rel="stylesheet" href="view/css/styleSL.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>MUNDUS FOOD </title>
</head>
<body>

      <!-- barra de navegacion-->
    <div class="container">
        <nav class="navbar navbar-expand-lg btn-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?Route=bienvenidos">Mundus Food</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?Route=menu">Menu</a>
                    </li>

                    <li class="nav-item">
                     <a class="nav-link" href="index.php?Route=reserva">Reserva</a>
                   </li>

                    <li class="nav-item">
                      <a class="nav-link" href="index.php?Route=nosotros">Sobre nosotros</a>
                    </li>

                    
                </ul>
                </div>
                <?php
                
                try
                { //session_start();
                    if(isset($_SESSION['login']) and $_SESSION['login'] == true)
                    {
                       
                          
                       echo(  '<form method="post">
                       <input type="hidden" class="nav-item" name="close">
                       <button type="submit" class="btn btn-outline-light px-3 fs-6">Cerrar Sesion</button>
                     </form>'); 
                      
                       if (isset($_POST['close'])) {
                        $_SESSION['login'] = false;
                        unset($_SESSION['login']);
                        header('location: index.php');
                      }
    
                    }
                    else
                    {
                        echo('<a class="btn btn-outline-success" href="index.php?Route=login">inicio de sesion</a>
                        <div style="width: 10px; height: 10px;"></div>
                   <a class="btn btn-outline-success" href="index.php?Route=registro">registrarte</a>');
                   
                   
                    }
                }
                catch(Exception $e)
                {

                }
                ?>
                
                </div>
        </nav>
    </div>

    <?php

    if(isset($_GET['Route'])) //ESTE FUNCIONA PARA CREAR LAS RUTAS DE LAS PAGINAS
    {
        switch($_GET['Route']) 
        {

          case 'Admin':
            include_once 'Admin/dashboard.php';
        break; 

            case 'bienvenidos':
                include_once 'bienvenidos.php';
            break; 

            case 'menu':
                include_once 'menu.php';
               break;

            case 'nosotros':
                include_once 'nosotros.php';
            break;

            case 'reserva':
                include_once 'reserva.php';
            break;

            case 'registro':
                include_once 'registro.php';
            break;

            case 'login':
                include_once 'inicio_sesion.php';
            break; 

            case 'carrito':
                include_once 'carrito.php';
            break;

            default:
            include_once 'bienvenidos.php';
            break;
        }

    }
      else
      {
        include_once 'bienvenidos.php';
      }
    
    ?>