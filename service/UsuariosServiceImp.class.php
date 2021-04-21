<?php

require "../config/configdb.class.php";
require "../config/conexion.class.php";
require "IntUsuariosService.class.php";

class UsuariosServiceImp implements IntUsuariosService{
	//sobre-escribir los metodos abstractos
	public function guardar($usuario){
		//comprobar si llega el usuario
		echo "<br>Nombre: ".$usuario->getNombre();
		echo "<br>Email: ".$usuario->getEmail();
		echo "<br>";
		//tambien se puede imprimir el objeto
		var_dump($usuario);
		//variables locales para asignar los valores del objeto usuario
		$nombre = $usuario->getNombre();
		$email = $usuario->getEmail();
		$user = $usuario->getUsername();
		$password = $usuario->getPassword();
		$estatus = $usuario->getEstatus();
		$fecha = $usuario->getFechaRegistro();
		//formar la sentencia sql
		$sql = "insert into usuarios values(null,'$nombre','$email','$user','$password',$estatus,'$fecha')";
		echo "<br>".$sql;
		//crear una instancia de la clase conexion
		$objeto = new Conexion("localhost","id16048393_trippi_webapp","D-(j##eccW10qQuT","id16048393_webapp");
		$objeto->obtenerConn();
		$objeto->ejecutarQuery($sql);
		$objeto->cerrar();
	}

	public function buscarPorUsernamePassword($username,$password){
		/*
		$username = "jair";
		$password = sha1("jairAlan777");
		*/
		
		//formamos la sentencia sql
		$sql = "select * from usuarios where username like '$username' and password like '$password'";
		//echo "<br>".$sql;
		$objeto = new Conexion("localhost","id16048393_trippi_webapp","D-(j##eccW10qQuT","id16048393_webapp");
		$objeto->obtenerConn();
		//resultado de la consulta
		$resultado = $objeto->ejecutarQuery($sql);
		if(mysqli_num_rows($resultado) > 0){
			$arreglo=array();
			//asignamos el registro al arreglo
			$arreglo = mysqli_fetch_array($resultado);
			//una instancia de tipo usuario
			$usuario = new Usuarios();
			//modificamos
			$usuario->setId($arreglo[0]);
			$usuario->setNombre($arreglo[1]);
			$usuario->setEmail($arreglo[2]);
			$usuario->setUsername($arreglo[3]);
			$usuario->setPassword($arreglo[4]);
			$usuario->setEstatus($arreglo[5]);
			$usuario->setFechaRegistro($arreglo[6]);
			//cerramos la conexion
			$objeto->cerrar();
			return $usuario;
		} else{
			$objeto->cerrar();
			return null;
		}
	} //fin metodo
} //fin clase

?>