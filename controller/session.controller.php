<?php

session_start();

class Session 
{
    public function getIntro()
    {
        if (isset($_SESSION['login']) and $_SESSION['login'] == true)
        
    {
       include_once 'view/module/bienvenidos.php';
    }
    
    else
    {
    
        include_once 'view/module/header.php';

    }


    }
}

?>

