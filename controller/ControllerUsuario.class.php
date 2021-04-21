<?php session_start(); ?>
<?php ob_start();?>

<?php

require "../service/UsuariosServiceImp.class.php";
require "../model/usuarios.class.php";

class ControllerUsuario{
/*
	public function agregar(){
		$usuario = new Usuarios();
		$userService = new UsuariosServiceImp();
		//modificar los datos del objeto usuario
		$usuario->setNombre("Omar");
		$usuario->setEmail("omar@gmail.con");
		$usuario->setUsername("omar");
		$usuario->setPassword(sha1("omar123"));
		$usuario->setFechaRegistro(date("Y-m-d"));
		//llamado del metodo guardar de la clase servicio
		$userService->guardar($usuario);
		//enviar a la vista de autentificacion
		//header("location:../view/formLogin.html");
	}
*/
	//metodo de produccion
	public function agregar($usuario){
		$userService = new UsuariosServiceImp();
		//llamado del metodo guardar de la clase servicio
		$userService->guardar($usuario);
		//enviar a la vista de autentificacion
		header("location:../view/formLogin.html");
	}

	public function autentificar($username,$password){
		$userService = new UsuariosServiceImp();
		$usuario = new Usuarios();
		$usuario = $userService->buscarPorUsernamePassword($username,$password);
		//evaluar ai regresa un usuario valido
		if(is_object($usuario)){
			//echo "<br>Este usuario si es valido";

			//varias variables de sesion
			/*
			$_SESSION['nombre'] = $usuario->getNombre();
			$_SESSION['correo'] = $usuario->getEmail();
			*/

			//arreglo asosiativo
			$_SESSION['miSesion'] = array();
			$_SESSION['miSesion']['nombre'] = $usuario->getNombre();
			$_SESSION['miSesion']['correo'] = $usuario->getEmail();
			$_SESSION['miSesion']['id'] = $usuario->getId();
			//echo "Bienvenido: ".$_SESSION['miSesion']['nombre'];
			header("location:../view/productos.class.php");
		} else{
			//echo "<br>No es un usuario valido. No aparece en la BD.";
			header("location:../view/formLogin.html");
		}
	}
}

?>
