<?php

 require "../model/usuarios.class.php";
 $objeto = new Usuarios();
 echo "ID: ".$objeto->getId();
 echo $objeto->toString();

?>