<?php
	//include_once '../topo.php';
	include_once './UsuarioDao.php';
	include_once './Usuario.php';

	$objusuario = New Usuario();
	$objusuariodao = New UsuarioDao();
	
	$data = date("d/m/y");
	$objusuario->fecha = $data;
	$objusuario->nombre = $_GET['nombre'];
	$objusuario->cedula = $_GET['cedula'];
	$objusuario->lleva = $_GET['lleva'];
	
	$retorno = $objusuariodao->inserir($objusuario);
	
	if($retorno)
		echo "Registro";
	else {
		
	echo "Sin Registro"; 
    }
	//var_dump($retorno);
?>