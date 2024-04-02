<?php

session_start();

class Session 
{
    public function getIntro()
    {
        if (isset($_SESSION['login']) and $_SESSION['login'] == true)
        
    {
        header('Location: index.php?Route=bienvenidos');
    exit;
    }
    
    else
    {
        $_SESSION['login'] = false;
    
        header('Location: index.php?Route=registro');
    exit;
    }


    }
}

?>

