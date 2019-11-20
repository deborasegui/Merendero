<?php
	//include_once '../topo.php';
	include_once 'AlimentoDao.php';
	include_once './Alimento.php';

	$objalimento = New Alimento();
	$objalimentodao = New AlimentoDao();

	$objalimento->nombre = $_GET['nombre'];
	$objalimento->unidad = $_GET['unidad'];

	//var_dump($objalimento);
	$retorno = $objalimentodao->inserir($objalimento);

	if($retorno)
		echo "Alimento registrado";
	else {
		
	echo "Sin Registro"; 
		
}
?>
<?php
//include_once '../rodape.php';
?>