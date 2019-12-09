<?php
//include_once '../topo.php';


    include_once './Usuario.php';
	include_once 'UsuarioDao.php';
	
	$c = new UsuarioDao();
        $listr = $c->listar();
		
		//var_dump($listar);
		echo "<div class='centro'>
			<h3>Lista de Usuarios</h3>";
        
        foreach ($listr as $value) { 
           echo $value["Id"] . " - "  . $value["Fecha"] . " - " . $value["Nombre"] . " - " . $value["Cedula"] . " - " . $value["Lleva"];
		   echo "<a href=editar.php?Id=".$value['Id'].">Editar</a>";
		   echo "<a href=excluir.php?Id=".$value['Id'].">Excluir</a>";
		   echo "<br>";
		   
		}
    
	if (isset($_POST['buscar'])) {
		
		$usuario = $_POST['buscar'];

		$listar = buscar($usuario);
		echo " <table border='2'>
			  <thead>
			   <tr>
			    <th>fecha</th>
				  <th>nombre</th>
				   <th>cedula</th>
				    <th>lleva</th>
			   </tr>
			 </thead>
			 <tbody> ";


		foreach ($listar as $usuario) {
			echo'<tr>';
			echo'<td>' . $usuario['fecha'] . '</td>';
			echo'<td>' . $usuario['nombre'] . '</td>';
			echo'<td>' . $usuario['cedula'] . '</td>';
			echo'<td>' . $usuario['lleva'] . '</td>';
			echo'<td><a href=editar.php?id=' . $usuario['id'] . '>Editar</a></td>';
		   
			echo'</tr>';
		}
	}
	echo '</div>';

	//include_once '../rodape.php';
?>