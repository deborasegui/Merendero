<?php

	//include_once '../topo.php';
	include './Alimento.php';
	include './AlimentoDao.php';

		$objalimento = new Alimento();
		$objalimentodao = new  AlimentoDao();
		
		$objalimento->id = $_GET['id'];
		$objalimento->nombre = $_GET['nombre'];
		
		var_dump($objalimento);
		$retorno = $objalimentodao->editar($objalimento);
		
		if($retorno)
			echo "edito";
		else {
			
		echo "edito"; 
			
		}
?>

<?php
	//include_once '../rodape.php';
?>