<?php
//MODEL//
require_once 'model/dao/user.dao.php';
require_once 'model/dto/user.dto.php';
require_once 'model/conexion.php';
require_once 'model/dao/carrito.dao.php';
require_once 'model/dto/carrito.dto.php';
require_once 'model/dao/menu.dao.php';
require_once 'model/dto/menu.dto.php';

//Controller//
require_once 'controller/user.controller.php';
require_once 'controller/session.controller.php';
require_once 'controller/carrito.controller.php';
require_once 'controller/menu.controller.php';



$objRun = new Session();
$objRun -> getIntro();

?>
