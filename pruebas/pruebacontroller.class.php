<?php

require "../controller/ControllerUsuario.class.php";
$ctr = new ControllerUsuario();
//$ctr->agregar();
$ctr->autentificar("brandon",sha1("brandon123"));
?>