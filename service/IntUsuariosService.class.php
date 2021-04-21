<?php

//Logica del negocio para la tabla de usuarios
interface IntUsuariosService{
	public function guardar($usuario);
	public function buscarPorUsernamePassword($username,$password);

	/*
	public function obtenerTodosusuarios();
	public function eliminar($idUsuario);
	public function modificar($usuario);
	*/
}

?>