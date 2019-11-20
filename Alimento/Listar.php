<?php
//include_once '../topo.php';


    include_once './Alimento.php';
	include_once 'AlimentoDao.php';
	
	$c = new AlimentoDao();
        $listr = $c->listar();

		//var_dump($listr);
		echo "<div class='centro'>
			<h3>Lista de Alimentos</h3>";
        
        foreach ($listr as $value) {
           echo $value["id"] . " - "  . $value["nombre"] . " - " . $value["unidad"];
		   echo "<a href=editar.php?id=".$value['id'].">Editar</a>";
		   echo "<a href=excluir.php?id=".$value['id'].">Excluir</a>";
		   echo "<br>";
		   
		}
    
	if (isset($_POST['buscar'])) {
		
		$alimento = $_POST['buscar'];

		$listar = buscar($alimento);
		echo " <table border='2'>
			  <thead>
			   <tr>
				  <th>nombre</th>
			   </tr>
			 </thead>
			 <tbody> ";


		foreach ($listar as $alimento) {
			echo'<tr>';
			echo'<td>' . $alimento['nombre'] . '</td>';
			echo'<td><a href=editar.php?id=' . $alimento['id'] . '>Editar</a></td>';
		   
			echo'</tr>';
		}
	}
	echo '</div>';

	//include_once '../rodape.php';
?>