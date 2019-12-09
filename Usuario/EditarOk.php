<?php

	//include_once '../topo.php';
	include './Usuario.php';
	include './UsuarioDao.php';

		$objusuario = new Usuario();
		$objusuariodao = new  UsuarioDao();
		
		$objusuario->id = $_GET['Id'];
		$objusuario->fecha = $_GET['Fecha'];
		$objusuario->nombre = $_GET['Nombre'];
		$objusuario->cedula = $_GET['Cedula'];
		$objusuario->lleva = $_GET['Lleva'];
		
		//var_dump($objusuario);
		$retorno = $objusuariodao->editar($objusuario);
		
		if($retorno)
			echo "Editado";
		else {
			
		echo "No editado"; 
			
		}
?>

<?php
	//include_once '../rodape.php';
?>