<?php

require_once 'model/dao/user.dao.php';
require_once 'model/dto/user.dto.php';
require_once 'controller/user.controller.php';
require_once 'model/conexion.php';
require_once 'controller/session.controller.php';


$objRun = new Session();
$objRun -> getIntro();

?>
